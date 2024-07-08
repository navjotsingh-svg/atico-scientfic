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
    margin-left: 10px;
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
</style>
<div id="owl-demo" class="owl-carousel owl-theme">
 
  <div class="item"><img src="{{ asset('assets/images/slider/slide1.png') }}" alt="The Last of us"></div>
  <div class="item"><img src="{{ asset('assets/images/slider/slide2.png') }}" alt="GTA V"></div>

</div>
<section id="categories" class="container">
    <div class="row">
        <div class="col-md-3" >
               <div class="wpb_wrapper">
                <div align="left">
                    <img src="{{ asset('assets/images/laboratorium.png') }}">
                </div>
               <h5 align="left" class="category_name">Civil Engineering Equipment</h5>
               <ul>
                    <li class="li-icon" align="left">Aggregate Testing</li>
                    <li class="li-icon" align="left">Rockwell Testing Machine</li>
                    <li class="li-icon" align="left">Compression Testing</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
               </div> 
        </div>
        <div class="col-md-3" >
        <div class="wpb_wrapper">
                <div align="left">
                    <img src="{{ asset('assets/images/lab1.png') }}">
                </div>
               <h5 align="left" class="category_name">Educational Lab Equipment</h5>
               <ul>
                    <li class="li-icon" align="left">Physics Lab Equipments</li>
                    <li class="li-icon" align="left">Biology Lab Equipments</li>
                    <li class="li-icon" align="left">Chemistry Lab Equipments</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
               </div> 
        </div>
        <div class="col-md-3" >
        <div class="wpb_wrapper">
                <div align="left">
                    <img src="{{ asset('assets/images/lab2.png') }}">
                </div>
               <h5 align="left" class="category_name">Research Lab Equipment</h5>
               <ul>
                    <li class="li-icon" align="left">Clean Room Equipment</li>
                    <li class="li-icon" align="left">Humidity Cabinet</li>
                    <li class="li-icon" align="left">Test Chambers</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
               </div> 
        </div>
        <div class="col-md-3" >
               <div  class="wpb_wrapper">
                <div align="left">
                    <img src="{{ asset('assets/images/lab3.png') }}">
                </div>
               <h5 align="left" class="category_name">Testing Lab Equipments</h5>
               <ul>
                    <li class="li-icon" align="left">NDT Metal Testers</li>
                    <li class="li-icon" align="left">Brinell Hardness Testing</li>
                    <li class="li-icon" align="left">NDT Testers - Concrete</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
               </div> 
        </div>
    </div>
</section>
<section id="arrows">
        <div class="rows">
               <div class="col-md-12" style="text-align: center">
                    <span><img src="{{ asset('assets/images/arrow-left.png') }}"></span>
                    <span><img src="{{ asset('assets/images/arrow-right.png') }}"></span>
               </div> 
        </div>
</section>
<section id="contact_details">
    <div class="row">
            <div class="col-md-3 support_team">
                <div class="ref_icons">
                    <img src="{{ asset('assets/images/support_team.png') }}">
                </div>
                    <h6 align="right">Support Team</h6>
                    <h6 align="right">+(91) 9996186555</h6>
            </div>
            <div class="col-md-3 tenders">
                <div class="ref_icons">
                    <img src="{{ asset('assets/images/tenders.png') }}">
                </div>
                    <h6 align="right">OEM & Tenders</h6>
                    <h6 align="right">Get a Quote</h6>
            </div>
            <div class="col-md-3 dealership">
                <div class="ref_icons">
                    <img src="{{ asset('assets/images/dealership.png') }}">
                </div>
                    <h6 align="right">Dealership</h6>
                    <h6 align="right">Request Now!</h6>
            </div>
            <div class="col-md-3 contact_us">
                <div class="ref_icons">
                    <img src="{{ asset('assets/images/email.png') }}">
                </div>
                    <!-- <h6 align="right">Contact Us</h6>
                    <h6 align="right">Email Now</h6> -->
            </div>
    </div>
</section>
<section id="arrows">
        <div class="row">
               <div class="col-md-12" style="text-align: center">
                    <h6 style="color: #F99E00">-School-</h6>
                    <h4 class="category_name">School Lab Equipments</h4>
               </div> 
        </div>
</section>
<section id="school_equipments" class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-6" style="display: flex">
            <div class="col-md-6" style="background: url({{ asset('assets/images/cle.png') }})">
                &nbsp;
            </div>
            <div class="col-md-6" style="border: 1px solid #E2E2E2">
                <h5 class="category_name">Chemistry Lab Equipment</h5>
                <ul>
                    <li class="li-icon" align="left">Biochemistry</li>
                    <li class="li-icon" align="left">Textiles</li>
                    <li class="li-icon" align="left">Environmental Science</li>
                    <li class="li-icon" align="left">Pharmaceutical science</li>
                    <li class="li-icon" align="left">Production Engineering</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
            </div>    
        </div>

        <div class="col-md-6" style="display: flex">
            <div class="col-md-6" style="background: url({{ asset('assets/images/ple.png') }})">
                &nbsp;
            </div>
            <div class="col-md-6" style="border: 1px solid #E2E2E2">
                <h5 class="category_name">Physics Lab Equipments</h5>
                <ul>
                    <li class="li-icon" align="left">Meteorology Earth Science</li>
                    <li class="li-icon" align="left">Fluid Mechanics Physics</li>
                    <li class="li-icon" align="left">Modern Physics</li>
                    <li class="li-icon" align="left">Measurement Instruments</li>
                    <li class="li-icon" align="left">Mechanics Laboratory Equipment</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
            </div>    
        </div>

    </div>
    <div class="row" style="margin-top:20px">
        <div class="col-md-4" style="display: flex">
            <div class="col-md-6" style="background: url({{ asset('assets/images/lg.png') }})">
                &nbsp;
            </div>
            <div class="col-md-6" style="border: 1px solid #E2E2E2">
                <h5 class="category_name">Laboratory Glasswaret</h5>
                <ul>
                    <li class="li-icon" align="left">Beakers</li>
                    <li class="li-icon" align="left">Volumetric flasks</li>
                    <li class="li-icon" align="left">Titration flasks</li>
                    <li class="li-icon" align="left">Condensers</li>
                    <li class="li-icon" align="left">Titration burettes</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
            </div>    
        </div>

        <div class="col-md-4" style="display: flex">
            <div class="col-md-6" style="background: url({{ asset('assets/images/mle.png') }})">
                &nbsp;
            </div>
            <div class="col-md-6" style="border: 1px solid #E2E2E2">
                <h5 class="category_name">Math's lab Equipment</h5>
                <ul>
                    <li class="li-icon" align="left">Base Ten Block</li>
                    <li class="li-icon" align="left">Geometric Shapes</li>
                    <li class="li-icon" align="left">Mathematics Kit</li>
                    <li class="li-icon" align="left">Math's Wooden Products</li>
                    
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
            </div>    
        </div>

        <div class="col-md-4" style="display: flex">
            <div class="col-md-6" style="background: url({{ asset('assets/images/ble.png') }})">
                &nbsp;
            </div>
            <div class="col-md-6" style="border: 1px solid #E2E2E2">
                <h5 class="category_name">Biology Lab Equipment</h5>
                <ul>
                    <li class="li-icon" align="left">Test Tubes</li>
                    <li class="li-icon" align="left">Flask</li>
                    <li class="li-icon" align="left">Beaker</li>
                    <li class="li-icon" align="left">Microscope</li>
                    <li class="li-icon" align="left">Crucible Tongs</li>
               </ul>
               <h6 align="left" class="explore_now"><a href="#">Explore More</a></h6>
            </div>    
        </div>

    </div>
</section>
<section id="arrows" style="margin-top:70px;">
        <div class="row">
               <div class="col-md-12" style="text-align: center;background: url({{ asset('assets/images/banner.png') }});padding: 50px;">
                   <label style="color:#ffff;margin-left: 450px;">If you are a college or university looking to setup a <br>complete lab. Please contact us with your details<br> for custom quotation.</label>
                   <button class="btn btn-default" style="background: orange;margin-right: 203px;float: right;margin-top: 16px;">Send Mail</button> 
                </div> 
        </div>
</section>
<section id="arrows" class="container" style="margin-top:70px;">
        <div class="row">
               <div class="col-md-6" style="min-height:550px;">
               <h6 style="color: #F99E00">-About Us-</h6>
               <h4 class="category_name">Welcome To<br>
               Atico Scientific</h4>
               <p>We are the name to reckon with in the industry for Mechanical Manufacturers laboratory equipment in PAN India and International Market. We have supplied mechanical tools, equipment, instrument, and lab apparatus to engineering lab in India, as well across 30 countries.</p>
                <button class="btn btn-default" style='border: 1px solid #eeee;'>Read more <img src="{{ asset('assets/images/arrow-left.png') }}"></button>
               
                <div class="col-md-8" style="display:flex;margin-top:30px;">
                        <div class="col-md-6">
                        <img src="{{ asset('assets/images/products.png') }}"><span class="aboutus">Products<br><strong style="color:#F99E00">20000+</strong></span>
                        </div>
                        <div class="col-md-6">
                        <img src="{{ asset('assets/images/location.png') }}"><span class="aboutus">Countries<br><strong style="color:#F99E00">90+</strong></span>
                        </div>
                </div>
                <div class="col-md-8" style="display:flex;margin-top:50px;">
                        <div class="col-md-6">
                        <img src="{{ asset('assets/images/clients.png') }}"><span class="aboutus">Clients<br><strong style="color:#F99E00">1000+</strong></span>
                        </div>
                        <div class="col-md-6">
                        <img src="{{ asset('assets/images/ph_key.png') }}"> <span class="aboutus">Turnkey Projects<br><strong style="color:#F99E00">2000+</strong></span>
                        </div>
                </div>
            </div> 
               <div class="col-md-6" >
                <img src="{{ asset('assets/images/about_us.png') }}" style="width:90%">
                <div style="margin-top:-525px;margin-left:44px;"> 
                     <img src="{{ asset('assets/images/years.png') }}">
                </div>
               </div>
        </div>
</section>
<section id="trade" style="margin-top:30px;background:url({{ asset('assets/images/trade.png') }});background-color:#01193D;" >
    <div class="row" style="margin-top:20px">
        <div class="col-md-12" style="text-align: center;margin-top:30px;">
            <h6 style="color: #F99E00">-Trade-</h6>
            <h4 class="category_name" style="color:#fff;">Trade with confidence from production quality to purchase protection<br>quality to purchase protection</h4>
        </div> 
    </div>
    <div class="row ">
        <div class="col-md-6" align="center">
                <img src="{{ asset('assets/images/trade1.png') }}">
        </div>
        <div class="col-md-6" align="center">
                <img src="{{ asset('assets/images/trade2.png') }}">
        </div>
    </div>
</section>
<section id="trade" style="margin-top:10px;" >
   
    <div class="row ">
        <div class="col-md-6" align="center">
                <h5 class="heading_name">Civil and Mechanical Engineering Machinery <br>and Equipments</h5>
                <button class="btn btn-default" style="text-align:center;background: orange;margin-right: 203px;margin-top: 16px;">Explore more</button> 
               
        </div>
        <div class="col-md-6" align="center">
        <h5 class="heading_name">Civil and Mechanical Engineering Machinery <br>and Equipments</h5>
        <button class="btn btn-default" style="background: orange;margin-right: 203px;margin-top: 16px;">Explore more</button> 
       
        </div>
        <img src="{{ asset('assets/images/electrical.png') }}" style="width:80%;margin-top:40px;margin-left:140px;">
        <img src="{{ asset('assets/images/research.png') }}" style="width:80%;margin-top:40px;margin-left:140px;">
        <img src="{{ asset('assets/images/trusted.png') }}" style="width:80%;margin-top:40px;margin-left:140px;">
        <img src="{{ asset('assets/images/call_us.png') }}" style="">

    </div>
</section>
<section >
</section>

<script>
    $(document).ready(function() {
 
 $("#owl-demo").owlCarousel({

     navigation : true, // Show next and prev buttons

     slideSpeed : 300,
     paginationSpeed : 400,

     items : 1, 
     itemsDesktop : false,
     itemsDesktopSmall : false,
     itemsTablet: false,
     itemsMobile : false

 });

});
</script>
@endsection