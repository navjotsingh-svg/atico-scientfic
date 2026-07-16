@extends('frontend.layouts.app')
@section('content')
@php
    if (isset($sub_sub_cat)) {
        $category_detail = $sub_sub_cat;
    } elseif (isset($sub_cat)) {
        $category_detail = $sub_cat;
    } elseif (isset($cat)) {
        $category_detail = $cat;
    } else {
        $category_detail = $category;
    }
    $cid = isset($cat) ? $cat['id'] : $category['id'];
@endphp

<section class="ae-page">
    <div class="ae-page-inner">
        <nav class="ae-crumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            @if(isset($cat))
                <span>{!! $cat['name'] !!}</span>
            @else
                <span>{!! $category['name'] !!}</span>
            @endif
            @if(isset($sub_cat) && $sub_cat)
                <span>/</span>
                <span>{!! $sub_cat['name'] !!}</span>
            @endif
            @if(isset($sub_sub_cat['name']))
                <span>/</span>
                <span>{!! $sub_sub_cat['name'] !!}</span>
            @endif
        </nav>

        <div class="ae-layout">
            @include('frontend.partials.category_sidebar', ['sideTitle' => 'Categories'])

            <div>
                <div class="ae-page-head">
                    <h1>{!! $category_detail['name'] !!}</h1>
                    <p>Showing {{ count($categories) }} {{ count($categories) === 1 ? 'result' : 'results' }}</p>
                </div>

                <div class="ae-search-box">
                    <input type="text" id="aeCatSearch" placeholder="Search category…" autocomplete="off">
                    <input type="hidden" id="aeCatSearchId" value="{{ $cid }}">
                    <div class="ae-cat-suggest" id="aeCatSuggest">
                        <ul id="aeCatSuggestList"></ul>
                    </div>
                </div>

                @if(count($categories) > 0)
                    <div class="ae-card-grid">
                        @foreach($categories as $item)
                            <a class="ae-pcard" href="{{ route('categories', $item->slug) }}">
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

                @if(!empty($category_detail['description']))
                    <div class="ae-panel-card" style="margin-top:22px;">
                        <h2>About {!! $category_detail['name'] !!}</h2>
                        <div class="body">
                            @if(!empty($category_detail['image']))
                                <img
                                    src="{{ asset('uploads/product_images/'.$category_detail['image']) }}"
                                    alt=""
                                    style="float:right;max-width:220px;margin:0 0 12px 16px;border:1px solid #e5e7eb;border-radius:8px;"
                                >
                            @endif
                            @if(isset($cat))
                                {!! $cat['description'] !!}
                            @else
                                {!! $category['description'] !!}
                            @endif
                        </div>
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
</style>

@push('scripts')
<script>
(function () {
  function ready(fn) {
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', fn);
    else fn();
  }

  ready(function () {
    var input = document.getElementById('aeCatSearch');
    var catId = document.getElementById('aeCatSearchId');
    var box = document.getElementById('aeCatSuggest');
    var list = document.getElementById('aeCatSuggestList');
    if (!input || !catId || !box || !list) return;

    var timer = null;
    var endpoint = @json(url('/get_categories'));

    function hideSuggest() {
      box.classList.remove('is-open');
      list.innerHTML = '';
    }

    function showSuggest(html) {
      list.innerHTML = html || '<li class="ae-cat-suggest-empty">No categories found</li>';
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
  });
})();
</script>
@endpush
@endsection
