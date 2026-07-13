@extends('frontend.layouts.app')
@section('content')
@php
  $sideCategories = $sideCategories ?? sidebarCategories();
@endphp

<section class="ae-page ae-products-index">
  <div class="ae-page-inner">
    <nav class="ae-crumb" aria-label="Breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Products</span>
    </nav>

    <div class="ae-layout">
      <aside class="ae-side">
        <h3 class="ae-side-title">Browse Categories</h3>
        <ul class="ae-side-list">
          @forelse($sideCategories as $sideCat)
            <li>
              <a href="{{ route('categories', $sideCat->slug) }}">{!! $sideCat->name !!}</a>
            </li>
            @if(isset($sideCat->sub_cats))
              @foreach($sideCat->sub_cats as $sub)
                <li>
                  <a href="{{ route('categories', $sub->slug) }}" class="is-sub">{!! $sub->name !!}</a>
                </li>
              @endforeach
            @endif
          @empty
            <li><span class="ae-side-empty">No categories found</span></li>
          @endforelse
        </ul>
      </aside>

      <div>
        <div class="ae-page-head ae-products-head">
          <h1>Our Products</h1>
          <p>Browse our comprehensive range of high-quality laboratory and educational equipment.</p>
        </div>

        <div class="ae-prod-grid">
          @foreach($categories as $item)
            @php
              $isAsset = !empty($item->image_is_asset);
              if ($isAsset) {
                  $img = asset($item->image);
              } elseif (!empty($item->image)) {
                  $img = asset('uploads/product_images/'.$item->image);
              } else {
                  $img = asset('assets/images/export-slides/Image'.(($loop->index % 8) + 1).'.webp');
              }
            @endphp
            <a class="ae-cat-card" href="{{ route('categories', $item->slug) }}">
              <div class="ae-cat-card-media">
                <img
                  src="{{ $img }}"
                  alt="{!! strip_tags($item->name) !!}"
                  loading="lazy"
                  onerror="this.onerror=null;this.src='{{ asset('assets/images/no_product.png') }}';"
                >
              </div>
              <div class="ae-cat-card-title">{!! $item->name !!}</div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
