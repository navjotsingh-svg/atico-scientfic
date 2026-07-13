@extends('frontend.layouts.app')
@section('content')
@php
  $sectors = [
    'Life Sciences', 'Chemical', 'Petrochemical', 'Semiconductor', 'Pharmaceutical',
    'Environmental', 'Biotechnology', 'Food & Beverage', 'Agriculture', 'Energy',
  ];

  $civilPoints = [
    'Soil mechanics and foundation evaluation',
    'Concrete technology and strength testing',
    'Aggregate classification and quality checks',
    'Cement testing and consistency assessment',
    'Bitumen and pavement material analysis',
    'Structural and construction material studies',
  ];

  $mechPoints = [
    'Strength of materials and load testing',
    'Fluid mechanics and flow analysis',
    'Thermodynamics and heat transfer setups',
    'Machine design and mechanism models',
    'Manufacturing process and workshop practice',
    'Mechanical measurement and instrumentation',
  ];

  $audiences = [
    'Primary & secondary schools',
    'Senior secondary institutions',
    'Engineering colleges',
    'Polytechnics & ITIs',
    'Universities',
    'Research laboratories',
    'Vocational training centres',
    'Skill development institutes',
    'Technical training facilities',
    'Hospital & medical colleges',
  ];

  $reasons = [
    ['title' => 'Broad catalogue', 'text' => 'School science, STEM kits, engineering trainers, testing machines and medical teaching aids from one partner.'],
    ['title' => 'ISO-aligned production', 'text' => 'Manufacturing systems focused on consistency, documentation and export-ready quality.'],
    ['title' => 'Tender experience', 'text' => 'Support for MOE, TVET and donor-funded laboratory packages with compliance-ready responses.'],
    ['title' => 'Custom & OEM options', 'text' => 'Private-label and specification-driven builds for distributors and institutional projects.'],
    ['title' => 'Export logistics', 'text' => 'Secure packing, shipping documents and coordinated delivery for multi-lot consignments.'],
    ['title' => 'Long-term value', 'text' => 'Durable designs intended for years of classroom and laboratory use, not one-off demos.'],
  ];
@endphp

<section class="ab-hero">
  <div class="ab-hero-bg" style="background-image:url('{{ asset('assets/images/export-slides/Image2.webp') }}')"></div>
  <div class="ab-hero-shade"></div>
  <div class="ab-wrap ab-hero-inner">
    <nav class="ab-crumb" aria-label="Breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>About Us</span>
    </nav>
    <p class="ab-kicker">Manufacturer · Exporter · Since 1954</p>
    <h1>About Atico Scientific</h1>
    <p class="ab-lead">
      Building practical laboratory capability for schools, colleges, research labs and vocational institutes — with equipment designed for real teaching, testing and training.
    </p>
  </div>
</section>

<section class="ab-section">
  <div class="ab-wrap ab-intro">
    <div>
      <p class="ab-eyebrow">Who We Are</p>
      <h2>Laboratory equipment crafted for learning and industry</h2>
      <p>
        Scientific instrumentation underpins modern education and technological progress. At <strong>Atico Scientific</strong>, we manufacture and export laboratory equipment that helps institutions move from theory to confident practice — from foundational school science kits to advanced engineering and testing systems.
      </p>
      <p>
        Established in <strong>1954</strong> and based in Ambala, Haryana, we serve schools, universities, hospitals, research centres and TVET programmes across <strong>35+ countries</strong>. Our focus is clear: reliable instruments, curriculum-aligned ranges and export-ready project supply.
      </p>
      <p>
        Whether you need a complete school science lab, a civil testing suite or didactic trainers for polytechnic workshops, we work as a single manufacturing partner that values durability, clarity and long-term support.
      </p>
      <div class="ab-stat-row">
        <div><strong>1954</strong><span>Established</span></div>
        <div><strong>15000+</strong><span>Products</span></div>
        <div><strong>35+</strong><span>Countries</span></div>
        <div><strong>ISO</strong><span>Aligned Systems</span></div>
      </div>
    </div>
    <div class="ab-intro-media">
      <img src="{{ asset('assets/images/about-us1.jpg') }}" alt="Atico Scientific laboratory manufacturing" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('assets/images/export-slides/Image1.webp') }}';">
      <img src="{{ asset('assets/images/about-us2.jpg') }}" alt="Educational and scientific lab equipment" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('assets/images/export-slides/Image5.webp') }}';">
    </div>
  </div>
</section>

<section class="ab-sectors">
  <div class="ab-wrap">
    <p class="ab-eyebrow is-center">Application Domains</p>
    <h2 class="ab-center-title">Industries &amp; disciplines we support</h2>
    <div class="ab-sector-grid">
      @foreach($sectors as $sector)
        <div class="ab-sector">{{ $sector }}</div>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-banner">
  <div class="ab-wrap">
    <h2>Precision for laboratories. Clarity for classrooms. Confidence for institutions.</h2>
    <p>
      Testing instruments · Medical &amp; hospital teaching aids · School science equipment · Educational STEM kits · Engineering trainers · Scientific labware
    </p>
  </div>
</section>

<section class="ab-section ab-muted">
  <div class="ab-wrap">
    <div class="ab-split">
      <div>
        <p class="ab-eyebrow">Engineering Foundations</p>
        <h2>Civil &amp; mechanical testing laboratories</h2>
        <p>
          Civil and mechanical labs help students and engineers understand materials, structures, energy systems and manufacturing behaviour. Atico supplies practical setups that make these concepts measurable and repeatable in teaching and quality environments.
        </p>
      </div>
      <div class="ab-two-lists">
        <div>
          <h3>Civil testing focus</h3>
          <ul>
            @foreach($civilPoints as $point)
              <li>{{ $point }}</li>
            @endforeach
          </ul>
        </div>
        <div>
          <h3>Mechanical lab focus</h3>
          <ul>
            @foreach($mechPoints as $point)
              <li>{{ $point }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ab-section">
  <div class="ab-wrap ab-feature">
    <div class="ab-feature-copy">
      <p class="ab-eyebrow">School · STEM · Science</p>
      <h2>Strengthening scientific education through practical labs</h2>
      <p>
        Every meaningful experiment begins with a well-equipped laboratory. We design school and college science equipment so learners can explore physics, chemistry and biology with clarity and safety — turning abstract lessons into lasting understanding.
      </p>
      <p>
        From microscopes and glassware to STEM kits and teaching models, our educational range is built for curriculum use, classroom durability and confident instructor workflows.
      </p>
      <a class="ab-link" href="{{ route('products.index') }}">Explore educational ranges →</a>
    </div>
    <div class="ab-feature-card">
      <img src="{{ asset('assets/images/export-slides/Image4.webp') }}" alt="School science and STEM laboratory equipment" loading="lazy">
      <div>
        <h3>Hands-on learning first</h3>
        <p>Equipment intended for daily lab periods — not display shelves — with practical packaging for institutional supply.</p>
      </div>
    </div>
  </div>
</section>

<section class="ab-section ab-muted">
  <div class="ab-wrap ab-vision">
    <div>
      <p class="ab-eyebrow">Our Direction</p>
      <h2>A vision rooted in education, quality and long-term impact</h2>
      <p>
        Curricula evolve. Teaching methods change. Laboratory infrastructure must keep pace. We aim to support modern education with equipment that stays accurate, durable, safe and ready for tomorrow’s learning models.
      </p>
    </div>
    <ul class="ab-pillars">
      <li><strong>Accurate</strong> results educators can trust</li>
      <li><strong>Durable</strong> builds for busy laboratories</li>
      <li><strong>Safe</strong> designs for student environments</li>
      <li><strong>Curriculum-aligned</strong> experiment coverage</li>
      <li><strong>Future-ready</strong> modular and upgradeable setups</li>
      <li><strong>Real-world</strong> skill and training focus</li>
    </ul>
  </div>
</section>

<section class="ab-section">
  <div class="ab-wrap">
    <div class="ab-head">
      <p class="ab-eyebrow">Who We Serve</p>
      <h2>A manufacturing partner for institutions at every stage</h2>
      <p>Complete laboratory sourcing from one Ambala-based manufacturer — reducing fragmentation and keeping quality consistent across packages.</p>
    </div>
    <div class="ab-audience-grid">
      @foreach($audiences as $item)
        <div class="ab-audience">{{ $item }}</div>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-section ab-muted">
  <div class="ab-wrap">
    <div class="ab-head">
      <p class="ab-eyebrow">What We Manufacture</p>
      <h2>Four pillars of our laboratory catalogue</h2>
    </div>
    <div class="ab-range-grid">
      <article class="ab-range">
        <h3>School science laboratories</h3>
        <ul>
          <li>Physics, chemistry &amp; biology instruments</li>
          <li>Glassware, plasticware &amp; general labware</li>
          <li>Microscopes, slides &amp; optics aids</li>
          <li>Anatomy models, charts &amp; kits</li>
        </ul>
        <a href="{{ route('products.index') }}">View range →</a>
      </article>
      <article class="ab-range">
        <h3>Engineering &amp; technical labs</h3>
        <ul>
          <li>Mechanical, civil &amp; electrical trainers</li>
          <li>Fluid mechanics &amp; heat transfer systems</li>
          <li>Electronics, PLC &amp; process control</li>
          <li>CNC educational and workshop machines</li>
        </ul>
        <a href="{{ route('products.index') }}">View range →</a>
      </article>
      <article class="ab-range">
        <h3>Vocational &amp; TVET training</h3>
        <ul>
          <li>Workshop and industrial skill setups</li>
          <li>Automotive and electrical installation trainers</li>
          <li>Welding, plumbing &amp; tool-room practice</li>
          <li>Didactic systems for job-ready learning</li>
        </ul>
        <a href="{{ route('products.index') }}">View range →</a>
      </article>
      <article class="ab-range">
        <h3>Testing &amp; research instruments</h3>
        <ul>
          <li>Material, soil, cement &amp; concrete testing</li>
          <li>Bitumen, aggregate &amp; NDT-related tools</li>
          <li>Analytical and measurement instruments</li>
          <li>Research lab furniture &amp; utilities</li>
        </ul>
        <a href="{{ route('products.index') }}">View range →</a>
      </article>
    </div>
  </div>
</section>

<section class="ab-section">
  <div class="ab-wrap ab-process">
    <div>
      <p class="ab-eyebrow">How We Build</p>
      <h2>Manufacturing excellence with disciplined process</h2>
      <p>
        Every instrument leaves our facility through controlled stages — material selection, fabrication, assembly, inspection and packing — so performance remains consistent after years of classroom and laboratory use.
      </p>
    </div>
    <div class="ab-process-grid">
      <div><span>01</span><h3>Precision engineering</h3><p>Designs refined for teaching clarity and repeatable results.</p></div>
      <div><span>02</span><h3>Skilled workmanship</h3><p>Experienced production teams across Ambala manufacturing units.</p></div>
      <div><span>03</span><h3>Quality checkpoints</h3><p>Dimensional, functional and safety checks before dispatch.</p></div>
      <div><span>04</span><h3>Export packing</h3><p>Protected consignments with documentation for international buyers.</p></div>
    </div>
  </div>
</section>

<section class="ab-section ab-muted">
  <div class="ab-wrap ab-two-col">
    <div>
      <p class="ab-eyebrow">Assurance</p>
      <h2>Quality institutions can rely on</h2>
      <p>
        Quality is a system — not a slogan. Our internal protocols emphasise dimensional accuracy, functional performance, structural strength, electrical and mechanical safety, and practical day-to-day usability for educators and technicians.
      </p>
      <ul class="ab-check-list">
        <li>ISO-aligned manufacturing approach</li>
        <li>Standards awareness (ASTM, IS, BIS, ISO where applicable)</li>
        <li>In-house R&amp;D and continuous product refinement</li>
        <li>Reliable after-sales communication</li>
      </ul>
    </div>
    <div>
      <p class="ab-eyebrow">Projects</p>
      <h2>Turnkey laboratory capability</h2>
      <p>
        Beyond individual instruments, we support complete laboratory packages — from equipment mapping against tender schedules to coordinated bulk supply for new campuses and institutional upgrades.
      </p>
      <ul class="ab-check-list">
        <li>Lab planning input and equipment selection</li>
        <li>Customisation for curriculum or tender specs</li>
        <li>Bulk supply and shipment coordination</li>
        <li>Installation guidance and documentation support</li>
      </ul>
      <a class="ab-link" href="{{ url('/lab-tenders') }}">Learn about tender supply →</a>
    </div>
  </div>
</section>

<section class="ab-section">
  <div class="ab-wrap">
    <div class="ab-head">
      <p class="ab-eyebrow">Why Buyers Choose Atico</p>
      <h2>More than equipment — a dependable supply partnership</h2>
    </div>
    <div class="ab-reason-grid">
      @foreach($reasons as $reason)
        <article class="ab-reason">
          <h3>{{ $reason['title'] }}</h3>
          <p>{{ $reason['text'] }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="ab-closing">
  <div class="ab-wrap ab-closing-inner">
    <div>
      <h2>Tools that help shape tomorrow’s scientists, engineers and innovators</h2>
      <p>
        As education systems modernise, Atico Scientific continues to expand ranges, refine manufacturing and support partners who need practical laboratory solutions — in India and worldwide.
      </p>
    </div>
    <div class="ab-closing-actions">
      <a class="ab-btn ab-btn-primary" href="{{ url('/contact-us') }}">Talk to Our Team</a>
      <a class="ab-btn ab-btn-ghost" href="{{ route('products.index') }}">Browse Products</a>
    </div>
  </div>
</section>
@endsection
