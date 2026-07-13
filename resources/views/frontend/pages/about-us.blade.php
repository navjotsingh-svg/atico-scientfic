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
</style>

<div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                    <span><a class="brd-heading" href="{{ route('home') }}" class="home"><span>Home / About US</span></a></span>
                                    
                                </div>
                            </div>
                        </div>
<div class="container mt-5 p-3">
    <div class="row">
        <div class="col-md-6">
            
            <p class="about_scientific inter">
                Atico Scientific is a leading manufacturer, supplier, and exporter of scientific lab equipment. We have a significant presence in India and over 30 countries worldwide. With a vast client base, we are committed to staying competitive and meeting the ever-growing needs of our global customers. Atico Scientific continuously innovates and keeps pace with technology to manufacture and supply safe, state-of-the-art equipment. Our expert team rigorously tests the final products to ensure high-performance equipment for technicians.
            </p>
            <img src="{{ asset('assets/images/about-us1.jpg') }}" style="width: -webkit-fill-available;height: -webkit-fill-available;">
        </div>
        <div class="col-md-6">
            @if($display==1)
            <img src="{{ asset('assets/images/about-us2.jpg') }}" style="width: -webkit-fill-available;height: -webkit-fill-available;">
            @endif
            <p class="about_scientific inter">
                At Atico Scientific, we are manufacturers, suppliers, and exporters of scientific laboratory instruments. Our goal is to stay abreast of technological advancements and meet the growing needs of our customers through continuous improvement and innovation.
                <br>
                Quality, excellence, innovation, and improvement are integral to Atico Scientific's policies, making us a trusted and expert organization worldwide. Our products are of the highest quality, and our manufacturing processes adhere to the strictest standards, ensuring 100% customer satisfaction.
            </p>
            @if($display==0)
            <img src="{{ asset('assets/images/about-us2.jpg') }}" style="width: -webkit-fill-available;height: -webkit-fill-available;">
            @endif
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