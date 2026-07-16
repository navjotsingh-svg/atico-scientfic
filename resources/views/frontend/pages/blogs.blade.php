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
.desktop_view{
        display: none;
    }
    .related_product{
           text-align: center;
            
        }
@media only screen and (max-width: 600px) {
    .brd-heading{
    margin-top: 120px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 80px;
    text-decoration: none;
}
.brd-sub-heading{
    margin-top: 100px;
    position: absolute;
    color: #fff;
    font-weight: 700;
    font-size: 22px;
    margin-left: 90px;
}
    .mobile_view{
        display: none;
    }
    .desktop_view{
        display: contents;
    }
    .product_name{
        text-align:left !important;
    }
    .related_product{
           text-align: center;
            flex:40%;
            
        }
}
.about_scientific.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: flex-end;
    text-align: justify;
    letter-spacing: 0.01em;
    color: #515151;
}
.about_scientific_add.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: flex-end;
    text-align: justify;
    letter-spacing: 0.01em;
    color: #515151;
}
.breadcrumb-wrapper{
    background:url({{ asset('assets/images/category_bg.png') }});
    min-height:300px;
    background-color:#000;
}
@media only screen and (max-width: 600px) {
.breadcrumb-wrapper{
    background:url({{ asset('assets/images/category_bg_mob.png') }}) no-repeat;
    min-height:300px;
    background-color:#000;
    background-size: cover;
}
.about_scientific_add.inter {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 174%;
    display: flex;
    align-items: baseline;
     text-align: unset; 
    letter-spacing: 0.01em;
    color: #515151;
}
}
.blog {
    border: 1px solid #e5e7eb;
    margin-bottom: 18px;
    margin-right: 1%;
    overflow: hidden;
    background: #fff;
    border-radius: 10px;
    padding-bottom: 8px;
    transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
}
.blog:hover {
    border-color: #1947d1;
    box-shadow: 0 12px 28px rgba(25, 71, 209, 0.14);
    transform: translateY(-4px);
}
.blog > a {
    display: block;
    overflow: hidden;
    background: #f3f4f6;
    aspect-ratio: 16 / 10;
    position: relative;
}
.blog > a::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(15, 23, 42, 0.28) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}
.blog:hover > a::after {
    opacity: 1;
}
.blog > a img,
.blog-card-img {
    width: 100% !important;
    height: 100% !important;
    max-height: none !important;
    object-fit: cover !important;
    object-position: center;
    display: block;
    transition: transform 0.45s ease;
    will-change: transform;
}
.blog:hover > a img,
.blog:hover .blog-card-img {
    transform: scale(1.08);
}
.blog .themestek-box-content {
    padding: 14px 14px 10px;
}
.blog .ts-entry-meta,
.blog .ts-entry-meta a,
.blog .about_scientific.inter,
.blog .about_scientific.inter a {
    float: none !important;
    font-size: 12px !important;
    font-family: "Sora", system-ui, sans-serif !important;
    color: #64748b !important;
    font-weight: 500 !important;
    text-decoration: none !important;
    line-height: 1.4;
}
.blog .category_name {
    color: inherit;
    margin-top: 8px;
}
.blog .category_name h2 {
    font-size: 16px !important;
    line-height: 1.35 !important;
    margin: 0 0 10px !important;
    font-family: "DM Sans", system-ui, sans-serif !important;
    font-weight: 700 !important;
}
.blog .category_name h2 a {
    color: #0f172a !important;
    text-decoration: none !important;
}
.blog .category_name h2 a:hover {
    color: #1947d1 !important;
}
.blog .themestek-blogbox-footer-left a {
    color: #1947d1 !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    font-family: "DM Sans", system-ui, sans-serif !important;
    text-decoration: none !important;
}
.blog .themestek-blogbox-footer-left a:hover {
    color: #fa4219 !important;
}


</style>

<div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span><a class="brd-heading" href="{{ route('home') }}" class="home"><span>Home / Blogs</span></a></span>
                                    
                                </div>
                            </div>
                        </div>
<div class="container mt-5 ">
                                          <div class="row">
                                             @if(count($blogs)>0)
                                             @foreach($blogs as $key => $blog)
                                             <div class="col-md-3 blog">
                                                 <a href="{{ route('blog_detail', $blog->slug) }}"><img class="blog-card-img" src="{{ asset($blog->image ? 'uploads/blog_images/'.$blog->image  : 'assets/images/no_product.png') }}" onerror="this.onerror=null;this.src='{{ asset("assets/images/no_product.png") }}';" alt="{!! strip_tags($blog->name) !!}" loading="lazy" /></a>
                                             
                                             <div class="themestek-box-content">
                                                         <div class="ts-entry-meta-wrapper">
                                                            <div class="entry-meta ts-entry-meta ts-entry-meta-blogbox"><span class="ts-meta-line byline">  <span class="about_scientific inter" style="float:left;"><span class="screen-reader-text ts-hide"> </span>BY <a class="url fn n" href="{{ route('blog_detail', $blog->slug) }}" style="text-decoration: :none">ADMIN</a></span></span> | <span class="ts-meta-line posted-on"><a href="{{ route('blog_detail', $blog->slug) }}" rel="bookmark"><time class="entry-date published" datetime="2017-08-10T11:28:41+00:00">{{ $blog->created_at->format('F d, Y') }}</time><time class="updated ts-hide" datetime="2018-08-25T10:20:35+00:00"></time></a></span></div>
                                                         </div>
                                                         <div class="category_name anek-bangla">
                                                            <h2><a href="{{ route('blog_detail', $blog->slug) }}">{!! $blog->name !!}</a></h2>
                                                         </div>
                                                      
                                                         <div class="ts-bottom-meta-wrapper clearfix">
                                                            <div class="pull-left">
                                                               <div class="themestek-blogbox-footer-left"><a href="{{ route('blog_detail', $blog->slug) }}">Read More</a></div>
                                                            </div>
                                                            
                                                         </div>
                                                      </div>
                                                   </div>
                                             @endforeach
                                             @endif
                                          </div>  
                                          </div>       
<script>
    $(".toggle").click(function(){
        if($(".accordion").hasClass("mobile_view"))
            $(".accordion").removeClass("mobile_view");
        else
            $(".accordion").addClass("mobile_view")
    });
</script>
@endsection