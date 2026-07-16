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
                    <input type="text" id="search" placeholder="Search category…">
                    <input type="hidden" id="cat_id" value="{{ $cid }}">
                    <div id="suggesstion-box2">
                        <ul id="sdata2"></ul>
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
#sdata2 { list-style:none; margin:6px 0 0; padding:0; background:#111; border-radius:8px; overflow:hidden; }
#sdata2 li { border-bottom:1px solid #333; }
#sdata2 li a { display:block; padding:8px 12px; color:#fff; text-decoration:none; font-size:13px; }
#sdata2 li a:hover { background:var(--ae-blue); }
#suggesstion-box2 { display:none; }
</style>

<script>
$("#search").keyup(function() {
    $("#suggesstion-box2").hide();
    if ($(this).val().length == 0) return false;
    $.ajax({
        type: "GET",
        url: "{{ route('get_categories') }}/" + $(this).val() + "/" + $("#cat_id").val(),
        success: function(data) {
            $("#suggesstion-box2").show();
            $("#sdata2").html(data);
        }
    });
});
</script>
@endsection
