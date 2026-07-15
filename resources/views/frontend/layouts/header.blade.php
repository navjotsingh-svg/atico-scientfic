<div class="ae-topbar">
  <div class="wrap">
    <div class="ae-top-left">
      <div class="ae-lang" id="aeLang">
        <div id="google_translate_element1" class="ae-gt-hidden"></div>
        <button type="button" class="ae-lang-btn" id="aeLangBtn" aria-haspopup="listbox" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
            <path d="M2 12h20"></path>
          </svg>
          <span class="ae-lang-label" id="aeLangLabel">🇬🇧 English</span>
          <svg class="ae-lang-chevron" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m6 9 6 6 6-6"></path>
          </svg>
        </button>
        <div class="ae-lang-menu" id="aeLangMenu" role="listbox" hidden>
          <button type="button" class="ae-lang-option is-active" data-lang="en" data-label="🇬🇧 English">🇬🇧 English</button>
          <button type="button" class="ae-lang-option" data-lang="hi" data-label="🇮🇳 Hindi">🇮🇳 Hindi</button>
          <button type="button" class="ae-lang-option" data-lang="ar" data-label="🇸🇦 Arabic">🇸🇦 Arabic</button>
          <button type="button" class="ae-lang-option" data-lang="fr" data-label="🇫🇷 French">🇫🇷 French</button>
          <button type="button" class="ae-lang-option" data-lang="es" data-label="🇪🇸 Spanish">🇪🇸 Spanish</button>
          <button type="button" class="ae-lang-option" data-lang="pt" data-label="🇵🇹 Portuguese">🇵🇹 Portuguese</button>
          <button type="button" class="ae-lang-option" data-lang="de" data-label="🇩🇪 German">🇩🇪 German</button>
          <button type="button" class="ae-lang-option" data-lang="ru" data-label="🇷🇺 Russian">🇷🇺 Russian</button>
          <button type="button" class="ae-lang-option" data-lang="zh-CN" data-label="🇨🇳 Chinese">🇨🇳 Chinese</button>
          <button type="button" class="ae-lang-option" data-lang="id" data-label="🇮🇩 Indonesian">🇮🇩 Indonesian</button>
          <button type="button" class="ae-lang-option" data-lang="tr" data-label="🇹🇷 Turkish">🇹🇷 Turkish</button>
          <button type="button" class="ae-lang-option" data-lang="sw" data-label="🇰🇪 Swahili">🇰🇪 Swahili</button>
        </div>
      </div>
    </div>
    <div class="actions">
      <a class="ae-mail-link" href="mailto:sales@aticoscientific.com">sales@aticoscientific.com</a>
      <a class="ae-enquiry" href="{{ url('/contact-us') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
          <rect x="2" y="4" width="20" height="16" rx="2"></rect>
        </svg>
        <span>Send Enquiry</span>
      </a>
    </div>
  </div>
</div>

<header class="ae-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-0 d-flex align-items-center justify-content-between" style="max-width:1400px;margin:0 auto;width:100%;">
      <a class="navbar-brand m-0" href="{{ url('/') }}">
        <img class="logo" src="{{ asset('assets/images/logo.png') }}" alt="Atico Scientific" width="140" height="42" decoding="async">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item"><a class="nav-link {{ ($route ?? '') === 'home' ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ url('/about-us') }}">About Us</a></li>
          <li class="nav-item dropdown ae-products-drop">
            <a class="nav-link {{ request()->is('products') || request()->is('category*') || request()->is('product*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item fw-bold" href="{{ route('products.index') }}">All Products</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              @foreach(($navGroups ?? getGroups()) as $group)
                <li class="{{ isset($group->categories) && count($group->categories) ? 'ae-has-sub' : '' }}">
                  <a class="dropdown-item" href="{{ route('categories', $group->route) }}">{!! $group->name !!}</a>
                  @if(isset($group->categories) && count($group->categories))
                    <ul class="submenu dropdown-menu">
                      @foreach($group->categories as $category)
                        <li>
                          <a class="dropdown-item" href="{{ route('categories', $category->slug) }}">
                            {!! $category->short_name ?? $category->name !!}
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  @endif
                </li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/lab-tenders') }}">Lab Tenders</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/blogs') }}">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
          <li class="nav-item">
            <div class="ae-search" id="aeSearch" data-search-url="{{ url('/products/search') }}">
              <button type="button" class="ae-search-btn" id="aeSearchBtn" aria-label="Search" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="m21 21-4.34-4.34"></path>
                  <circle cx="11" cy="11" r="8"></circle>
                </svg>
              </button>
              <div class="ae-search-panel" id="aeSearchPanel" hidden>
                <input type="text" id="aeSearchInput" placeholder="Search by category or product name" autocomplete="off">
                <div class="ae-search-results" id="aeSearchResults"></div>
              </div>
            </div>
          </li>
          <li class="nav-item d-none d-xl-flex align-items-center gap-2 ms-2">
            <img src="{{ asset('assets/images/call.png') }}" alt="" width="22" height="22" loading="lazy">
            <a class="ae-phones" href="tel:+919996186555">
              <small>Talk to Us:</small>
              <strong>+91 99961 86555</strong>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

@push('scripts')
<script>
window.addEventListener('load', function () {
  document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
    if (window.innerWidth >= 992) return;
    element.addEventListener('click', function (e) {
      var nextEl = this.nextElementSibling;
      if (nextEl && nextEl.classList.contains('submenu')) {
        e.preventDefault();
        nextEl.style.display = nextEl.style.display === 'block' ? 'none' : 'block';
      }
    });
  });

  var productsDrop = document.querySelector('.ae-products-drop');
  var productsLink = productsDrop ? productsDrop.querySelector(':scope > .nav-link') : null;
  if (productsDrop && productsLink) {
    productsLink.addEventListener('click', function (e) {
      if (window.innerWidth >= 992) return;
      e.preventDefault();
      productsDrop.classList.toggle('is-open');
    });
  }
});
</script>
@endpush
