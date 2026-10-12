<!DOCTYPE html>
<html lang="en">
@php
    $route  = \Route::currentRouteName();    
   $display = '1'; // Default: desktop

$useragent = (string) request()->userAgent();

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
    <!-- Google Tag Manager. On phones this starts after the page has painted. -->
@if($display != '0')
<script>window.__aeGtm=true;(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFHT2HBC');</script>
@endif
<!-- End Google Tag Manager -->

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
      @php
        $seoFallbacks = [
          'home' => [
            'Scientific Lab Equipment Manufacturer and Supplier In India',
            'Atico Scientific leading laboratory equipment manufacturer, reliable supplier and exporter of lab equipment at best prices. ISO 9001:2015 Quality Systems Certified.',
          ],
          'about_us_page' => [
            'About Atico Scientific | Laboratory Equipment Manufacturer',
            'Atico Scientific manufactures and exports laboratory equipment for schools, colleges, research labs and vocational institutes.',
          ],
          'contact_us_page' => [
            'Contact Us | Atico Scientific',
            'Contact Atico Scientific for quotations, tenders, dealerships and laboratory equipment support worldwide.',
          ],
          'blog_page' => [
            'Blog | Atico Scientific',
            'News, guides and updates from Atico Scientific on laboratory and educational equipment.',
          ],
          'products.index' => [
            'Our Products | Atico Scientific',
            'Browse laboratory and educational equipment manufactured and exported by Atico Scientific.',
          ],
          'lab_tender_page' => [
            'Educational, Scientific, and Workshop Vocational Training Lab Equipment for Ministry of Education Tenders - Atico India',
            'We have a wide range of Education, Scientific, and Workshop Tools for Ministry of Education Lab Tenders. Contact us for a quotation.',
          ],
          'engineering_lab_tender_page' => [
            'Engineering Lab Equipment for Ministry of Education Tenders - Atico Scientific',
            'Engineering, scientific and workshop laboratory equipment for education tenders. Contact Atico Scientific for a quotation.',
          ],
        ];
        $seoTitle = isset($keyword) ? trim((string) ($keyword->meta_title ?? '')) : '';
        $seoDescription = isset($keyword) ? trim((string) ($keyword->meta_description ?? '')) : '';
        if ($seoTitle === '' && isset($seoFallbacks[$route])) {
          $seoTitle = $seoFallbacks[$route][0];
        }
        if ($seoDescription === '' && isset($seoFallbacks[$route])) {
          $seoDescription = $seoFallbacks[$route][1];
        }
        if ($seoTitle === '') {
          $seoTitle = 'Atico Scientific';
        }
      @endphp
      <title>{{ $seoTitle }}</title>
      @if($seoDescription !== '')
      <meta name="description" content="{{ $seoDescription }}"/>
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
      @if($route == "laboratory-equipment-supplier-in-kenya")
      <link rel="canonical" href="https://aticoscientific.com/laboratory-equipment-supplier-in-kenya" />
      @endif
      @if($route == "laboratory-equipment-supplier-in-uganda")
      <link rel="canonical" href="https://aticoscientific.com/laboratory-equipment-supplier-in-uganda" />
      <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [
{
"@type": "ListItem",
"position": 1,
"name": "Home",
"item": "https://aticoscientific.com/"
},
{
"@type": "ListItem",
"position": 2,
"name": "Laboratory Equipment Supplier in Uganda",
"item": "https://aticoscientific.com/laboratory-equipment-supplier-in-uganda"
}
]
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
"@type": "Question",
"name": "Do you export lab equipment to Uganda?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we supply Uganda regularly, shipping by sea to Mombasa and on to Kampala."
}
},
{
"@type": "Question",
"name": "Are you a manufacturer or a local reseller?",
"acceptedAnswer": {
"@type": "Answer",
"text": "We're the manufacturer, based in Ambala, India. You buy direct at factory prices and we export straight to you."
}
},
{
"@type": "Question",
"name": "Is your equipment UNBS / PVoC compliant?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we arrange pre-shipment inspection and the Certificate of Conformity so your consignment clears smoothly."
}
},
{
"@type": "Question",
"name": "Can you supply UgIFT / SEED schools and Ministry tenders?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes. We prepare compliant bids with specifications, pricing and documentation."
}
},
{
"@type": "Question",
"name": "How does delivery work for a landlocked country?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Cargo lands at Mombasa and moves by road/rail to Kampala via the Northern Corridor — we handle the transit documents."
}
},
{
"@type": "Question",
"name": "How long does delivery to Uganda take?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Roughly 4–6 weeks including inland transit — a firm date comes with your quote."
}
}
]
}
</script>
      @endif
    @if($route == "laboratory-equipment-supplier-in-nigeria")
      <link rel="canonical" href="https://aticoscientific.com/laboratory-equipment-supplier-in-nigeria" />
      <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [
{
"@type": "ListItem",
"position": 1,
"name": "Home",
"item": "https://aticoscientific.com/"
},
{
"@type": "ListItem",
"position": 2,
"name": "Laboratory Equipment Supplier in Nigeria",
"item": "https://aticoscientific.com/laboratory-equipment-supplier-in-nigeria"
}
]
}
</script>

<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
"@type": "Question",
"name": "Do you export lab equipment to Nigeria?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — Nigeria is one of our biggest markets. We ship regularly into Lagos (Apapa / Tin Can)."
}
},
{
"@type": "Question",
"name": "Are you a manufacturer or a local reseller?",
"acceptedAnswer": {
"@type": "Answer",
"text": "We're the manufacturer, based in Ambala, India. You buy direct at factory prices and we export straight to you."
}
},
{
"@type": "Question",
"name": "Is your equipment SON/SONCAP compliant?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we obtain the Product Certificate and SONCAP Certificate so your consignment clears Lagos."
}
},
{
"@type": "Question",
"name": "Can you supply UBEC, TETFund and state tenders?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes. We prepare compliant bids with specifications, pricing and documentation."
}
},
{
"@type": "Question",
"name": "Do you handle the import paperwork (Form M, PC, SC)?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we prepare and share the complete set with your clearing agent."
}
},
{
"@type": "Question",
"name": "How long does delivery to Nigeria take?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Roughly 4 - 6 weeks to Lagos by sea, plus inland delivery — a firm lead time comes with your quote."
}
}
]
}
</script>
@endif  

@if($route == "laboratory-equipment-supplier-in-tanzania")
    <link rel="canonical" href="https://aticoscientific.com/laboratory-equipment-supplier-in-tanzania" />
    <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [
{
"@type": "ListItem",
"position": 1,
"name": "Home",
"item": "https://aticoscientific.com/"
},
{
"@type": "ListItem",
"position": 2,
"name": "Laboratory Equipment Supplier in Tanzania",
"item": "https://aticoscientific.com/laboratory-equipment-supplier-in-tanzania"
}
]
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
"@type": "Question",
"name": "Do you export lab equipment to Tanzania?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — Tanzania is one of our core markets. We ship regularly through Dar es Salaam."
}
},
{
"@type": "Question",
"name": "Are you a manufacturer or a local reseller?",
"acceptedAnswer": {
"@type": "Answer",
"text": "We're the manufacturer, based in Ambala, India. You buy direct at factory prices and we export straight to you."
}
},
{
"@type": "Question",
"name": "Is your equipment TBS / PVoC compliant?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we arrange pre-shipment inspection and the Certificate of Conformity so your consignment clears Dar es Salaam."
}
},
{
"@type": "Question",
"name": "Can you supply Ministry, PO-RALG and donor-funded tenders?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes. We prepare compliant bids with specifications, pricing and documentation."
}
},
{
"@type": "Question",
"name": "Can you match the competency-based science syllabi?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes. Tell us the forms and subjects and we'll build the exact equipment list."
}
},
{
"@type": "Question",
"name": "How long does delivery to Tanzania take?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Roughly 3–4 weeks to Dar es Salaam by sea, plus inland delivery — a firm lead time comes with your quote."
}
}
]
}
</script>
@endif
      

@if($route == "laboratory-equipment-supplier-in-ghana")
    <link rel="canonical" href="https://aticoscientific.com/laboratory-equipment-supplier-in-ghana" />
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
"itemListElement": [
{
"@type": "ListItem",
"position": 1,
"name": "Home",
"item": "https://aticoscientific.com/"
},
{
"@type": "ListItem",
"position": 2,
"name": "Laboratory Equipment Supplier in Ghana",
"item": "https://aticoscientific.com/laboratory-equipment-supplier-in-ghana"
}
]
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
"@type": "Question",
"name": "Do you export lab equipment to Ghana?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we supply Ghana regularly, shipping through the port of Tema."
}
},
{
"@type": "Question",
"name": "Are you a manufacturer or a local reseller?",
"acceptedAnswer": {
"@type": "Answer",
"text": "We're the manufacturer, based in Ambala, India. You buy direct at factory prices and we export straight to you."
}
},
{
"@type": "Question",
"name": "Is your equipment GSA / EasyPASS compliant?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes — we arrange the Certificate of Conformity so your consignment clears Tema."
}
},
{
"@type": "Question",
"name": "Can you supply GES, GETFund and CTVET tenders?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes. We prepare compliant bids with specifications, pricing and documentation."
}
},
{
"@type": "Question",
"name": "Can you match the standards-based / WASSCE science curriculum?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes. Tell us the level and subjects and we'll build the exact equipment list."
}
},
{
"@type": "Question",
"name": "How long does delivery to Ghana take?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Roughly 4–5 weeks to Tema by sea, plus inland delivery — a firm lead time comes with your quote."
}
}
]
}
</script>
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
        @if($display != '0')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,700;9..40,800&family=Sora:wght@400;600&display=swap" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,700;9..40,800&family=Sora:wght@400;600&display=swap"></noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/atico-home.css') }}?v=43">
        @else
        <link rel="stylesheet" href="{{ asset('assets/css/atico-home.css') }}?v=43" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/atico-home.css') }}?v=43"></noscript>
        @endif

        <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg') }}" type="image/x-icon">  
    @yield('css')
    
<meta name="google-site-verification" content="wlfmbRxsoJnXNtqxS6uAYeaPFwM6MO1yzkX8jFXbwOs" />

   <meta name="msvalidate.01" content="A37FED68578C80CB5842B7FCBF342AFD" />
<style>
:root {
  --font-heading: {{ $display == '0' ? 'system-ui, -apple-system, sans-serif' : '"DM Sans", system-ui, -apple-system, sans-serif' }};
  --font-body: {{ $display == '0' ? 'system-ui, -apple-system, sans-serif' : '"Sora", system-ui, -apple-system, sans-serif' }};
}
@if($display == '0')
.ae-topbar{background:#1947d1;color:#fff}
.ae-topbar .wrap{max-width:1400px;margin:0 auto;padding:8px 16px;display:flex;align-items:center;justify-content:space-between;gap:12px}
.ae-topbar a{color:#fff;text-decoration:none}
.ae-enquiry{background:#fa4219;color:#fff;padding:6px 12px;border-radius:8px;display:inline-flex;align-items:center;gap:6px}
.ae-header{background:#fff;border-bottom:1px solid #1947d1;position:sticky;top:0;z-index:40}
.ae-header .logo{width:140px;height:auto}
.navbar-toggler{display:inline-flex;align-items:center;border:1px solid #d1d5db;background:#fff;padding:6px 10px;border-radius:6px}
@media (max-width:991px){
  .navbar-collapse{display:none !important}
  .navbar-collapse.show{display:block !important}
}
@endif
html, body {
  font-family: var(--font-body) !important;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
h1, h2, h3, h4, h5, h6,
.ae-title, .ae-kicker, .navbar .nav-link,
.accordion-button {
  font-family: sans-serif !important;
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFHT2HBC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
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
    <!-- Chat loads after the page, so it does not compete with the first screen. -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    
 
    
 

    @if(in_array($route, ['blog_page', 'blog_detail', 'engineering_lab_tender_page'], true))
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    @endif
    @if($route == 'product_detail')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer></script>
    @else
    <script>
    document.addEventListener('click', function (event) {
        var button = event.target.closest('.navbar-toggler');
        if (!button) return;
        var menu = document.getElementById('navbarSupportedContent');
        if (!menu) return;
        var open = menu.classList.toggle('show');
        button.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    </script>
    @endif
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

            if (isMobile && !window.__aeGtm) {
                window.__aeGtm = true;
                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
                var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i;
                f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NFHT2HBC');
            }

            @if($display == 1)
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i;
            f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-M8CF5BQ');
            @endif

            if (document.querySelector('i.fa, .fa-solid, .fa-regular, .fa-brands')) {
                var fa=document.createElement('script');
                fa.src='https://kit.fontawesome.com/6260f12e27.js';
                fa.crossOrigin='anonymous';
                fa.defer = true;
                document.body.appendChild(fa);
            }

            @if($display == 1)
           // var tawk=document.createElement('script');
           // tawk.async=true;
           // tawk.src='https://embed.tawk.to/665438669a809f19fb3576de/1husfok80';
          //  tawk.charset='UTF-8';
          //  tawk.setAttribute('crossorigin','*');
          //  document.body.appendChild(tawk);
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

        // Give mobile more time before third-party scripts compete with the first screen.
        setTimeout(loadThirdParty, isMobile ? 10000 : 4000);

        setTimeout(function () {
            if (window.__aeTawk) return;
            window.__aeTawk = true;
            var tawk = document.createElement('script');
            tawk.async = true;
            tawk.src = 'https://embed.tawk.to/665438669a809f19fb3576de/1husfok80';
            tawk.charset = 'UTF-8';
            tawk.setAttribute('crossorigin', '*');
            document.body.appendChild(tawk);
        }, isMobile ? 15000 : 6000);
    });
    </script>

</body>


</html>