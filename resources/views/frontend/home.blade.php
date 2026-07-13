@extends('frontend.layouts.app')

@section('content')
@php
  $groups = $groups ?? collect();
  $faqs = $faqs ?? collect();
  $blogs = $blogs ?? collect();
  $products = $products ?? collect();
  $latest_cats = $latest_cats ?? collect();

  $slides = [
    [
      'image' => asset('assets/images/export-slides/Image1.webp'),
      'eyebrow' => 'ELECTRICAL TRAINING EQUIPMENTS',
      'title' => 'Welcome to ATICO Scientific',
      'subtitle' => 'The Leading Educational, Hospital & Laboratory Scientific Equipment Manufacturers & Suppliers',
      'text' => 'ATICO is the leading Manufacturer & Exporter of Laboratory Scientific equipment, Laboratory Instruments & Supplies, Engineering Lab equipment, Medical & Hospital Equipment, Educational Scientific equipment, and Science Education Kits for Schools, Colleges, Universities & Research Labs.',
      'link' => url('/contact-us'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image2.webp'),
      'eyebrow' => 'SCIENTIFIC LABORATORY SOLUTIONS',
      'title' => 'Scientific Lab Equipments',
      'subtitle' => 'Biotechnology Lab Solutions',
      'text' => 'AUTOCLAVE – BIOSAFE CABINET – LAMINAR AIR FLOW – FUME HOOD – CLEAN AIR SYSTEM – ROTARY EVAPORATOR – OVEN – INCUBATOR – STORAGE CABINETS – WATER BATHS – LABORATORY FURNITURE',
      'link' => route('products.index'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image3.webp'),
      'eyebrow' => 'GLOBAL PARTNERSHIPS',
      'title' => 'TVET Lab Equipments',
      'subtitle' => 'Workshop Machines & CNC Solutions',
      'text' => 'ATICO creates tools for use in TVET Colleges. Mechanical, civil, workshop machinery, hand tools, plumbing and electrical engineering labs. Polytechnics and ITIs trust our durable and precisely made products which meet global criteria.',
      'link' => route('products.index'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image4.webp'),
      'eyebrow' => 'STEM & SCIENCE KITS',
      'title' => 'Science Stem Kits',
      'subtitle' => 'Physics, Chemistry & Biology Experiments',
      'text' => 'PHYSICS EXPERIMENTS KITS - SCIENCE EXPERIMENTS KITS – CHEMISTRY – BIOLOGY – MICROSCOPE – LABORATORY GLASSWARE – GENERAL LABWARE – CHEMISTRY EXPERIMENTS KITS – BIOLOGY EXPERIMENTS KITS',
      'link' => route('products.index'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image5.webp'),
      'eyebrow' => 'CIVIL ENGINEERING',
      'title' => 'Civil Engineering Lab',
      'subtitle' => 'Testing Machines & Materials Analysis',
      'text' => 'TESTING MACHINES – METALLURGICAL LAB EQUIPMENTS – MINING LAB EQUIPMENTS – SURVEY – MECHANICAL TESTING - CEMENT – SOIL – CONCRETE – BITUMEN – AGGREGATE',
      'link' => route('products.index'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image6.webp'),
      'eyebrow' => 'ANALYTICAL INSTRUMENTS',
      'title' => 'Analytical & Laboratory Equipment',
      'subtitle' => 'Your Trusted Partner in India',
      'text' => 'HPLC – ATOMIC ABSORPTION SPECTROPHOTOMETER – SPECTROPHOTOMETER - PH METER – COLORIMETER - CONDUCTIVITY METER - TDS METER - COLONY COUNTER – GAS CHROMATOGRAPH – KARL FISHER TITRATOR',
      'link' => route('products.index'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image7.webp'),
      'eyebrow' => 'ELECTRONICS TRAINING',
      'title' => 'Electronics Lab Trainers',
      'subtitle' => 'Electrical Engineering Solutions',
      'text' => 'ATICO is a pioneer in manufacturing educational trainer kits. Analog & Digital Lab Trainer | Electrical Machine Trainer | Power Electronics Trainer | Basic Electricity Trainer | Embedded Trainer | PLC Trainer | Process Control Trainer',
      'link' => route('products.index'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image8.webp'),
      'eyebrow' => 'TECHNICAL TRAINING',
      'title' => 'Technical Training Equipments',
      'subtitle' => 'Engineering Lab Solutions',
      'text' => 'FLUID MECHANICS – CHEMICAL ENGINEERING – HEAT TRANSFER LAB – THERMAL ENGINEERING – HVAC – HYDRAULICS – AEROSPACE – AGRICULTURE – ENVIRONMENTAL – MARINE',
      'link' => route('products.index'),
    ],
  ];

  $countries = [
    'Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antigua & Barbuda',
    'Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh',
    'Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bonaire',
    'Bosnia & Herzegovina','Botswana','Brazil','British Indian Ocean Ter',
  ];
@endphp

<section class="ae-slider" id="aeSlider">
  @foreach($slides as $i => $slide)
    <div class="ae-slide {{ $i === 0 ? 'is-active' : '' }}" data-slide="{{ $i }}">
      <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" @if($i===0) loading="eager" fetchpriority="high" @else loading="lazy" @endif>
      <div class="ae-slide-overlay"></div>
      <div class="ae-slide-content">
        <div class="ae-slide-copy">
          <span class="ae-eyebrow">{{ $slide['eyebrow'] }}</span>
          <h2>{{ $slide['title'] }}</h2>
          <h3>{{ $slide['subtitle'] }}</h3>
          <p>{{ $slide['text'] }}</p>
          <a class="ae-cta" href="{{ $slide['link'] }}">Explore Products →</a>
        </div>
      </div>
    </div>
  @endforeach
  <div class="ae-dots" id="aeDots">
    @foreach($slides as $i => $slide)
      <button type="button" class="{{ $i === 0 ? 'is-active' : '' }}" aria-label="Go to slide {{ $i+1 }}" data-goto="{{ $i }}"></button>
    @endforeach
  </div>
</section>

<section class="ae-section">
  <div class="ae-container">
    <div class="ae-about-grid">
      <div>
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="ae-accent-bar m-0"></div>
          <p class="ae-kicker m-0">Manufacturer &amp; Exporter Around Globe</p>
        </div>
        <h1 class="ae-title">ATICO - Laboratory Equipment <span>Manufacturer &amp; Exporter in India</span></h1>
        <div class="ae-text">
          <p>Atico Scientific is an <strong>ISO 9001–certified laboratory equipment manufacturer in India</strong> and one of the most trusted suppliers serving global institutions. We have been manufacturing and exporting scientific, educational, and engineering equipment for many years.</p>
          <p>Today, we are recognised among leading lab equipment manufacturers, laboratory glassware producers, and research laboratory equipment exporters worldwide.</p>
          <p>We serve schools, colleges, universities, hospitals, research laboratories, industrial labs, and TVET institutions across many countries.</p>
          <p><strong>Our product range includes:</strong></p>
          <ul>
            <li>School and college laboratory equipment</li>
            <li>Scientific and engineering lab instruments</li>
            <li>Research and industrial laboratory systems</li>
            <li>Laboratory microscopes and optical instruments</li>
            <li>Laboratory glassware and consumables</li>
            <li>Testing and quality control equipment</li>
          </ul>
          <p><strong>Why institutions trust Atico:</strong></p>
          <ul>
            <li>ISO 9001–certified manufacturing systems</li>
            <li>In-house R&amp;D and quality control</li>
            <li>Compliance with ASTM, IS, BIS, and ISO standards</li>
            <li>Experienced technical team</li>
            <li>Consistent product durability and performance</li>
            <li>Reliable after-sales support</li>
          </ul>
        </div>
        <a class="ae-cta-outline" href="{{ url('/contact-us') }}">Contact Us</a>
      </div>
      <div>
        <img src="{{ asset('assets/images/export-slides/exp_img.webp') }}" alt="Laboratory equipment manufacturer India" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="ae-section" style="padding-top:20px;">
  <div class="ae-container">
    <div class="ae-solution">
      <img src="{{ asset('assets/images/export-slides/medical_pro.webp') }}" alt="Hospital and medical equipments" loading="lazy">
      <div>
        <div class="span_bold">
        <h6>Hospital And Medical Equipments</h6>
        <h3>Solutions for Medical Training Laboratory and Hospital Equipment</h3>
        <p style="text-align: justify;line-height: 26px; font-size: 15px;"><span class="font-bold text-white">ATICO</span> was established in the year <span class="font-bold text-white">1954</span> and has since been engaged in the export of medical equipment, hospital equipment,
         orthopaedic implants &amp; instruments, laboratory equipment, and scientific &amp; educational products worldwide. <span class="font-bold text-white">Government of India</span> recognised export house. Your
          support has made us a <span class="font-bold text-white">Government of India</span> recognised export house. Our goods have reached <span class="font-bold text-white">all continents</span>. With 
          <span class="font-bold text-white">40+ employees</span> who are involved in activities related to production, inspections and dispatch we assure you <span class="font-bold text-white">world class healthcare products</span> 
          delivered to your doorstep. Each employee has in-depth knowledge about the product and has years of experience to back that knowledge.</p>
        <a style="color: #fff; text-decoration: none;" href="{{ route('products.index') }}">View Medical Range →</a></div>
      </div>
    </div>

    <div class="ae-solution reverse">
      <img src="{{ asset('assets/images/export-slides/Image5.webp') }}" alt="Civil and mechanical engineering" loading="lazy">
      <div class="org_back">
        <h6>Engineering Solutions</h6>
        <h3>Civil and Mechanical Engineering Machinery and Trainers</h3>
        <p style="text-align: justify;line-height: 26px; font-size: 15px;">Welcome to Atico Export – Your Trusted Partner 
          in <span class="font-bold text-white">Civil Engineering Lab Equipments</span>, <span class="font-bold text-white">Construction Materials Testing</span> and Environmental Instrumentation 
          Companies located at <span class="font-bold text-white">SAHA, India</span>. Our organization deals in Manufacturing, Supplying and Trading extensive range of Civil Engineering Lab Equipment, 
          <span class="font-bold text-white">Material Testing Lab Equipment</span>, Building Material Testing, <span class="font-bold text-white">Non-Destructive Testing</span>, Pavement Engineering, 
          Survey &amp; Geospatial, Industrial Material Testing, Bitumen &amp; Asphalt Testing, Cement &amp; Concrete Testing Soil Testing Lab Equipment. Our products are manufactured by employing 
          <span class="font-bold text-white">quality raw material</span> and <span class="font-bold text-white">advanced technologies</span>. The relevant features of our products are premium quality, fine finish, 
          dimensional accuracy, easy to operate, rugged construction and many more. We have been able to garner huge market for our products. Join us as we continue to innovate and set new standards in the industry. 
          Discover the difference with ATICO EXPORT – Where <span class="font-bold text-white">Quality Meets Excellence</span>.</p>
        <a style="color: #fff; text-decoration: none; font-weight: 600; font-size: 15px;" href="{{ route('products.index') }}">View Engineering Labs →</a>
      </div>
    </div>

    <div class="ae-solution">
      <img src="{{ asset('assets/images/export-slides/labimg.webp') }}" alt="Educational scientific instruments" loading="lazy">
      <div class="span_bold">
        <h6>Educational &amp; Scientific Instruments</h6>
        <h3>Educational Lab Equipments Manufacturers, exporter, Wholesaler and Suppliers</h3>
        <p style="text-align: justify; line-height: 26px; font-size: 15px;">Atico is a leading <span class="font-bold">Educational Lab Equipment manufacturer in India 
        </span>and one of the most dependable Educational Lab Equipment suppliers and Educational Lab Equipment exporters. Atico Export has been manufacturing and exporting school lab and science 
        equipment for many years, supplying Schools and Science College Lab equipment worldwide.<br><br>We provide <span class="font-bold">top-quality Educational Lab Equipment and educational science teaching kits</span> 
        at very reasonable prices. Our management team comprises devoted professionals with in-depth domain knowledge. We use high-quality raw materials to manufacture all kinds of scientific lab equipments.<br><br>Some of 
        our widely used educational science teaching kits include school biology lab equipment, school physics lab equipment, school chemistry lab equipment, school mathematics lab kits, school lab microscopes and slides,
         laboratory glassware, school science lab plasticware, geography lab models, high school science kits, and more.<br><br>We are among the top <span class="font-bold">Chemistry Lab Equipment manufacturers, Physics Lab 
          Equipment manufacturers, Biology Lab Equipment manufacturers, Chemistry Lab Equipment exporters, Physics Lab Equipment exporters, and Biology Lab Equipment exporters</span>, supplying a wide range of laboratory instruments globally.</p>
        <a style="color: #fff; text-decoration: none;" href="{{ route('products.index') }}">View Educational Lab Equipments Range →</a>
      </div>
    </div>

    <div class="ae-solution reverse">
      <img src="{{ asset('assets/images/export-slides/ensimg.webp') }}" alt="Material testing equipments" loading="lazy">
      <div class="org_back">
        <h6>Engineering Testing Equipment</h6>
        <h3>Material Testing Equipments and Testing Machines Manufacturer</h3>
        <p>Atico is a reputed Engineering Training Equipment and Laboratory Glassware manufacturer in India. Atico Export has been manufacturing and exporting engineering instruments for
           decades.<br><br>We provide top-quality engineering solutions at very reasonable prices. Our technical team has in-depth expertise in their respective domains.<br><br>Our 
           engineering training equipment includes <span class="font-bold">automobile engine equipment</span>, <span class="font-bold">integrated circuits trainers</span>, 
           <span class="font-bold">hydraulic bench</span>, <span class="font-bold">heat transfer systems</span>, <span class="font-bold">air compressor rigs</span>, and <span class="font-bold">fluid 
            mechanics equipment</span>.<br><br>We are recognised among the top laboratory glassware manufacturers in India, offering precision-engineered solutions.</p>
        <a style="color: #fff; text-decoration: none; font-weight: 600; font-size: 15px;" href="{{ route('products.index') }}">View Engineering Lab Equipment →</a>
      </div>
    </div>
    <div class="ae-solution">
      <img src="{{ asset('assets/images/export-slides/labimg.webp') }}" alt="Educational scientific instruments" loading="lazy">
      <div class="span_bold">
        <h6>Educational Lab Equipment</h6>
        <h3>Schools and Science College Lab Equipment</h3>
        <p>We are a <span class="font-bold">INDIA based</span> school science equipment company. We supply <span class="font-bold">high quality
         and affordable</span> <span class="font-bold">laboratory equipment</span> to schools, colleges, industry &amp; individuals.</p>
        <a  style="color: #fff; text-decoration: none;" href="{{ route('products.index') }}">View Educational Lab Equipments Range →</a>
      </div>
    </div>
  </div>
</section>

@if($groups->count() || $latest_cats->count() || $products->count())
<section class="ae-section ae-home-products">
  <div class="ae-container">
    <div class="ae-accent-bar mx-auto"></div>
    <h2 class="ae-title text-center">Our Product Categories</h2>
    <p class="text-center mb-4" style="color:#6b7280;">Explore laboratory, educational and engineering equipment ranges</p>

    @if($groups->count())
      <div class="ae-card-grid is-3 mb-4">
        @foreach($groups as $group)
          <a class="ae-pcard" href="{{ route('products.index') }}">
            <div class="ae-pcard-media">
              <img
                src="{{ asset($group->image ? 'uploads/product_images/'.$group->image : 'assets/images/no_product.png') }}"
                alt="{!! strip_tags($group->name) !!}"
                loading="lazy"
                onerror="this.onerror=null;this.src='{{ asset('assets/images/no_product.png') }}';"
              >
            </div>
            <div class="ae-pcard-title">{!! $group->name !!}</div>
          </a>
        @endforeach
      </div>
    @elseif($latest_cats->count())
      <div class="ae-card-grid is-3 mb-4">
        @foreach($latest_cats as $cat)
          <a class="ae-pcard" href="{{ route('products.index') }}">
            <div class="ae-pcard-media">
              <img
                src="{{ asset($cat->image ? 'uploads/product_images/'.$cat->image : 'assets/images/no_product.png') }}"
                alt="{!! strip_tags($cat->name) !!}"
                loading="lazy"
                onerror="this.onerror=null;this.src='{{ asset('assets/images/no_product.png') }}';"
              >
            </div>
            <div class="ae-pcard-title">{!! $cat->name !!}</div>
          </a>
        @endforeach
      </div>
    @endif

    <!-- @if($products->count())
      <h3 class="ae-title text-center" style="font-size:1.35rem;margin-top:28px;">Featured Products</h3>
      <div class="ae-card-grid">
        @foreach($products as $item)
          <a class="ae-pcard" href="{{ url('/product/'.$item->slug) }}">
            <div class="ae-pcard-media">
              <img
                src="{{ asset($item->image ? 'uploads/product_images/'.$item->image : 'assets/images/no_product.png') }}"
                alt="{!! strip_tags($item->name) !!}"
                loading="lazy"
                onerror="this.onerror=null;this.src='{{ asset('assets/images/no_product.png') }}';"
              >
            </div>
            <div class="ae-pcard-title">{!! $item->name !!}</div>
          </a>
        @endforeach
      </div>
    @endif
  </div>
</section>
@endif -->

<section class="ae-stats">
  <div class="ae-container">
    <div class="ae-stats-grid">
      <div><strong>15000+</strong><span>Products</span></div>
      <div><strong>300+</strong><span>Clients</span></div>
      <div><strong>40+</strong><span>Turnkey Projects</span></div>
      <div><strong>100+</strong><span>Countries</span></div>
    </div>
  </div>
</section>

<section class="ae-section">
  <div class="ae-container">
    <div class="row g-4">
      <div class="col-md-6">
        <div class="ae-accent-bar"></div>
        <h2 class="ae-title" style="font-size:1.5rem;">GLOBAL EXPORTER</h2>
        <p class="ae-text">Atico is trusted among international institutions as one of the leading Scientific lab Equipment exporters. ISO-aligned manufacturing, in-house R&amp;D, export documentation, OEM support and custom specifications for international tenders.</p>
        <a href="{{ url('/about-us') }}" style="color:var(--ae-blue);font-weight:700;text-decoration:none;">Read more →</a>
      </div>
      <div class="col-md-6">
        <div class="ae-accent-bar"></div>
        <h2 class="ae-title" style="font-size:1.5rem;">TENDERS &amp; BIDDINGS</h2>
        <p class="ae-text">Leading manufacturer of lab equipment as per MOE tender specifications — biology, school/college labs, electronics trainers, microscopes, engineering labs and science lab equipment.</p>
        <a href="{{ url('/lab-tenders') }}" style="color:var(--ae-blue);font-weight:700;text-decoration:none;">Read more →</a>
      </div>
    </div>
  </div>
</section>

<section class="ae-countries-sec">
  <div class="ae-countries-head">
    <h2>We Serve 100+ Countries</h2>
    <p>Atico exports laboratory equipment and scientific instruments globally</p>
  </div>

  <div class="ae-countries-marquee">
    <div class="ae-countries-fade is-left"></div>
    <div class="ae-countries-fade is-right"></div>
    <div class="ae-countries-track">
      @foreach(array_merge($countries, $countries) as $i => $country)
        <div class="ae-country-chip {{ $i % 2 === 0 ? 'is-blue' : 'is-orange' }}">
          <span>{{ $country }}</span>
        </div>
      @endforeach
    </div>
  </div>

  <p class="ae-countries-more">
    And many more countries worldwide.
    <a href="{{ url('/contact-us') }}">Contact us</a> to know more.
  </p>

  <div class="ae-countries-features">
    <div class="ae-countries-feature">
      <div class="ae-countries-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
      </div>
      <h3>Worldwide Shipping</h3>
      <p>Shipping costs depend on consignment size and other factors. Please contact us for more details.</p>
    </div>
    <div class="ae-countries-feature">
      <div class="ae-countries-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"/><path d="M12 22V12"/><polyline points="3.29 7 12 12 20.71 7"/><path d="m7.5 4.27 9 5.15"/></svg>
      </div>
      <h3>Bulk Orders</h3>
      <p>Special discounts available on bulk orders. We have delivered bulk orders to more than 60 countries worldwide.</p>
    </div>
    <div class="ae-countries-feature">
      <div class="ae-countries-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
      </div>
      <h3>Best Quality</h3>
      <p>High-quality products at competitive prices. No complaints recorded in the past three decades.</p>
    </div>
    <div class="ae-countries-feature">
      <div class="ae-countries-icon" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      </div>
      <h3>Secure Payments</h3>
      <p>We accept Wire Transfer, Telegraphic Transfer, Letter of Credit, PayPal, etc. Please contact us for more details.</p>
    </div>
  </div>
</section>

@php
  $testimonials = [
    [
      'name' => 'Nur Mohammed',
      'title' => 'Procurement Partner',
      'company' => 'Top Lab Solution, Malaysia',
      'text' => 'We had a good experience with the stirrer machine, and the glassware quality was excellent. The products met our operational and quality expectations.',
    ],
    [
      'name' => 'Jacob',
      'title' => 'Business Partner',
      'company' => 'Chemical and Glassware (Pty) Ltd, South Africa',
      'text' => 'We have been working with Atico for more than 20 years. After visiting their manufacturing facility and discussing future projects, I am confident and excited about our continued collaboration. We appreciate the hospitality and professionalism of the team.',
    ],
    [
      'name' => 'Mohammed Al Hussaini',
      'title' => 'Education Supplies Consultant',
      'company' => 'Qatar',
      'text' => 'Atico is a reliable supplier for school science laboratory equipment. Their products are suitable for educational institutions and meet required standards.',
    ],
    [
      'name' => 'Clark',
      'title' => 'Laboratory Equipment Distributor',
      'company' => 'Uganda',
      'text' => 'It was a very positive experience visiting the company. We appreciate the hospitality and the detailed information provided regarding laboratory equipment.',
    ],
    [
      'name' => 'Sri Niwas',
      'title' => 'Trading Partner',
      'company' => 'Maluri General Trading LLC, UAE',
      'text' => 'Atico provides high-quality laboratory equipment with a strong focus on customer satisfaction. Their consistency and reliability stand out in the market.',
    ],
    [
      'name' => 'Lablink',
      'title' => 'International Partner',
      'company' => 'Cyprus',
      'text' => 'Visiting the manufacturing facility was a valuable experience. We were impressed by the professionalism, product quality, and hospitality during the office visit and conference.',
    ],
  ];
@endphp
<section class="ae-reviews" id="aeReviews">
  <div class="ae-reviews-inner">
    <div class="ae-reviews-head">
      <h2>Client <span class="is-blue">Testimonies</span> &amp; <span class="is-orange">Success</span></h2>
      <p>Hear from our valued clients about their experience working with us</p>
      <div class="ae-reviews-rule"></div>
    </div>

    <div class="ae-reviews-track" id="aeReviewsTrack" aria-live="polite"></div>

    <div class="ae-reviews-nav">
      <button type="button" class="ae-reviews-btn is-prev" id="aeReviewsPrev" aria-label="Previous testimonial">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
      </button>
      <div class="ae-reviews-dots" id="aeReviewsDots">
        @foreach($testimonials as $i => $t)
          <button type="button" class="{{ $i === 0 ? 'is-active' : '' }}" data-goto="{{ $i }}" aria-label="Go to testimonial {{ $i + 1 }}"></button>
        @endforeach
      </div>
      <button type="button" class="ae-reviews-btn is-next" id="aeReviewsNext" aria-label="Next testimonial">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
      </button>
    </div>
  </div>
</section>
<script type="application/json" id="aeReviewsData">{!! json_encode($testimonials, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>

@php
  $homeFaqs = [
    [
      'question' => 'What types of laboratory equipment does Atico Export manufacture and supply?',
      'answer' => 'Atico Export manufactures and supplies a wide range of scientific, educational, engineering, and testing laboratory equipment. These include school and college lab equipment, research instruments, engineering training systems, laboratory glassware, microscopes, and quality control instruments.',
    ],
    [
      'question' => 'Is Atico Export an ISO-certified manufacturer and global exporter?',
      'answer' => 'Yes, Atico Export is an ISO 9001–certified laboratory equipment manufacturer in India and a trusted global exporter. Atico supplies institutions across numerous countries with export-ready documentation and logistics support.',
    ],
    [
      'question' => 'Does Atico Export provide customised equipment for tenders and OEM requirements?',
      'answer' => 'Yes, Atico Export offers custom specifications, OEM and private-label manufacturing, and supplies equipment as per international tenders, including MOE tender specifications.',
    ],
  ];
@endphp
<section class="ae-faqs" id="aeFaqs">
  <div class="ae-faqs-inner">
    <div class="ae-faqs-head">
      <h2>Frequently Asked <span>Questions about Atico</span></h2>
      <div class="ae-faqs-rule"></div>
    </div>
    <div class="ae-faqs-list">
      @foreach($homeFaqs as $index => $faq)
        <div class="ae-faq-item {{ $index === 0 ? 'is-open' : '' }}">
          <button type="button" class="ae-faq-trigger" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
            <h3>{{ $faq['question'] }}</h3>
            <span class="ae-faq-icon" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </span>
          </button>
          <div class="ae-faq-panel">
            <p>{{ $faq['answer'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ae-section">
  <div class="ae-container">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-3">
      <h2 class="ae-title mb-0">Latest News</h2>
      <a href="{{ url('/blogs') }}" style="color:var(--ae-blue);font-weight:700;text-decoration:none;">View All Articles</a>
    </div>
    <div class="ae-blog-grid">
      @forelse($blogs->take(3) as $blog)
        <a class="ae-blog-card" href="{{ route('blog_detail', $blog->slug) }}">
          <img src="{{ asset($blog->image ? 'uploads/blog_images/'.$blog->image : 'assets/images/export-slides/Image1.webp') }}" alt="{{ $blog->name }}" loading="lazy">
          <div class="body">
            <h3>{{ $blog->name }}</h3>
            <p>{{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 110) }}</p>
            <span class="ae-blog-link">Read more</span>
          </div>
        </a>
      @empty
        @foreach([1,2,3] as $n)
          <a class="ae-blog-card" href="{{ url('/blogs') }}">
            <img src="{{ asset('assets/images/export-slides/Image'.$n.'.webp') }}" alt="" loading="lazy">
            <div class="body">
              <h3>Laboratory Equipment Insights</h3>
              <p>Updates on scientific, educational and engineering laboratory equipment from Atico.</p>
              <span class="ae-blog-link">Read more</span>
            </div>
          </a>
        @endforeach
      @endforelse
    </div>
  </div>
</section>

<style>
.span_bold {
  background-color: rgb(25, 71, 209);
  color: #fff; 
  padding: 35px 35px; 
  border-radius: 18px;
}
.span_bold span,
.org_back span {
    font-weight: 700;
}
.span_bold h6,
.org_back h6 {
    text-transform: uppercase;
    font-weight: 600;
    color: #eee;
}
.span_bold h3,
.org_back h3 {
    font-size: 22px;
    line-height: 28px;
    padding: 6px 0;
}
.org_back{
  background: rgb(250, 66, 25);
  padding: 40px 35px;
  border-radius: 18px;
  color: #fff;
}
</style>
@push('scripts')
<script>
(function () {
  var slider = document.getElementById('aeSlider');
  if (slider) {
    var slides = Array.prototype.slice.call(slider.querySelectorAll('.ae-slide'));
    var dots = Array.prototype.slice.call(document.querySelectorAll('#aeDots button'));
    var index = 0;
    var timer;

    function goTo(i) {
      index = (i + slides.length) % slides.length;
      slides.forEach(function (s, n) { s.classList.toggle('is-active', n === index); });
      dots.forEach(function (d, n) { d.classList.toggle('is-active', n === index); });
    }

    function start() {
      stop();
      timer = setInterval(function () { goTo(index + 1); }, 5000);
    }

    function stop() {
      if (timer) clearInterval(timer);
    }

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        goTo(parseInt(dot.getAttribute('data-goto'), 10));
        start();
      });
    });

    slider.addEventListener('mouseenter', stop);
    slider.addEventListener('mouseleave', start);
    start();
  }
})();

(function () {
  var dataEl = document.getElementById('aeReviewsData');
  var track = document.getElementById('aeReviewsTrack');
  var dotsWrap = document.getElementById('aeReviewsDots');
  if (!dataEl || !track || !dotsWrap) return;

  var items = [];
  try { items = JSON.parse(dataEl.textContent || '[]'); } catch (e) { items = []; }
  if (!items.length) return;

  var index = 0;
  var autoplay = true;
  var timer = null;
  var mobile = window.innerWidth < 768;
  var starSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#facc15" stroke="#fa4219" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>';

  function escapeHtml(str) {
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;');
  }

  function cardHtml(item, pos) {
    var center = mobile ? pos === 0 : pos === 1;
    var sideClass = '';
    if (!mobile) {
      if (pos === 0) sideClass = 'is-side-left';
      else if (pos === 2) sideClass = 'is-side-right';
      else sideClass = 'is-center';
    } else {
      sideClass = 'is-center';
    }
    return (
      '<div class="ae-review-slot ' + sideClass + '">' +
        '<article class="ae-review-card' + (center ? ' is-active' : '') + '">' +
          '<div class="ae-review-stars">' + starSvg + starSvg + starSvg + starSvg + starSvg + '</div>' +
          '<p>“' + escapeHtml(item.text) + '”</p>' +
          '<div class="ae-review-bar' + (center ? ' is-full' : '') + '"></div>' +
          '<div class="ae-review-author">' +
            '<h4>' + escapeHtml(item.name) + '</h4>' +
            '<span class="role">' + escapeHtml(item.title) + '</span>' +
            '<span class="company">' + escapeHtml(item.company) + '</span>' +
          '</div>' +
        '</article>' +
      '</div>'
    );
  }

  function render() {
    var html = '';
    if (mobile) {
      html = cardHtml(items[index], 0);
    } else {
      for (var a = 0; a < 3; a++) {
        var i = (index + a) % items.length;
        html += cardHtml(items[i], a);
      }
    }
    track.innerHTML = html;
    Array.prototype.forEach.call(dotsWrap.querySelectorAll('button'), function (dot, n) {
      dot.classList.toggle('is-active', n === index);
    });
  }

  function go(i) {
    index = (i + items.length) % items.length;
    render();
  }

  function start() {
    stop();
    timer = setInterval(function () {
      if (autoplay) go(index + 1);
    }, 6000);
  }

  function stop() {
    if (timer) clearInterval(timer);
    timer = null;
  }

  document.getElementById('aeReviewsPrev').addEventListener('click', function () {
    autoplay = false;
    go(index - 1);
    setTimeout(function () { autoplay = true; }, 100);
  });
  document.getElementById('aeReviewsNext').addEventListener('click', function () {
    autoplay = false;
    go(index + 1);
    setTimeout(function () { autoplay = true; }, 100);
  });
  Array.prototype.forEach.call(dotsWrap.querySelectorAll('button'), function (dot) {
    dot.addEventListener('click', function () {
      autoplay = false;
      go(parseInt(dot.getAttribute('data-goto'), 10));
      setTimeout(function () { autoplay = true; }, 100);
    });
  });

  window.addEventListener('resize', function () {
    var nextMobile = window.innerWidth < 768;
    if (nextMobile !== mobile) {
      mobile = nextMobile;
      render();
    }
  });

  var section = document.getElementById('aeReviews');
  section.addEventListener('mouseenter', function () { autoplay = false; });
  section.addEventListener('mouseleave', function () { autoplay = true; });

  render();
  start();
})();

(function () {
  var list = document.querySelector('#aeFaqs .ae-faqs-list');
  if (!list) return;
  list.addEventListener('click', function (e) {
    var btn = e.target.closest('.ae-faq-trigger');
    if (!btn || !list.contains(btn)) return;
    var item = btn.closest('.ae-faq-item');
    var wasOpen = item.classList.contains('is-open');
    Array.prototype.forEach.call(list.querySelectorAll('.ae-faq-item'), function (el) {
      el.classList.remove('is-open');
      var t = el.querySelector('.ae-faq-trigger');
      if (t) t.setAttribute('aria-expanded', 'false');
    });
    if (!wasOpen) {
      item.classList.add('is-open');
      btn.setAttribute('aria-expanded', 'true');
    }
  });
})();
</script>
@endpush
@endsection
