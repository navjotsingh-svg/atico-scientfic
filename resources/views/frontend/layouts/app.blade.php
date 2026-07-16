<!DOCTYPE html>
<html lang="en">
@php
    $route  = \Route::currentRouteName();    
   $display = '1'; // Default: desktop

$useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Tablet check first
if (
    $useragent !== '' &&
    preg_match('/ipad|tablet|playbook|silk|kindle|(android(?!.*mobile))/i', $useragent)
) {
    $display = '2'; // Tablet
}
// Then mobile phone check
elseif (
    $useragent !== '' &&
    preg_match('/android|bb\d+|meego.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|iphone|ipod|iris|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent)
) {
    $display = '0'; // Mobile
}
$navGroups = getGroups();
$isHome = $route === 'home';
@endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Preload only the LCP hero image --}}
    @if($isHome)
        <link rel="preload" as="image" href="{{ asset('assets/images/export-slides/Image1-mobile.webp') }}" type="image/webp" media="(max-width: 767px)" fetchpriority="high">
        <link rel="preload" as="image" href="{{ asset('assets/images/export-slides/Image1.webp') }}" type="image/webp" media="(min-width: 768px)" fetchpriority="high">
    @elseif($route == "product_detail" && isset($product))
        <link rel="preload" as="image" href="{{ asset($product->image ? 'uploads/product_images/'.$product->image : 'assets/frontend/images/no_product.png') }}" fetchpriority="high">
    @elseif($route == "categories")
        @if($display == 0)
        <link rel="preload" as="image" href="{{ asset('assets/images/category_bg_mob.webp') }}" type="image/webp" fetchpriority="high">
        @else
        <link rel="preload" as="image" href="{{ asset('assets/images/category_bg.webp') }}" type="image/webp" fetchpriority="high">
        @endif
    @endif
      @if(isset($keyword)) 
      @if($keyword->meta_title)
      <title>{{ $keyword->meta_title }}</title>
      @else
      @if($route == "home")
      <title>Scientific Lab Equipment Manufacturer and Supplier In India</title>
      @endif
      @endif
      @if($keyword->meta_description)
      <meta name="description" content="{{ $keyword->meta_description }}"/>
      @else
      @if($route == "home")
      <meta name="description" content="Atico Scientific leading laboratory equipment manufacturer, reliable supplier and exporter of lab equipment at best prices. ISO 9001:2015 Quality Systems Certified."/>
      @endif
      @endif
      @if($keyword->meta_tag)
      <!--<meta name="keywords" content="{{ $keyword->meta_tag }}"/>-->
      @else
      <!--<meta name="keywords" content="Educational Lab Manufacturers, Educational Lab Equipments manufacturer, Educational Scientific Instruments Exporters, Educational Scientific Lab Equipments, Scientific Educational Lab Equipments, Scientific Equipments Manufacturers, Scientific Instruments Manufacturers India, Scientific Lab Equipment Suppliers, Scientific Lab Instruments Manufacturers, Scientific Lab Equipments Manufacturer India,School Science Lab Equipments manufacturer, School Science Lab Equipment manufacturers, Physics Lab Equipment manufacturers,Physics Lab Equipment manufacturer, Chemistry Lab Equipments manufacturer,Chemistry Lab Equipment manufacturers, Biology Lab Equipment manufacturer, Biology Lab Equipments manufacturer, Mechanical Lab Equipments Manufacturer, Fluid Mechanics Lab Equipments manufacturer, Fluid Mechanics Lab Equipment manufacturers,Engineering Lab Equipments manufacturer, Engineering Lab Equipment manufacturers, Technical Educational Equipment Manufacturer, Technical Educational Equipment Manufacturers, Vocational Training Lab Equipments Manufacturers, Vocational Training Lab Equipment Manufacturers, Civil Engineering Lab Equipment manufacturers,Civil Engineering Lab Equipments manufacturers, Chemical Engineering Lab Equipment manufacturers, Chemical Engineering Lab Equipments manufacturer,Laboratory Glassware manufacturers,Material Testing Lab Equipment manufacturer,Material Testing Lab Equipment manufacturers TVET Lab Equipement manufacturers"/>-->
      @endif
      @else
      @if($route == "home")
      <title>Scientific Lab Equipment Manufacturer and Supplier In India</title>
      <!-- <meta name="description" content="{{ isset(getSeoModule()['meta_description']) ? getSeoModule()['meta_description'] : 'Atico India is a leading educational Lab Equipment manufacturer in Ambala, India. We are a national and international supplier. Contact us for school science equipment bulk orders.' }}"/>-->
     <meta name="description" content="Atico Scientific leading laboratory equipment manufacturer, reliable supplier and exporter of lab equipment at best prices. ISO 9001:2015 Quality Systems Certified."/>
    
      @endif

       @if($route == "lab_tender_page")
      <title>{{ isset(getSeoModule()['meta_title']) ? getSeoModule()['meta_title'] : 'Educational, Scientific, and Workshop Vocational Training Lab Equipment for Ministry of Education Tenders - Atico India' }}</title>
      <!-- <meta name="description" content="{{ isset(getSeoModule()['meta_description']) ? getSeoModule()['meta_description'] : 'Atico India is a leading educational Lab Equipment manufacturer in Ambala, India. We are a national and international supplier. Contact us for school science equipment bulk orders.' }}"/>-->
     <meta name="description" content="We have a wide range of Education, Scientific, and Workshop Tools for Ministry of Education Lab Tenders. Contact us for a quotation."/>
    
      @endif
      @if($route == "engineering_lab_tender_page")
      <title>{{ isset(getSeoModule()['meta_title']) ? getSeoModule()['meta_title'] : 'Educational, Scientific, and Workshop Vocational Training Lab Equipment for Ministry of Education Tenders - Atico India' }}</title>
      <!-- <meta name="description" content="{{ isset(getSeoModule()['meta_description']) ? getSeoModule()['meta_description'] : 'Atico India is a leading educational Lab Equipment manufacturer in Ambala, India. We are a national and international supplier. Contact us for school science equipment bulk orders.' }}"/>-->
     <meta name="description" content="We have a wide range of Education, Scientific, and Workshop Tools for Ministry of Education Lab Tenders. Contact us for a quotation."/>
    
      @endif
      @endif
      
      @if($route == "home")
      <link rel="canonical" href="https://aticoscientific.com/" />
      @endif
      @if($route == "categories")
      <link rel="canonical" href="https://aticoscientific.com/category/{{ $keyword->slug }}" />
      @endif
      @if($route == "product_detail")
      <link rel="canonical" href="https://aticoscientific.com/product/{{ $keyword->slug }}" />
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
{{-- echo $route --}}

        <!-- Global site tag (gtag.js) - Google Analytics -->


        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"></noscript>

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"></noscript> -->
@if($route == "product_detail")
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min5560.css?ver=5.0.4') }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min5560.css?ver=5.0.4') }}"></noscript>
@endif
        <!-- <link rel='stylesheet'  href="{{ asset('assets/frontend/css/style.css?ver=5.0.1') }}"  media='all' /> -->
        <!-- <link rel='stylesheet'  href="{{ asset('assets/frontend/css/admin-ajax.css?ver=5.0.1') }}"  media='all' /> -->
        <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
        <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,700;9..40,800&family=Sora:wght@400;600&display=swap" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,700;9..40,800&family=Sora:wght@400;600&display=swap"></noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/atico-home.css') }}?v=23">

        <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg') }}" type="image/x-icon">  
    @yield('css')
    
<meta name="google-site-verification" content="wlfmbRxsoJnXNtqxS6uAYeaPFwM6MO1yzkX8jFXbwOs" />

   <meta name="msvalidate.01" content="A37FED68578C80CB5842B7FCBF342AFD" />
<style>
:root {
  --font-heading: "DM Sans", system-ui, -apple-system, sans-serif;
  --font-body: "Sora", system-ui, -apple-system, sans-serif;
}
html, body {
  font-family: var(--font-body) !important;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
h1, h2, h3, h4, h5, h6,
.ae-title, .ae-kicker, .navbar .nav-link,
.accordion-button {
  font-family: var(--font-heading) !important;
}
.anek-bangla, .inter, .call_anytime, .call_number, .f_cats, .footer_text {
  font-family: var(--font-body) !important;
}
li.li-icon.inter { font-size: 13px; line-height: 30px; }
.support.inter { float: right; font-size: 14px; }
.VIpgJd-ZVi9od-l4eHX-hSRGPd, .VIpgJd-ZVi9od-l4eHX-hSRGPd:link, .VIpgJd-ZVi9od-l4eHX-hSRGPd:visited, .VIpgJd-ZVi9od-l4eHX-hSRGPd:hover, .VIpgJd-ZVi9od-l4eHX-hSRGPd:active {
    display: none;
}
@if($isHome)
.ae-slider{position:relative;height:56vw;min-height:240px;max-height:72vh;background:#0b1c4d;overflow:hidden}
.ae-slide{position:absolute;inset:0;opacity:0;visibility:hidden;pointer-events:none}
.ae-slide.is-active{opacity:1;visibility:visible;pointer-events:auto;z-index:1}
.ae-slide img{width:100%;height:100%;object-fit:cover;object-position:center;display:block}
.ae-slide-content{position:absolute;inset:0;z-index:2;display:flex;align-items:center;padding:0 40px}
@media (max-width:767px){
  .ae-slider{height:auto;min-height:320px;max-height:none}
  .ae-slide.is-active{position:relative}
  .ae-slide img{height:auto;min-height:320px}
  .ae-slide-content{align-items:flex-end;padding:0 16px 40px}
}
@media (min-width:1024px){.ae-slide-content{padding:0 80px}}
@endif
</style>
</head>

<body class="home page-template page-template-page-template page-template-blank-page page-template-page-templateblank-page-php page page-id-832 woocommerce woocommerce-no-js wpb-js-composer js-comp-ver-5.7 vc_responsive">
  
    <div class="page">
        <!-- Header -->
        @include('frontend.layouts.header', ['navGroups' => $navGroups])
        <!-- Main Content -->
        @yield('content')
        <!-- Footer -->
        @include('frontend.layouts.footer')
        
    </div>


  <!--   <div class="scroll-to-top">
      <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </div> -->
   
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    
 
    
 

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('assets/js/ae-search.js') }}?v=16" defer></script>
@if($route == "product_detail")
    <script src="{{ asset('assets/js/owl.carousel.min531b.js?ver=2.3.4') }}" defer></script>
@endif
    @stack('scripts')
    @yield('script')

    <script>
    (function initAeLanguageSwitcherEarly() {
        function ready(fn) {
            if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', fn);
            else fn();
        }
        ready(function () {
            var root = document.getElementById('aeLang');
            var btn = document.getElementById('aeLangBtn');
            var menu = document.getElementById('aeLangMenu');
            var label = document.getElementById('aeLangLabel');
            if (!root || !btn || !menu || !label) return;

            function closeMenu() {
                root.classList.remove('is-open');
                menu.hidden = true;
                btn.setAttribute('aria-expanded', 'false');
            }
            function openMenu() {
                root.classList.add('is-open');
                menu.hidden = false;
                btn.setAttribute('aria-expanded', 'true');
            }

            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                if (menu.hidden) openMenu(); else closeMenu();
            });
            document.addEventListener('click', function (e) {
                if (!root.contains(e.target)) closeMenu();
            });

            window.aeSetGoogleTranslate = function (lang) {
                var select = document.querySelector('#google_translate_element1 select.goog-te-combo');
                if (!select) {
                    setTimeout(function () { window.aeSetGoogleTranslate(lang); }, 300);
                    return;
                }
                select.value = lang;
                select.dispatchEvent(new Event('change'));
            };

            menu.querySelectorAll('.ae-lang-option').forEach(function (option) {
                option.addEventListener('click', function () {
                    var lang = option.getAttribute('data-lang');
                    var text = option.getAttribute('data-label');
                    menu.querySelectorAll('.ae-lang-option').forEach(function (o) { o.classList.remove('is-active'); });
                    option.classList.add('is-active');
                    label.textContent = text;
                    if (window.aeSetGoogleTranslate) window.aeSetGoogleTranslate(lang);
                    closeMenu();
                });
            });
        });
    })();

    window.addEventListener('load', function () {
        var thirdPartyLoaded = false;
        var isMobile = {{ $display == '0' ? 'true' : 'false' }};

        function loadThirdParty() {
            if (thirdPartyLoaded) {
                return;
            }
            thirdPartyLoaded = true;

            @if($display == 1)
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i;
            f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M8CF5BQ');
            @endif

            var fa=document.createElement('script');
            fa.src='https://kit.fontawesome.com/6260f12e27.js';
            fa.crossOrigin='anonymous';
            fa.defer = true;
            document.body.appendChild(fa);

            @if($display == 1)
            var tawk=document.createElement('script');
            tawk.async=true;
            tawk.src='https://embed.tawk.to/665438669a809f19fb3576de/1husfok80';
            tawk.charset='UTF-8';
            tawk.setAttribute('crossorigin','*');
            document.body.appendChild(tawk);
            @endif

            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'en,hi,ar,fr,es,pt,de,ru,zh-CN,id,tr,sw',
                    autoDisplay: false
                }, 'google_translate_element1');
            }
            window.googleTranslateElementInit = googleTranslateElementInit;
            var gt=document.createElement('script');
            gt.async = true;
            gt.src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            document.body.appendChild(gt);
        }

        ['scroll', 'click', 'touchstart', 'keydown'].forEach(function(eventName) {
            window.addEventListener(eventName, loadThirdParty, { once: true, passive: true });
        });

        // Give mobile more time before third-party scripts compete with LCP/TBT.
        setTimeout(loadThirdParty, isMobile ? 10000 : 4000);
    });
    </script>

</body>


</html>