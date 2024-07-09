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
.product_image {
    padding: 35px;
    border: 1px solid #DFDFDF;
}
</style>
<div class="ts-titlebar-wrapper ts-bg ts-bgcolor-transparent ts-titlebar-align-left ts-textcolor-white ts-bgimage-yes">
  <div class="ts-titlebar-wrapper-bg-layer ts-bg-layer"></div>
  <div class="ts-titlebar entry-header">
    <div class="ts-titlebar-inner-wrapper">
      <div class="ts-titlebar-main">
        <div class="container">
          <div class="ts-titlebar-main-inner">
            
            <div class="breadcrumb-wrapper">
              <div class="container">
                <div class="breadcrumb-wrapper-inner">
                  <!-- Breadcrumb NavXT output --><span><a title="Home" href="{{ route('home') }}" class="home"><span>Home</span></a></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><a title="{!! $product->name !!}" class="post post-product-archive"><span>{!! $product->name !!}</span></a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .ts-titlebar-main -->
    </div>
    <!-- .ts-titlebar-inner-wrapper -->
  </div>
  <!-- .ts-titlebar -->
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="product_image">
            <img width="330" height="262" src="{{ asset($product->image ? 'uploads/product_images/'.$product->image : 'assets/frontend/images/no_product.png') }}"/>
        </div>
        </div>
        <div class="col-md-8">
        @if(count(getAllProductCats($product->id))>0)
        @foreach(getAllProductCats($product->id) as $key => $cat)
            <h6 style="color: #F99E00;margin-top:60px;margin-left:30px;">{!! $cat->name !!}</h6>
            @endforeach
            @endif
                <h3 style="margin-left:30px" class="category_name">{!! $product->name !!}</h3>
              
                <p style="margin-left:30px">{!! substr(strip_tags($product->description),0, 200) !!}...</p>
                <p style='color:#01193D;font-size:20px;margin-left:30px;'>Product Code: {!! $product['product_code'] !!}</p>
                <button style='color:#fff;font-size:20px;margin-left:30px;' class="btn btn-warning btn-lg col-7">Send Query</button>

            <div style="display:flex;margin-top:30px;margin-left:30px;">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/dealer.png') }}">
                    <span>&nbsp;&nbsp;Dealership</span>

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/support.png') }}">
                    <span>&nbsp;&nbsp;Support Team</span>

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/payment.png') }}">
                    <span>&nbsp;&nbsp;Payment & Shipping</span>

                </div>
            </div>    
        </div>
    </div>

    

</div>
<div class="row" style="margin-top:50px;">
        <div class="col-md-12">
                <h2 class="category_name text-center">{!! $product->name !!}</h2>
                <div style="min-height:500px;background:#F5F5F5;">
                    <h4 class="category_name" style="margin-top:150px;margin-left:180px;position:absolute">Description</h4>
                    <div style="margin-top:190px;margin-left:180px;position:absolute;width:70%;line-height:2;text-align:justify;"> {!! ($product->description) !!}</div>
                </div>
        </div>

    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
                <h4 class="category_name ms-5">Related Products</h4>
                <div class="row">
                    @if(count(getRelatedProducts($product->id))>0)
                    @foreach(getRelatedProducts($product->id) as $key => $related_product)
                    <div class="ts-box-col-wrapper col-lg-3 col-sm-4 col-md-3 col-xs-12 oncology products-box">
                      <article class="themestek-box themestek-box-portfolio ts-portfoliobox-style-1 ts-hover-style-2">
                        <div class="themestek-post-item">
                          <span class="themestek-item-thumbnail">
                            <span class="themestek-item-thumbnail-inner">
                              <a href="{{ route('product_detail', $related_product->slug) }}"><img width="800" height="650" src="{{ asset($related_product->image ? 'uploads/product_images/'.$related_product->image : 'assets/frontend/images/no_product.png') }}" class="attachment-themestek-img-800x650 size-themestek-img-800x650 wp-post-image" alt="" onerror="this.onerror=null;this.src='{{ asset("assets/frontend/images/no_product.png") }}';" /></a>
                            </span>
                          </span>
                          <div class="themestek-box-content">
                            <div class="themestek-box-content-inner">
                              <div class="themestek-pf-box-title">
                                <!-- <div class="themestek-box-category"><a href="{{ route('product_detail', $related_product->slug) }}" rel="tag">Oncology</a></div> -->
                                <h3><a href="{{ route('product_detail', $related_product->slug) }}">{!! str_limit($related_product->name, 25) !!}</a></h3>
                              </div>
                              <div class="themestek-box-desc">
                                <p>{!! str_limit(strip_tags($related_product->description), 60) !!}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                    </div>
                    @endforeach
                    @endif
                    
                  </div>
        </div>

    </div>
@endsection