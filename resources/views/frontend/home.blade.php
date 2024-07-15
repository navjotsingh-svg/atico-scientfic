@extends('frontend.layouts.app')
@section('content')
@php
    $useragent=$_SERVER['HTTP_USER_AGENT'];
$display=1;
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
    $display=0;
    
    @endphp
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
@media only screen and (max-width: 600px) {
.support_team{
    flex:40%;
}
}
.text-overlay{
    color: #fff;
    top: 90px;
    position: absolute;
    right: 324px;
}
.text-overlay2{
    color: #fff;
    top: 90px;
    position: absolute;
    left: 224px;
}
.text-overlay h1{
    color: #fff;
}
.text-overlay2 h1{
    color: #0530AD;
}
.text-overlay span {
   
    font-size: 18px;
    
}
.text-overlay2 span {
   color: #000;
   font-size: 18px;
   
}
.text-overlay button, .text-overlay2 button {
   
   margin-top: 60px;
   
}
body{
    background: #f8f9fa;
}
.catbox{
    z-index: 17;
    background: #fff;
    margin-top: -32px;
    position: relative;
    padding: 10px;
    box-shadow: #D0D0CD 2px 3px 5px;
    min-height: 250px;
}
</style>
<div id="owl-demo" class="owl-carousel owl-theme">
 @if($display==1)
   <div class="item" ><img src="{{ asset('assets/images/slider/slide1.png') }}" alt="The Last of us">
  <div class="text-overlay">
  <h1>Mechanical Lab Equipment<br> Manufacturer & Supplier</h1>
    <span>Adaptors, Glass Beakers, Bottles, Burettes, Chromatography<br></span>
    <span>Columns, Clevenger apparatus, Condensers, Filtration <br></span>
    <span>Assembly, Laboratory flasks, pipettes, etc.<br></span>
    <button class="btn btn-warning" >Explore more</button> 
</div>
</div> 
  <div class="item" >
  <img src="{{ asset('assets/images/slider/slide2.png') }}" alt="The Last of us">
  <div class="text-overlay2">
    <h1>Educational Lab Equipment<br> Manufacturer & Supplier</h1>
    <span>Adaptors, Glass Beakers, Bottles, Burettes, Chromatography<br></span>
    <span>Columns, Clevenger apparatus, Condensers, Filtration <br></span>
    <span>Assembly, Laboratory flasks, pipettes, etc.<br></span>
    <button class="btn btn-warning" >Explore more</button> 
</div>
</div>
@else
<div class="item" style='min-height:520px;'><img style='min-height:520px;' src="{{ asset('assets/images/slider/slider1mob.png') }}" alt="The Last of us">
  <h1 class="category_name" style="color:#fff;margin-top:-680px;margin-left:60px;">Mechanical Lab Equipment<br> Manufacturer & Supplier</h1>
    <span style="margin-top:-430px;margin-left:50px;line-height: 2; word-spacing: 5px;   color:#fff;">Adaptors, Glass Beakers, Bottles, Burettes,<br></span>
    <span style="margin-top:-430px;margin-left:50px;line-height: 2; word-spacing: 5px; color:#fff;"> Chromatography, Columns, Clevenger apparatus,  <br></span>
    <span style="margin-top:-430px;margin-left:50px;line-height: 2; word-spacing: 5px;  color:#fff;">Condensers, Filtration,Assembly, Laboratory flasks<br></span>
    <span style="margin-top:-430px;margin-left:50px;line-height: 2; word-spacing: 5px;  color:#fff;">pipettes, etc.<br></span>
    <button class="btn btn-default" style="text-align:center;background: orange;margin-left: 150px;margin-top: 50px;">Explore more</button> 
   
</div>
  <!-- <div class="item" >
  <img src="{{ asset('assets/images/slider/slide2.png') }}" alt="The Last of us">
    <h1 class="category_name" style="margin-top:-580px;margin-left:220px;">Educational Lab Equipment<br> Manufacturer & Supplier</h1>
    <span style="margin-top:-430px;margin-left:220px;line-height: 2; word-spacing: 14px;   color: black;">Adaptors, Glass Beakers, Bottles, Burettes, Chromatography<br></span>
    <span style="margin-top:-430px;margin-left:220px;line-height: 2; word-spacing: 14px;   color: black;">Columns, Clevenger apparatus, Condensers, Filtration <br></span>
    <span style="margin-top:-430px;margin-left:220px;line-height: 2; word-spacing: 14px;   color: black;">Assembly, Laboratory flasks, pipettes, etc.<br></span>
    <button class="btn btn-default" style="text-align:center;background: orange;margin-left: 216px;margin-top: 50px;">Explore more</button> 
               
</div> -->
@endif

</div>
<section id="categories" class="container">
    <div class="row">
        @if($display==1)
        <div class="col-md-3" >
               <div class="catbox">
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
        <div class="catbox">
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
        <div class="catbox">
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
               <div class="catbox">
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
        @else
        <div id="owl-demo1" class="owl-carousel owl-theme">
                <div class="item">
                <div class="col-md-3" >
               <div>
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
                </div>

                <div class="item">
                <div class="col-md-3" >
                <div>
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
                </div>

                
                <div class="item">
                <div class="col-md-3" >
        <div>
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
                </div>


                <div class="item">
                <div class="col-md-3" >
               <div >
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

        @endif
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
        @if($display==1)
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
                    
            </div>
            @else
            <div class="col-md-3">
                    <img src="{{ asset('assets/images/support_info.png') }}">
                </div>
            @endif
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
        <div class="col-md-6" style="display: <?php if($display==1) echo 'flex'; ?>">
            <div class="col-md-6" style="background: url({{ asset('assets/images/cle.png') }});<?php if($display==0) echo 'min-height: 200px'; ?>">
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

        <div class="col-md-6" style="display: <?php if($display==1) echo 'flex'; ?>">
            <div class="col-md-6" style="background: url({{ asset('assets/images/ple.png') }});<?php if($display==0) echo 'min-height: 200px;margin-top:10px;'; ?>">
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
        <div class="col-md-4" style="display: <?php if($display==1) echo 'flex'; ?>">
            <div class="col-md-6" style="background: url({{ asset('assets/images/lg.png') }});<?php if($display==0) echo 'min-height: 200px;margin-top:10px;'; ?>">
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

        <div class="col-md-4" style="display: <?php if($display==1) echo 'flex'; ?>">
            <div class="col-md-6" style="background: url({{ asset('assets/images/mle.png') }});<?php if($display==0) echo 'min-height: 200px;margin-top:10px;'; ?>">
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

        <div class="col-md-4" style="display: <?php if($display==1) echo 'flex'; ?>">
            <div class="col-md-6" style="background: url({{ asset('assets/images/ble.png') }});<?php if($display==0) echo 'min-height: 200px;margin-top:10px;'; ?>">
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
    @if($display==1)
        <div class="row">
               <div class="col-md-12" style="text-align: center;background: url({{ asset('assets/images/banner.png') }}) no-repeat;padding: 50px;background-size:100%">
                   <label style="color:#ffff;margin-left: 450px;">If you are a college or university looking to setup a <br>complete lab. Please contact us with your details<br> for custom quotation.</label>
                   <button class="btn btn-default" style="background: orange;margin-right: 203px;float: right;margin-top: 16px;">Send Mail</button> 
                </div> 
        </div>

    @else
    <div class="row">
               <div class="col-md-12" style="text-align: center;background: url({{ asset('assets/images/bannermob.png') }}) no-repeat;padding: 50px;background-size:100%">
                   <label style="color:#ffff;margin-left: 50px;">If you are a college or university looking to<br> setup a complete lab. Please contact us with<br> your details for custom quotation.</label>
                   <button class="btn btn-default" style="background: orange;margin-right: 148px;float: right;margin-top: 16px;">Send Mail</button> 
                </div> 
        </div>
    
    @endif
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
                <div style="<?php if($display==1) echo "margin-top:-525px;margin-left:44px;"; else echo  "margin-top:-407px;margin-left:9px;";?>"> 
                     <img src="{{ asset('assets/images/years.png') }}">
                </div>
               </div>
        </div>
</section>
@if($display==1)
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
        

    </div>
    </section>
@endif    
<section id="electrical_tab" class="container" style="margin-top: <?php if($display==1) echo "30px"; else echo  "375px";?>">
    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('assets/images/electrical.png') }}" style="width:90%">
        </div>
        <div class="col-md-6" style="text-align: justify">
                <h6 style="color: #F99E00">-Electrical-</h6>
                <h4 class="category_name">Electrical Lab<br>
                Testing Equipment Manufacturer,</h4>
                <span style="line-height:2">ATICO Export is one of the largest Electrical Lab Testing Equipment Manufacturers, Suppliers and Exporters in India. We are a leading corporation for all types of scientific lab equipment throughout the world. With years of experience in this domain, we have become highly skilled in designing, developing and manufacturing almost all types of scientific and educational laboratory equipment and instruments. ATICO Export is one of the best electrical lab testing equipment manufacturers around the globe that has set standards in research, development and manufacturing high quality products.</span>
                
                <button class="btn btn-default" style='border: 1px solid #eeee;margin-top:20px;'>Send Query <img src="{{ asset('assets/images/arrow-left.png') }}"></button>
               
            </div>
    </div>
    <div class="row" style="margin-top:30px;">
       
        <div class="col-md-6" style="text-align: justify">
                <h6 style="color: #F99E00">-Research-</h6>
                <h4 class="category_name">Research Lab<br>
                Equipment Manufacturers </h4>
                <span style="line-height:2">ATICO Exports have emerged out as one of the leading Research Lab Equipment manufacturers, suppliers and exporters in India, offering a wide range of Scientific Equipment and laboratory Instruments. We have a diverse and flawless array of Research Laboratory Equipment. In spite of the cut throat competition, we have always succeeded to achieve client’s satisfaction by using a simple formula of manufacturing and supplying world class and best quality products in cost efficient manner.</span>
                <div style="display:flex;margin-top:10px;">
                <div class="col-md-6" style="text-align: justify">
                <ul>
                    <li class="li-icon" align="left">Heating Mantles</li>
                    <li class="li-icon" align="left">Histology Equipment</li>
                    <li class="li-icon" align="left">Tissue Embedding Station</li>
                    <li class="li-icon" align="left">Lab Test Chambers</li>
                </ul>
                </div>
                
                <div class="col-md-6" style="text-align: justify">
                <ul>
                    <li class="li-icon" align="left">Cooling Equipment</li>
                    <li class="li-icon" align="left">Microtome Equipment</li>
                    <li class="li-icon" align="left">Slide Strainers</li>
                    <li class="li-icon" align="left">Electrophoresis</li>
                </ul>
                </div>
                </div>
                <button class="btn btn-default" style='border: 1px solid #eeee;margin-top:20px;'>Send Query <img src="{{ asset('assets/images/arrow-left.png') }}"></button>
               
        </div>
        <div class="col-md-6">
        <img src="{{ asset('assets/images/research.png') }}" style="width:85%">
        </div>    
    </div>

</section>
<section id="our_categories" style="min-height:450px;margin-top:30px;background:url({{ asset('assets/images/trade.png') }});background-color:#01193D;" >
    <div class="row" style="margin-top:20px">
        <div class="col-md-12" style="text-align: center;margin-top:30px;">
            <h6 style="color: #F99E00">-Category-</h6>
            <h4 class="category_name" style="color:#fff;">Our Category</h4>
        </div> 
    </div>
    <div class="container">
    <div class="row ">
        <div class="col-md-3" align="center" style="background:url({{ asset('assets/images/etel.png') }});min-height:250px;width:23%;margin-right:2%;">
               <label style="margin-top:212px;color:#fff;font-weight:500;">Engineering Training Lab Equipment</label>
        </div>
        <div class="col-md-3" align="center" style="background:url({{ asset('assets/images/cele.png') }});min-height:250px;width:23%;margin-right:2%;">
                <label  style="margin-top:212px;color:#fff;font-weight:500;">Engineering Training Lab Equipment</label>
        </div>
        <div class="col-md-3" align="center" style="background:url({{ asset('assets/images/rle.png') }});min-height:250px;width:23%;margin-right:2%;">
        <label  style="margin-top:212px;color:#fff;font-weight:500;">Engineering Training Lab Equipment</label>
        </div>
        <div class="col-md-3" align="center" style="background:url({{ asset('assets/images/etle.png') }});min-height:250px;width:23%;margin-right:2%;">
        <label  style="margin-top:212px;color:#fff;font-weight:500;">Engineering Training Lab Equipment</label>
        </div>


    </div>
    
</div>
</section>
<section class="container" id="trusted">
<img src="{{ asset('assets/images/trusted.png') }}" style="width:95%">
</section>


<section id="arrows" style="">
        <div class="row">
               <div class="col-md-12" style="background: url({{ asset('assets/images/call_us.png') }});padding: 50px;">
               <h4 style="color:#ffff;margin-left: 250px;margin-top: 140px;">Call Us! We are available 24/7</h4>
 <button class="btn btn-default" style="background: orange;margin-right: 900px;float: right;margin-top: -35px;">Contact Us</button> 
    </div> 
        </div>
</section>
<section id="our_categories" style="min-height:450px;" >
    <div class="row" style="margin-top:20px">
        <div class="col-md-12" style="text-align: center;margin-top:30px;">
            <h6 style="color: #F99E00">-Services-</h6>
            <h3 class="category_name" >Our Services</h3>
        </div> 
    </div>
    <div class="container">
    <div class="row ">
        <div class="col-md-12" align="center" >
        <img src="{{ asset('assets/images/services.png') }}" style="width:85%">
        </div>
        


    </div>
    
</div>
</section>
<script>
    $(document).ready(function() {
 
 $("#owl-demo,#owl-demo1").owlCarousel({

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