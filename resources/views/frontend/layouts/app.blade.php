<!DOCTYPE html>
<html lang="en">
@php
    $route  = \Route::currentRouteName();    
    $useragent=$_SERVER['HTTP_USER_AGENT'];
$display=1;
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
    $display=0;
@endphp
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M8CF5BQ');</script>
<!-- End Google Tag Manager -->



<!-- Google Tag Manager -->
<!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M8CF5BQ');</script>-->
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      @if(isset($keyword)) 
      @if($keyword->meta_title)
      <title>{{ $keyword->meta_title }}</title>
      @else
      @if($route == "home")
      <title>School Science Lab Equipments Manufacturers, Educational Lab Equipment Manufacturer, Lab Equipment Manufacturers and Suppliers, Engineering Lab Equipments Manufacturers ,Educational Laboratory Equipments Manufacturers and Suppliers, Indian Lab Equipments Manufacturers, Physics Lab Equipment manufacturers, Scientific Lab Instruments Manufacturers and Suppliers in Ambala,science lab equipments for school, Lab Equipments Manufacturers in India, Chemistry Lab Equipments manufacturer, Educational Lab Manufacturers & Exporter,Scientific Lab Equipments, civil Engineering Lab Equiupments Manufacturers, Chemical Engineering Lab Equipment manufacturer, Biology Lab Equipments, Education Lab Equipments, School Lab Equipments Manufacturers, Engineering Lab Equipments Manufacturers, Math Lab Equipments Manufacturers and suppliers</title>
      @endif
      @endif
      @if($keyword->meta_description)
      <meta name="description" content="{{ $keyword->meta_description }}"/>
      @else
      @if($route == "home")
      <meta name="description" content="Educational Lab Equipments manufactures, School Science Lab Equipments Manufacturers, Engineering Lab Equipment Manufacturers, Mechanical Lab Equipment Manufacturers, Civil Engineering Lab Equipment manufacturers, Chemical Engineering Lab Equipment manufacturers, Material Testing Lab Equipment manufacturers, Educational Lab Equipment Manufacturer,Science Lab Equipments Manufacturers,Lab Equipment Manufacturers and Suppliers,Educational Laboratory Equipments Manufacturers and Suppliers,Scientific Lab Instruments Manufacturers and Suppliers in Ambala,science lab equipments for school, Lab Equipments Manufacturers in India, Lab Equipments Manufacturers, Educational Lab Manufacturers & Exporter, ,Scientific Lab Equipments, Chemical Engineering Lab Equipment manufacturer, School Lab Equipments, Biology Lab Equipments, Education Lab Equipments, School Lab Equipments Manufacturers,Math Lab Equipments Manufacturers and suppliers"/>
      @endif
      @endif
      @if($keyword->meta_tag)
      <meta name="keywords" content="{{ $keyword->meta_tag }}"/>
      @else
      @if($route == "home")
      <meta name="keywords" content="Educational Lab Manufacturers, Educational Lab Equipments manufacturer, Educational Scientific Instruments Exporters, Educational Scientific Lab Equipments, Scientific Educational Lab Equipments, Scientific Equipments Manufacturers, Scientific Instruments Manufacturers India, Scientific Lab Equipment Suppliers, Scientific Lab Instruments Manufacturers, Scientific Lab Equipments Manufacturer India,School Science Lab Equipments manufacturer, School Science Lab Equipment manufacturers, Physics Lab Equipment manufacturers,Physics Lab Equipment manufacturer, Chemistry Lab Equipments manufacturer,Chemistry Lab Equipment manufacturers, Biology Lab Equipment manufacturer, Biology Lab Equipments manufacturer, Mechanical Lab Equipments Manufacturer, Fluid Mechanics Lab Equipments manufacturer, Fluid Mechanics Lab Equipment manufacturers,Engineering Lab Equipments manufacturer, Engineering Lab Equipment manufacturers, Technical Educational Equipment Manufacturer, Technical Educational Equipment Manufacturers, Vocational Training Lab Equipments Manufacturers, Vocational Training Lab Equipment Manufacturers, Civil Engineering Lab Equipment manufacturers,Civil Engineering Lab Equipments manufacturers, Chemical Engineering Lab Equipment manufacturers, Chemical Engineering Lab Equipments manufacturer,Laboratory Glassware manufacturers,Material Testing Lab Equipment manufacturer,Material Testing Lab Equipment manufacturers TVET Lab Equipement manufacturers"/>
      @endif
      @endif
      @else
      @if($route == "home1")
      <title>{{ isset(getSeoModule()['meta_title']) ? getSeoModule()['meta_title'] : '
School Science Lab Equipments Manufacturers, Educational Lab Equipment Manufacturer, Lab Equipment Manufacturers and Suppliers, Engineering Lab Equipments Manufacturers ,Educational Laboratory Equipments Manufacturers and Suppliers, Indian Lab Equipments Manufacturers, Physics Lab Equipment manufacturers, Scientific Lab Instruments Manufacturers and Suppliers in Ambala,science lab equipments for school, Lab Equipments Manufacturers in India, Chemistry Lab Equipments manufacturer, Educational Lab Manufacturers & Exporter,Scientific Lab Equipments, civil Engineering Lab Equiupments Manufacturers, Chemical Engineering Lab Equipment manufacturer, Biology Lab Equipments, Education Lab Equipments, School Lab Equipments Manufacturers, Engineering Lab Equipments Manufacturers, Math Lab Equipments Manufacturers and suppliers' }}</title>
      <meta name="description" content="{{ isset(getSeoModule()['meta_description']) ? getSeoModule()['meta_description'] : 'Atico Lab Export is a leading School Lab Equipments Manufactruers, Educational Lab Equipments, Scientific lab equipments manufactruers in India, Lab Glassware Manufactruers,Engineering Lab Equipments manufacturers' }}"/>
      <meta name="keywords" content="Educational Lab Manufacturers, Educational Lab Equipments manufacturer, Educational Scientific Instruments Exporters, Educational Scientific Lab Equipments, Scientific Educational Lab Equipments, Scientific Equipments Manufacturers, Scientific Instruments Manufacturers India, Scientific Lab Equipment Suppliers, Scientific Lab Instruments Manufacturers, Scientific Lab Equipments Manufacturer India,School Science Lab Equipments manufacturer, School Science Lab Equipment manufacturers, Physics Lab Equipment manufacturers,Physics Lab Equipment manufacturer, Chemistry Lab Equipments manufacturer,Chemistry Lab Equipment manufacturers, Biology Lab Equipment manufacturer, Biology Lab Equipments manufacturer, Mechanical Lab Equipments Manufacturer, Fluid Mechanics Lab Equipments manufacturer, Fluid Mechanics Lab Equipment manufacturers,Engineering Lab Equipments manufacturer, Engineering Lab Equipment manufacturers, Technical Educational Equipment Manufacturer, Technical Educational Equipment Manufacturers, Vocational Training Lab Equipments Manufacturers, Vocational Training Lab Equipment Manufacturers, Civil Engineering Lab Equipment manufacturers,Civil Engineering Lab Equipments manufacturers, Chemical Engineering Lab Equipment manufacturers, Chemical Engineering Lab Equipments manufacturer,Laboratory Glassware manufacturers,Material Testing Lab Equipment manufacturer,Material Testing Lab Equipment manufacturers TVET Lab Equipement manufacturers"/>
      @endif
       @endif
      @if($route == "home1")
      <link rel="canonical" href="https://aticolabexport.com/" />
      @endif
      @if($route == "categories")
      <link rel="canonical" href="https://aticolabexport.com/category/{{ $keyword->slug }}" />
      @endif
      @if($route == "product_detail")
      <link rel="canonical" href="https://aticolabexport.com/product/{{ $keyword->slug }}" />
      @endif

 <style>
  .sfield{
      display:none;
  }
  span.error {
    color: red;
    display: none;
}
</style>
    
<script type='application/ld+json'>{
            "@context": "http://schema.org",
            "@type": "Review",
            "author": {
                "@type": "Person",
                "name": "Saksham Sharma",
                "sameAs": "GOOGLE-PLUS-LINK"
            },
            "url": "<data:blog.canonicalUrl/>",
            "datePublished": "2019-06-26T20:00",
            "publisher": {
                "@type": "Organization",
                "name": "Atico Lab Export",
                "sameAs": "https://aticolabexport.com/"
            },
            "description": "<data:blog.metaDescription/>",
            "inLanguage": "en",
            "itemReviewed": {
                "@type": "Product",
                "name": "<data:blog.pageName/>",
                "sameAs": "<data:blog.canonicalUrl/>",
                "image": "<data:blog.postImageThumbnailUrl/>",
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "5",
                    "bestRating": "5",
                    "ratingCount": "21"
                }
            }
        }
</script>



        <!-- Global site tag (gtag.js) - Google Analytics -->

    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel='stylesheet'  href="{{ asset('assets/css/owl.carousel.min5560.css?ver=5.0.4') }}"  media='all' />
        <!-- <link rel='stylesheet'  href="{{ asset('assets/frontend/css/style.css?ver=5.0.1') }}"  media='all' /> -->
        <!-- <link rel='stylesheet'  href="{{ asset('assets/frontend/css/admin-ajax.css?ver=5.0.1') }}"  media='all' /> -->

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/owl.carousel.min531b.js?ver=2.3.4') }}"></script>

   
        <link rel="shortcut icon" href="{{ asset('assets/frontend/images/fav.png') }}" type="image/x-icon">  
    @yield('css')
    
<meta name="google-site-verification" content="wlfmbRxsoJnXNtqxS6uAYeaPFwM6MO1yzkX8jFXbwOs" />

   <meta name="msvalidate.01" content="A37FED68578C80CB5842B7FCBF342AFD" />

</head>

<body class="home page-template page-template-page-template page-template-blank-page page-template-page-templateblank-page-php page page-id-832 woocommerce woocommerce-no-js wpb-js-composer js-comp-ver-5.7 vc_responsive">
  
    <div class="page">
        <!-- Header -->
        @include('frontend.layouts.header')
        <!-- Main Content -->
        @yield('content')
        <!-- Footer -->
        @include('frontend.layouts.footer')
        
    </div>


    <div class="scroll-to-top">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
   
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    
 
    
 
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element1');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!--End of Tawk.to Script-->      
          
    @yield('script')
    
 
</body>


</html>