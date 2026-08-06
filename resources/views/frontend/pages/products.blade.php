@extends('frontend.layouts.app')
@section('content')
@php
    $hasSubFilters = isset($subcategoryFilters) && $subcategoryFilters->count() > 0;
    $isHubListing = !empty($hubProductListing);
    $showSubcatSelect = $hasSubFilters;

    $category_detail = $category;
    $cid = isset($activeFilter) && $activeFilter ? $activeFilter->id : $category->id;
@endphp

<section class="ae-page">
    <div class="ae-page-inner">
        <nav class="ae-crumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('products.index') }}">Our Products</a>
            <span>/</span>
            @if(isset($cat))
                <a href="{{ route('categories', $cat->slug) }}">{!! $cat->name !!}</a>
            @elseif(isset($category))
                <span>{!! $category->name !!}</span>
            @endif
            @if($isHubListing || $showSubcatSelect)
                @if(isset($sub_cat))
                    <span>/</span>
                    <a href="{{ route('categories', $sub_cat->slug) }}">{!! $sub_cat->name !!}</a>
                @elseif(isset($category))
                    <span>/</span>
                    <span>{!! $category->name !!}</span>
                @endif
                @if(isset($activeFilter) && $activeFilter)
                    <span>/</span>
                    <span>{!! $activeFilter->name !!}</span>
                @endif
            @elseif($hasSubFilters)
                @if(isset($sub_cat))
                    <span>/</span>
                    <a href="{{ route('categories', $sub_cat->slug) }}">{!! $sub_cat->name !!}</a>
                @endif
                @if(isset($activeFilter) && $activeFilter)
                    <span>/</span>
                    <span>{!! $activeFilter->name !!}</span>
                @endif
            @elseif(isset($sub_cat))
                <span>/</span>
                <span>{!! $sub_cat->name !!}</span>
            @endif
            @if(!$hasSubFilters && isset($sub_sub_cat))
                <span>/</span>
                <span>{!! $sub_sub_cat->name !!}</span>
            @endif
        </nav>

        <div class="ae-layout">
            @include('frontend.partials.category_sidebar', ['sideTitle' => 'Categories'])

            <div>
                <div class="ae-page-head">
                    <h1>{!! $category_detail['name'] !!}</h1>
                </div>

                @php
                    $aboutCat = null;
                    $aboutHtml = null;
                    if ($isHubListing && isset($activeFilter) && $activeFilter && !empty($activeFilter->description)) {
                        $aboutCat = $activeFilter;
                        $aboutHtml = $activeFilter->description;
                    } elseif ($isHubListing && !empty($category->description)) {
                        $aboutCat = $category;
                        $aboutHtml = $category->description;
                    } elseif ($hasSubFilters && !empty($category->description)) {
                        $aboutCat = $category;
                        $aboutHtml = $category->description;
                    } elseif (!empty($category->description)) {
                        $aboutCat = $category;
                        $aboutHtml = $category->description;
                    } elseif (!empty($category_detail['description'])) {
                        $aboutCat = $category_detail;
                        $aboutHtml = $category_detail['description'];
                    }
                @endphp
                @if($aboutCat && $aboutHtml)
                    <div class="ae-panel-card ae-page-intro">
                        <div class="body">
                            @if(!empty($aboutCat->image ?? $aboutCat['image'] ?? null))
                                <img src="{{ asset('uploads/product_images/'.($aboutCat->image ?? $aboutCat['image'])) }}"
                                    alt="" style="max-width: 400px; margin-top: 45px;" class="ae-page-intro-image">
                            @endif
                            {!! $aboutHtml !!}
                        </div>
                    </div>
                @endif

                <p class="ae-page-count">
                    Showing {{ count($products) }} {{ count($products) === 1 ? 'product' : 'products' }}
                    @if($showSubcatSelect && empty($activeSubSlug))
                        from all subcategories
                    @endif
                </p>

                <div class="ae-listing-toolbar">
                    @if($showSubcatSelect)
                        <div class="ae-subcat-select-wrap">
                            <label class="ae-subcat-select-label" for="aeSubcatSelect">Filter by subcategory</label>
                            <select id="aeSubcatSelect" class="ae-subcat-select" aria-label="Filter by subcategory">
                                <option value="{{ route('categories', $category->slug) }}" @selected(empty($activeSubSlug))>
                                    All {!! strip_tags($category->name) !!} ({{ $hubProductCount ?? count($products) }})
                                </option>
                                @foreach($subcategoryFilters as $filter)
                                    <option
                                        value="{{ route('categories', $category->slug) }}?sub={{ $filter->slug }}"
                                        @selected(($activeSubSlug ?? '') === $filter->slug)
                                    >{!! $filter->name !!} ({{ $filter->product_count ?? 0 }})</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="ae-search-box">
                        <label class="ae-search-label" for="aeProdSearch">Search</label>
                        <input type="text" id="aeProdSearch" placeholder="Search product…" autocomplete="off">
                        <input type="hidden" id="aeProdSearchId" value="{{ $cid }}">
                        <div class="ae-cat-suggest" id="aeProdSuggest">
                            <ul id="aeProdSuggestList"></ul>
                        </div>
                    </div>
                </div>

                @if(count($products) > 0)
                    <div class="ae-card-grid">
                        @foreach($products as $item)
                            <a class="ae-pcard" href="{{ url('/product/'.$item->slug) }}">
                                <div class="ae-pcard-media">
                                    <img
                                        src="{{ asset($item->image ? 'uploads/product_images/'.$item->image : 'assets/images/no_product.png') }}"
                                        alt="{!! strip_tags($item->name) !!}"
                                        loading="lazy"
                                        onerror="this.onerror=null;this.src='{{ asset('assets/images/no_product.png') }}';"
                                    >
                                </div>
                                <div class="ae-pcard-title">{!! $item->name !!}</div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="ae-empty">
                        <img src="{{ asset('assets/images/not_found.jpg') }}" alt="Not found" style="max-width:280px;">
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>

<style>
.ae-cat-suggest {
  display: none;
  margin-top: 8px;
  position: relative;
  z-index: 5;
}
.ae-cat-suggest.is-open { display: block; }
.ae-cat-suggest ul {
  list-style: none;
  margin: 0;
  padding: 0;
  background: #0f172a;
  border-radius: 10px;
  overflow: hidden;
  max-height: 320px;
  overflow-y: auto;
  box-shadow: 0 12px 28px rgba(15, 23, 42, 0.2);
}
.ae-cat-suggest li { border-bottom: 1px solid #1e293b; }
.ae-cat-suggest li:last-child { border-bottom: 0; }
.ae-cat-suggest a {
  display: block;
  padding: 10px 14px;
  color: #fff;
  text-decoration: none;
  font-size: 13px;
  font-family: var(--font-body);
}
.ae-cat-suggest a:hover { background: var(--ae-blue); }
.ae-cat-suggest .ae-cat-suggest-empty {
  padding: 12px 14px;
  color: #94a3b8;
  font-size: 13px;
}

.ae-hub-filter {
  margin-bottom: 16px;
}
</style>

@push('scripts')
<script>
(function () {
  function ready(fn) {
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', fn);
    else fn();
  }

  ready(function () {
    var input = document.getElementById('aeProdSearch');
    var catId = document.getElementById('aeProdSearchId');
    var box = document.getElementById('aeProdSuggest');
    var list = document.getElementById('aeProdSuggestList');

    if (input && catId && box && list) {
      var timer = null;
      var endpoint = @json(url('/get_categories_product'));

      function hideSuggest() {
        box.classList.remove('is-open');
        list.innerHTML = '';
      }

      function showSuggest(html) {
        list.innerHTML = html || '<li class="ae-cat-suggest-empty">No products found</li>';
        box.classList.add('is-open');
      }

      input.addEventListener('input', function () {
        var q = input.value.trim();
        clearTimeout(timer);
        if (!q.length) {
          hideSuggest();
          return;
        }

        timer = setTimeout(function () {
          var url = endpoint.replace(/\/$/, '') + '/' + encodeURIComponent(q) + '/' + encodeURIComponent(catId.value);
          fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
            .then(function (res) { return res.text(); })
            .then(function (html) {
              showSuggest((html || '').trim());
            })
            .catch(function () {
              showSuggest('<li class="ae-cat-suggest-empty">Unable to search right now</li>');
            });
        }, 250);
      });

      document.addEventListener('click', function (e) {
        if (!box.contains(e.target) && e.target !== input) hideSuggest();
      });
    }

    var subcatSelect = document.getElementById('aeSubcatSelect');
    if (subcatSelect) {
      subcatSelect.addEventListener('change', function () {
        if (subcatSelect.value) {
          window.location.href = subcatSelect.value;
        }
      });
    }
  });
})();
</script>
@endpush
@endsection
