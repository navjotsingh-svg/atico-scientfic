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
    margin-top: 130px;
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
</style>

<div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span><a class="brd-heading" href="{{ route('home') }}" class="home"><span>Home / Engineering Lab Tenders</span></a></span>
                                    
                                </div>
                            </div>
                        </div>
<div class="container mt-5 p-3">
    <div class="row">
        <div class="col-md-6">
            <h2 class="anek-bangla category_name">Lab Tenders <strong>Ministry of Education Lab Tenders</strong></h2>
            <p class="about_scientific inter">
                Ministry of Education Lab Tenders – World Bank Tenders – Ministry of Health Tenders:
            </p>
            <p class="about_scientific inter">
                Atico Scientific offers a broad selection of lab tenders and materials for the Ministry of Education, Ministry of Health, and vocational training projects. Our products include school science kits, physics, chemistry, biology equipment, microscopes, and general labware. We specialize in bidding and tendering for projects within the Ministry of Education and Health.
            </p>
            <div style="display: flex;">
            <div class="col-md-6 about_scientific_add inter">
                Head Office:<br> #5309, Grain Market,<br> Ambala Cantt,<br> 133001, HR, India
            </div>
            <div class="col-md-6 about_scientific_add inter">
                Factory Address:<br> 274, Sector-II, Industrial Growth Center,<br>HSIIDC, Saha,<br> HR, India
            </div>
            </div>
            <a class="about_scientific inter" href="mailto:sales@aticoscientific.com"><img src="{{ asset('assets/images/email_icon.png') }}" style="width: 30px;margin-right: 10px;"><span class="about_scientific inter"> sales@aticoscientific.com</span></a>
            <br>
            <p class="about_scientific inter">Technical Support: <a href="tel:+919896783832"> +91-989-678-3832</a></p>

            <p class="about_scientific_add inter">Business Development Inquiries: <a href="tel:+919896783832"> +91-989-678-3832</a></p>
            
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/lab-tenders.png') }}" style="width:-webkit-fill-available">
        </div>
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