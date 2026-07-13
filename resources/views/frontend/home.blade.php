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
      'link' => url('/category/laboratory-research-equipment'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image3.webp'),
      'eyebrow' => 'GLOBAL PARTNERSHIPS',
      'title' => 'TVET Lab Equipments',
      'subtitle' => 'Workshop Machines & CNC Solutions',
      'text' => 'ATICO creates tools for use in TVET Colleges. Mechanical, civil, workshop machinery, hand tools, plumbing and electrical engineering labs. Polytechnics and ITIs trust our durable and precisely made products which meet global criteria.',
      'link' => url('/category/educational-trainers'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image4.webp'),
      'eyebrow' => 'STEM & SCIENCE KITS',
      'title' => 'Science Stem Kits',
      'subtitle' => 'Physics, Chemistry & Biology Experiments',
      'text' => 'PHYSICS EXPERIMENTS KITS - SCIENCE EXPERIMENTS KITS – CHEMISTRY – BIOLOGY – MICROSCOPE – LABORATORY GLASSWARE – GENERAL LABWARE – CHEMISTRY EXPERIMENTS KITS – BIOLOGY EXPERIMENTS KITS',
      'link' => url('/category/educational-lab-equipment'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image5.webp'),
      'eyebrow' => 'CIVIL ENGINEERING',
      'title' => 'Civil Engineering Lab',
      'subtitle' => 'Testing Machines & Materials Analysis',
      'text' => 'TESTING MACHINES – METALLURGICAL LAB EQUIPMENTS – MINING LAB EQUIPMENTS – SURVEY – MECHANICAL TESTING - CEMENT – SOIL – CONCRETE – BITUMEN – AGGREGATE',
      'link' => url('/category/civil-engineering-instruments'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image6.webp'),
      'eyebrow' => 'ANALYTICAL INSTRUMENTS',
      'title' => 'Analytical & Laboratory Equipment',
      'subtitle' => 'Your Trusted Partner in India',
      'text' => 'HPLC – ATOMIC ABSORPTION SPECTROPHOTOMETER – SPECTROPHOTOMETER - PH METER – COLORIMETER - CONDUCTIVITY METER - TDS METER - COLONY COUNTER – GAS CHROMATOGRAPH – KARL FISHER TITRATOR',
      'link' => url('/category/testing-lab-machines'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image7.webp'),
      'eyebrow' => 'ELECTRONICS TRAINING',
      'title' => 'Electronics Lab Trainers',
      'subtitle' => 'Electrical Engineering Solutions',
      'text' => 'ATICO is a pioneer in manufacturing educational trainer kits. Analog & Digital Lab Trainer | Electrical Machine Trainer | Power Electronics Trainer | Basic Electricity Trainer | Embedded Trainer | PLC Trainer | Process Control Trainer',
      'link' => url('/category/educational-trainers'),
    ],
    [
      'image' => asset('assets/images/export-slides/Image8.webp'),
      'eyebrow' => 'TECHNICAL TRAINING',
      'title' => 'Technical Training Equipments',
      'subtitle' => 'Engineering Lab Solutions',
      'text' => 'FLUID MECHANICS – CHEMICAL ENGINEERING – HEAT TRANSFER LAB – THERMAL ENGINEERING – HVAC – HYDRAULICS – AEROSPACE – AGRICULTURE – ENVIRONMENTAL – MARINE',
      'link' => url('/category/engineering-lab-equipment'),
    ],
  ];

  $countries = ['Afghanistan','Albania','Algeria','Australia','Bahrain','Bangladesh','Belgium','Brazil','Canada','Egypt','Ghana','India','Indonesia','Kenya','Malaysia','Nigeria','Qatar','Saudi Arabia','South Africa','UAE','UK','USA','Zambia'];
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
        <a class="ae-cta" href="{{ url('/category/pharmacy-lab-equipment') }}">View Medical Range →</a></div>
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
        <a style="color: #fff; text-decoration: none; font-weight: 600; font-size: 15px;" href="{{ url('/category/civil-engineering-instruments') }}">View Engineering Labs →</a>
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
        <a class="ae-cta" href="{{ url('/category/educational-lab-equipment') }}">View Educational Lab Equipments Range →</a>
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
        <a style="color: #fff; text-decoration: none; font-weight: 600; font-size: 15px;" href="{{ url('/category/testing-lab-machines') }}">View Engineering Lab Equipment →</a>
      </div>
    </div>
    <div class="ae-solution">
      <img src="{{ asset('assets/images/export-slides/labimg.webp') }}" alt="Educational scientific instruments" loading="lazy">
      <div class="span_bold">
        <h6>Educational Lab Equipment</h6>
        <h3>Schools and Science College Lab Equipment</h3>
        <p>We are a <span class="font-bold">INDIA based</span> school science equipment company. We supply <span class="font-bold">high quality
         and affordable</span> <span class="font-bold">laboratory equipment</span> to schools, colleges, industry &amp; individuals.</p>
        <a class="ae-cta" href="{{ url('/category/educational-lab-equipment') }}">View Educational Lab Equipments Range →</a>
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
          <a class="ae-pcard" href="{{ route('categories', $group->route) }}">
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
          <a class="ae-pcard" href="{{ route('categories', $cat->slug) }}">
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

    @if($products->count())
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
@endif

<section class="ae-stats">
  <div class="ae-container">
    <div class="ae-stats-grid">
      <div><strong>15000+</strong><span>Products</span></div>
      <div><strong>300+</strong><span>Clients</span></div>
      <div><strong>40+</strong><span>Turnkey Projects</span></div>
      <div><strong>35+</strong><span>Countries</span></div>
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

<section class="ae-section" style="background:#f9fafb;">
  <div class="ae-container">
    <h2 class="ae-title text-center">We Serve 35+ Countries</h2>
    <p class="text-center mb-4" style="color:#6b7280;">Atico exports laboratory equipment and scientific instruments globally</p>
    <div class="ae-countries mb-4">
      <div class="ae-countries-track">
        @foreach(array_merge($countries, $countries) as $country)
          <span>{{ $country }}</span>
        @endforeach
      </div>
    </div>
    <div class="ae-feature-row">
      <div class="ae-feature"><h4>Worldwide Shipping</h4><p>Shipping costs depend on consignment size. Contact us for details.</p></div>
      <div class="ae-feature"><h4>Bulk Orders</h4><p>Special discounts available on bulk orders worldwide.</p></div>
      <div class="ae-feature"><h4>Best Quality</h4><p>High-quality products at competitive prices.</p></div>
      <div class="ae-feature"><h4>Secure Payments</h4><p>Wire Transfer, TT, Letter of Credit, PayPal and more.</p></div>
    </div>
  </div>
</section>

<section class="ae-section">
  <div class="ae-container">
    <h2 class="ae-title text-center">Client Testimonies &amp; Success</h2>
    <p class="text-center mb-4" style="color:#6b7280;">Hear from our valued clients about their experience working with us</p>
    <div class="row g-3">
      <div class="col-md-4">
        <div class="ae-testimonial">
          <p>“We had a good experience with the stirrer machine, and the glassware quality was excellent. The products met our operational and quality expectations.”</p>
          <h5>Nur Mohammed</h5>
          <small>Procurement Partner, Top Lab Solution, Malaysia</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ae-testimonial">
          <p>“We have been working with Atico for more than 20 years. After visiting their manufacturing facility, I am confident about our continued collaboration.”</p>
          <h5>Jacob</h5>
          <small>Business Partner, Chemical and Glassware (Pty) Ltd, South Africa</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ae-testimonial">
          <p>“Atico is a reliable supplier for school science laboratory equipment. Their products are suitable for educational institutions and meet required standards.”</p>
          <h5>Mohammed Al Hussaini</h5>
          <small>Education Supplies Consultant, Qatar</small>
        </div>
      </div>
    </div>
  </div>
</section>

@if($faqs->count())
<section class="ae-section ae-faq" style="background:#f9fafb;">
  <div class="ae-container" style="max-width:860px;">
    <h2 class="ae-title text-center">Frequently Asked <span>Questions about Atico</span></h2>
    <div class="accordion" id="aeFaq">
      @foreach($faqs->take(5) as $index => $faq)
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading{{ $faq->id }}">
            <button class="accordion-button {{ $index ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $faq->id }}">
              {{ $faq->name }}
            </button>
          </h2>
          <div id="faqCollapse{{ $faq->id }}" class="accordion-collapse collapse {{ $index ? '' : 'show' }}" data-bs-parent="#aeFaq">
            <div class="accordion-body">{!! $faq->description !!}</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endif

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
  if (!slider) return;
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
})();
</script>
@endpush
@endsection
