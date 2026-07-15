(function () {
  function ready(fn) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', fn);
    } else {
      fn();
    }
  }

  function cleanText(value) {
    var text = String(value == null ? '' : value);
    text = text.replace(/<[^>]*>/g, ' ');
    text = text.replace(/&lt;/gi, '<').replace(/&gt;/gi, '>').replace(/&amp;/gi, '&').replace(/&quot;/gi, '"').replace(/&#039;/g, "'");
    text = text.replace(/<[^>]*>/g, ' ');
    return text.replace(/\s+/g, ' ').trim();
  }

  function addHeading(list, text) {
    var li = document.createElement('li');
    li.className = 'ae-search-heading';
    var strong = document.createElement('strong');
    strong.textContent = text;
    li.appendChild(strong);
    list.appendChild(li);
  }

  function addLink(list, name, url) {
    var li = document.createElement('li');
    var a = document.createElement('a');
    a.href = url;
    a.textContent = cleanText(name);
    li.appendChild(a);
    list.appendChild(li);
  }

  function addEmpty(list, text) {
    var li = document.createElement('li');
    li.className = 'ae-search-empty-item';
    li.textContent = text;
    list.appendChild(li);
  }

  function normalizePayload(data) {
    var cats = [];
    var prods = [];

    if (!data) return { categories: cats, products: prods };

    // New API: { categories:[{name,url}], products:[{name,url}] }
    if (!Array.isArray(data) && typeof data === 'object') {
      if (Array.isArray(data.categories)) {
        data.categories.forEach(function (item) {
          if (item && item.name && item.url) cats.push(item);
        });
      }
      if (Array.isArray(data.products)) {
        data.products.forEach(function (item) {
          if (item && item.name && item.url) prods.push(item);
        });
      }
      return { categories: cats, products: prods };
    }

    // Legacy API: ["<li>---</li>", "<li><a href='...'>Name</a></li>", ...]
    if (Array.isArray(data)) {
      var section = 'categories';
      data.forEach(function (raw) {
        var chunk = String(raw || '');
        if (/categories/i.test(chunk) && /---/.test(chunk)) {
          section = 'categories';
          return;
        }
        if (/products/i.test(chunk) && /---/.test(chunk)) {
          section = 'products';
          return;
        }
        var match = chunk.match(/href=['"]([^'"]+)['"][^>]*>([\s\S]*)</i) ||
                    chunk.match(/href=['"]([^'"]+)['"][^>]*>([\s\S]*?)$/i);
        if (!match) return;
        var item = { url: match[1].replace(/\\\//g, '/'), name: cleanText(match[2]) };
        if (!item.name || !item.url) return;
        if (section === 'products') prods.push(item);
        else cats.push(item);
      });
    }

    return { categories: cats, products: prods };
  }

  function renderResults(container, payload) {
    var cats = payload.categories || [];
    var prods = payload.products || [];

    if (!cats.length && !prods.length) {
      container.innerHTML = '<div class="ae-search-empty">No results found</div>';
      return;
    }

    var list = document.createElement('ul');
    list.className = 'ae-search-list';

    addHeading(list, 'Categories (' + cats.length + ')');
    if (!cats.length) addEmpty(list, 'No categories found');
    else cats.forEach(function (item) { addLink(list, item.name, item.url); });

    addHeading(list, 'Products (' + prods.length + ')');
    if (!prods.length) addEmpty(list, 'No products found');
    else prods.forEach(function (item) { addLink(list, item.name, item.url); });

    container.innerHTML = '';
    container.appendChild(list);
  }

  ready(function () {
    var searchRoot = document.getElementById('aeSearch');
    var searchBtn = document.getElementById('aeSearchBtn');
    var searchPanel = document.getElementById('aeSearchPanel');
    var searchInput = document.getElementById('aeSearchInput');
    var searchResults = document.getElementById('aeSearchResults');
    if (!searchRoot || !searchBtn || !searchPanel || !searchInput || !searchResults) return;

    var searchTimer = null;
    var searchUrl = searchRoot.getAttribute('data-search-url') || (window.AE_SEARCH_URL || '');

    function closeSearch() {
      searchRoot.classList.remove('is-open');
      searchPanel.hidden = true;
      searchBtn.setAttribute('aria-expanded', 'false');
    }

    function openSearch() {
      searchRoot.classList.add('is-open');
      searchPanel.hidden = false;
      searchBtn.setAttribute('aria-expanded', 'true');
      setTimeout(function () { searchInput.focus(); }, 50);
    }

    searchBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      if (searchPanel.hidden) openSearch(); else closeSearch();
    });

    document.addEventListener('click', function (e) {
      if (!searchRoot.contains(e.target)) closeSearch();
    });

    searchInput.addEventListener('input', function () {
      var q = searchInput.value.trim();
      clearTimeout(searchTimer);
      if (!q.length) {
        searchResults.innerHTML = '';
        searchResults.classList.remove('has-results');
        return;
      }
      if (!searchUrl) {
        searchResults.innerHTML = '<div class="ae-search-empty">Search is not configured</div>';
        searchResults.classList.add('has-results');
        return;
      }

      searchTimer = setTimeout(function () {
        searchResults.innerHTML = '<div class="ae-search-loading">Searching...</div>';
        searchResults.classList.add('has-results');

        fetch(searchUrl.replace(/\/$/, '') + '/' + encodeURIComponent(q), {
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        })
          .then(function (res) {
            return res.text().then(function (text) {
              var data = null;
              try { data = JSON.parse(text); } catch (err) { data = null; }
              return data;
            });
          })
          .then(function (data) {
            renderResults(searchResults, normalizePayload(data));
          })
          .catch(function () {
            searchResults.innerHTML = '<div class="ae-search-empty">Unable to search right now</div>';
          });
      }, 250);
    });
  });
})();
