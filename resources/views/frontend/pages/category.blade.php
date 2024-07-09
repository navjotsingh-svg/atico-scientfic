@extends('frontend.layouts.app')
@section('content')
<style>
    #owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
.wpb_wrapper {
    border: 6px solid #f3f3f3;
    padding: 10px 5px;
    text-align: center;
    min-height: 275px;
}

.explore_now, .category_name{
    color: #0530AD;
    margin-top:10px;
}
.support_team{
    background-color: #0046AE;
    color: #FFFFFF;
    padding: 50px;
}
.tenders{
    background-color: #00398E;
    color: #FFFFFF;
    padding: 50px;
}
.dealership{
    background-color: #002761;
    color: #FFFFFF;
    padding: 50px;
}
.contact_us{
    background-color: #01193D;
    color: #FFFFFF;
    padding: 50px;
}
.ref_icons {
    border-radius: 50%;
    border: 1px solid #E8E8E8;
    width: 80px;
    height: 80px;
    padding: 6px;
    position: absolute;
    margin-top: -15px;
    margin-left: 70px;
}
#contact_details{
    margin-top: 30px;
}
#arrows{
    margin-top:30px;
}
.aboutus{
    display: inline-grid;
    margin-left: 16px;
    vertical-align: middle;
}
.li-icon{
    list-style-image: url({{ asset('assets/images/li.png') }})
}
.info {
    border: 1px solid #D0D0D0;
    padding: 10px;
    margin-top: 30px;
}
.brd-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 501px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 590px;
}
</style>
@if(isset($sub_sub_cat))
								@php
								$category_detail = $sub_sub_cat;
								@endphp
								@elseif(isset($sub_cat))
								@php
								$category_detail = $sub_cat;
								@endphp
								@elseif(isset($cat))
								@php
								$category_detail = $cat;
								@endphp
								@else
								@php
								$category_detail = $category;
								@endphp
								@endif
							
<div class="breadcrumb-wrapper" style="background:url({{ asset('assets/images/category_bg.png') }});min-height:300px;background-color:#000;">
							<div class="container">
								<div class="breadcrumb-wrapper-inner">
									<span><a class="brd-heading" href="{{ route('home') }}" class="home"><span>Home / </span></a></span>
									<span class="archive post-product-archive current-item brd-sub-heading" >
										@if(isset($cat))
										<i class="fa fa-angle-right pl-1" aria-hidden="true"></i> {!! $cat['name'] !!}
										@else
										<i class="fa fa-angle-right pl-1" aria-hidden="true"></i> {!! $category['name'] !!}
										@endif
									</span>
									<span class="archive post-product-archive current-item">
										@if(isset($sub_cat))
										<i class="fa fa-angle-right pl-1" aria-hidden="true"></i> @if($sub_cat) {!! $sub_cat['name'] !!} @endif
										@endif
									</span>
									<span class="archive post-product-archive current-item">
										@if(isset($sub_sub_cat['name']))
										<i class="fa fa-angle-right pl-1" aria-hidden="true"></i> {!! $sub_sub_cat['name'] !!}
										@endif
									</span>
								</div>
							</div>
						</div>
<div class="container">
    <div class="row">
    <div class="col-md-3">
        <div class="info" style="background:#0530AD;color:#fff;">
           <label> Categories </label>
           </div>
           <div class="accordion" id="accordionExample">
  
  
  

                          @if(count(sidebarCategories())>0)
                          @foreach(sidebarCategories() as $key => $category)

                                                    <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $key ?>" aria-expanded="false" aria-controls="collapseOne<?= $key ?>">
      {!! $category->name !!}
      </button>
    </h2>
    <div id="collapseOne<?= $key ?>" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      @foreach($category->sub_cats as $key => $sub_cat)

<p class="mb-0" style="padding:10px;border-bottom:1px solid #DFDFDF;"><a style="text-decoration:none;color:black;" href="{{ route('categories', $sub_cat->slug) }}">{!! $sub_cat->name !!}</a></p>

@endforeach  </div>
    </div>
     </div>
    @endforeach
                          @endif
 
  </div>
                        
        
        </div>
        <div class="col-md-9">
        <div class="info">
            Showing {{ count($categories) }} result
        </div>
        <div class="details" style="margin-top:20px;">
            <div class="row">
                <div class="col-md-8" style="text-align:justify;line-height:2;">
                <h3 class="category_name">{!! $category_detail['name'] !!}</h3>
                @if(isset($cat))
						{!! $cat['description'] !!}
						@else
						{!! $category['description'] !!}
						@endif
                </div>
                <div class="col-md-4">
                @if($category_detail['description'] != '')
						<img width="330" height="262" src="{{ asset($category_detail['image'] ? 'uploads/product_images/'.$category_detail['image'] : 'assets/images/no_product.png') }}" alt="" />
						@endif
                </div>
            </div>

            <div class="row multi-columns-row themestek-boxes-row-wrapper">
					@if(count($categories)>0)
					@foreach($categories as $key => $category)
					<div class="ts-box-col-wrapper col-lg-3 col-sm-6 col-md-4 col-xs-12 category_box" style="border:1px solid #DFDFDF !important;width:24%;margin-right:1%;margin-top:10px;" >
						<article class="themestek-box themestek-box-service ts-servicebox-style-3 category_border">
							<div class="themestek-post-item">
								<span class="themestek-item-thumbnail category_box">
									<span class="themestek-item-thumbnail-inner">
										<a href="{{ route('categories', $category->slug) }}"><img width="200" height="162" src="{{ asset($category->image ? 'uploads/product_images/'.$category->image : 'assets/images/no_product.png') }}"  alt=""onerror="this.onerror=null;this.src='{{ asset("assets/images/no_product.png") }}';"/></a>
									</span>
								</span>
								<div class="themestek-box-content">
									<div class="themestek-box-content-inner">
										<div class="themestek-pf-box-title">
											<!-- <div class="ts-ihbox-icon ts-large-icon ts-icon-skincolor">
														<i class="ts-labtechco-business-icon ts-labtechco-business-icon-flask"></i>
											</div> -->
											<a align="center" href="{{ route('categories', $category->slug) }}">{!! $category->name !!}</a>
											
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
					@endforeach
					@else
					<div class="col-12 text-center">
						<img src="{{ asset('assets/images/not_found.jpg') }}" class="img-fluid">
					</div>
					@endif
					
				</div>
                
        </div>
        </div>
    </div>
</div>                        

@endsection