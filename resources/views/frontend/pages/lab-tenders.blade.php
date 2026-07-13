@extends('frontend.layouts.app')
@section('content')
@php
  $tenderStats = [
    ['value' => '15000+', 'label' => 'Catalogue Products'],
    ['value' => '35+', 'label' => 'Countries Served'],
    ['value' => '40+', 'label' => 'Turnkey Labs'],
    ['value' => '100%', 'label' => 'Export Ready'],
  ];

  $supportSteps = [
    [
      'num' => '01',
      'title' => 'Bid Pack & Compliance',
      'text' => 'Technical datasheets, compliance matrices and competitive pricing aligned to MOE and donor tender specifications.',
    ],
    [
      'num' => '02',
      'title' => 'ISO Manufacturing',
      'text' => 'In-house production of scientific, educational and engineering lab equipment under ISO-aligned quality systems.',
    ],
    [
      'num' => '03',
      'title' => 'Export Logistics',
      'text' => 'Secure packaging, shipping documents and delivery schedules for multi-lot tender consignments worldwide.',
    ],
    [
      'num' => '04',
      'title' => 'Commissioning Support',
      'text' => 'Optional installation guidance, commissioning checklists and operator orientation for complete laboratory setups.',
    ],
  ];

  $programs = [
    ['title' => 'World Bank Projects', 'text' => 'Education and skills-lab packages for World Bank–financed school and TVET upgrades.'],
    ['title' => 'African Development Bank', 'text' => 'Technical and vocational laboratory lots for AfDB-supported infrastructure programmes.'],
    ['title' => 'Asian Development Bank', 'text' => 'Science and engineering lab modernisation packages for ADB education projects.'],
    ['title' => 'Ministry of Education', 'text' => 'National MOE / STEM school lab tenders with curriculum-aligned equipment lists.'],
    ['title' => 'TVET & Skills Bodies', 'text' => 'Workshop trainers, didactic systems and tools for polytechnics and skills councils.'],
    ['title' => 'Health & Research Labs', 'text' => 'Ministry of Health and research institution tenders for clinical and analytical setups.'],
  ];

  $regions = [
    ['title' => 'Africa', 'text' => 'Nigeria, Kenya, Ghana, Tanzania, Ethiopia, Uganda, Rwanda and more'],
    ['title' => 'Middle East', 'text' => 'UAE, Saudi Arabia, Qatar, Oman, Kuwait and the wider GCC'],
    ['title' => 'South & SE Asia', 'text' => 'Bangladesh, Sri Lanka, Nepal, Bhutan, Myanmar, Philippines'],
    ['title' => 'Central Asia', 'text' => 'Uzbekistan, Kazakhstan, Tajikistan and neighbouring markets'],
    ['title' => 'Americas & Caribbean', 'text' => 'Project-based supply to Guyana, Jamaica, Trinidad and partners'],
    ['title' => 'Europe & Others', 'text' => 'Custom export lots for ministries, NGOs and institutional buyers'],
  ];

  $tenderFaqs = [
    [
      'q' => 'Can Atico supply against international education tenders?',
      'a' => 'Yes. We manufacture and export laboratory equipment for Ministry of Education, TVET and donor-funded tenders across Asia, Africa, the Middle East and beyond.',
    ],
    [
      'q' => 'Which funding programmes can you support?',
      'a' => 'We regularly support packages linked to World Bank, AfDB, ADB and national Ministry of Education / Vocational Training tenders, including technical documentation for bid packs.',
    ],
    [
      'q' => 'Do you offer turnkey laboratory delivery?',
      'a' => 'Yes. Depending on the contract, scope can include supply, export packing, documentation, installation guidance, commissioning support and basic operator orientation.',
    ],
    [
      'q' => 'What equipment ranges are covered for tenders?',
      'a' => 'Our catalogue covers school science, STEM kits, physics, chemistry, biology, microscopes, civil and mechanical engineering, electrical trainers, medical teaching aids and general labware.',
    ],
    [
      'q' => 'How do buyers request a tender quotation?',
      'a' => 'Share your tender notice, bill of quantities or technical schedule with our team. We reply with compliance mapping, pricing and indicative delivery timelines.',
    ],
  ];

  $catalogues = [
    [
      'title' => 'Physics & Applied Science',
      'link' => route('products.index'),
      'items' => ['Dynamics kits', 'Optics benches', 'Force tables', 'Wave apparatus', 'Density kits', 'Energy experiments', 'Prism sets', 'Laser optics'],
    ],
    [
      'title' => 'Chemistry & Glassware',
      'link' => route('products.index'),
      'items' => ['Burettes & pipettes', 'Boiling flasks', 'Beakers & cylinders', 'pH meters', 'Wash bottles', 'Funnel sets', 'Storage vials', 'Titration kits'],
    ],
    [
      'title' => 'Biology & Life Sciences',
      'link' => route('products.index'),
      'items' => ['Anatomy models', 'Dissection sets', 'Botany charts', 'Specimen jars', 'Cell models', 'Molecular kits', 'Zoology charts', 'Prepared slides'],
    ],
    [
      'title' => 'Microscopes & Optics',
      'link' => route('products.index'),
      'items' => ['Student microscopes', 'Binocular scopes', 'Prepared slides', 'Magnifiers', 'Slide boxes', 'Microscope lamps', 'Stereo viewers', 'Optical kits'],
    ],
    [
      'title' => 'Civil & Materials Testing',
      'link' => route('products.index'),
      'items' => ['Soil test kits', 'Concrete lab', 'Cement testers', 'Survey gear', 'Hydraulic benches', 'Aggregate tests', 'Bitumen kits', 'Geotech gauges'],
    ],
    [
      'title' => 'Mechanical & Workshop',
      'link' => route('products.index'),
      'items' => ['Lathe trainers', 'CNC educational mills', 'TOM models', 'Pneumatic trainers', 'Welding labs', 'IC engine setups', 'Gear models', 'Workshop tools'],
    ],
    [
      'title' => 'Electrical & Electronics',
      'link' => route('products.index'),
      'items' => ['Basic electricity kits', 'Power electronics', 'Digital trainers', 'PLC trainers', 'Power supplies', 'Circuit modules', 'Machine trainers', 'Instrumentation'],
    ],
    [
      'title' => 'Medical & Hospital Teaching',
      'link' => route('products.index'),
      'items' => ['Hospital beds', 'Teaching manikins', 'ECG demos', 'Surgical models', 'Infusion demos', 'Pathology aids', 'First-aid trainers', 'Clinical glassware'],
    ],
    [
      'title' => 'TVET & Vocational Trainers',
      'link' => route('products.index'),
      'items' => ['Process control', 'Refrigeration trainers', 'Logic gate kits', 'LAN trainers', 'Mechanisms kits', 'Solar didactic units', 'HVAC trainers', 'Skill boards'],
    ],
    [
      'title' => 'Lab Furniture & Utilities',
      'link' => route('products.index'),
      'items' => ['Work benches', 'Fume hoods', 'Storage cabinets', 'Autoclaves', 'Ovens & incubators', 'Water baths', 'Balances', 'Safety PPE'],
    ],
    [
      'title' => 'Environment & Earth Science',
      'link' => route('products.index'),
      'items' => ['Weather stations', 'Rock & mineral kits', 'GPS teaching sets', 'Fossil packs', 'Soil profiles', 'Solar demos', 'Water quality kits', 'Geology charts'],
    ],
    [
      'title' => 'General Lab Supplies',
      'link' => route('products.index'),
      'items' => ['Hot air ovens', 'Centrifuges', 'Magnetic stirrers', 'Distillation units', 'Muffle furnaces', 'Vacuum pumps', 'Lab trolleys', 'Glassware sets'],
    ],
  ];
@endphp

<section class="lt-hero">
  <div class="lt-hero-bg" style="background-image:url('{{ asset('assets/images/export-slides/Image3.webp') }}')"></div>
  <div class="lt-hero-shade"></div>
  <div class="lt-wrap lt-hero-inner">
    <nav class="lt-crumb" aria-label="Breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>/</span>
      <span>Lab Tenders</span>
    </nav>
    <p class="lt-kicker">MOE · TVET · International Lab Tenders</p>
    <h1>Laboratory Equipment Supply for Education &amp; Global Tenders</h1>
    <p class="lt-lead">
      Atico Scientific manufactures and exports educational, scientific and engineering laboratory equipment for school STEM projects, vocational workshops and internationally funded tenders.
    </p>
    <div class="lt-hero-actions">
      <a class="lt-btn lt-btn-primary" href="{{ url('/contact-us') }}">Request Tender Quote</a>
      <a class="lt-btn lt-btn-ghost" href="#lt-catalogue">Browse Tender Ranges →</a>
    </div>
    <div class="lt-stats">
      @foreach($tenderStats as $stat)
        <div>
          <strong>{{ $stat['value'] }}</strong>
          <span>{{ $stat['label'] }}</span>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="lt-section">
  <div class="lt-wrap lt-intro">
    <div>
      <p class="lt-eyebrow">Ministry &amp; Donor Projects</p>
      <h2>School, STEM &amp; Vocational Lab Tender Supply</h2>
      <p>
        We support Ministry of Education and vocational training tenders with curriculum-ready science kits, physics, chemistry and biology equipment, microscopes, glassware and complete school laboratory packages for elementary through secondary levels.
      </p>
      <p>
        For TVET and polytechnic projects we supply electrical, mechanical, electronics and workshop equipment, plus didactic trainers, automotive teaching systems and classroom furniture. Our team helps partners prepare technical compliance for overseas bids financed by development banks and national education ministries.
      </p>
      <ul class="lt-checks">
        <li>STEM &amp; school science packages</li>
        <li>TVET / polytechnic workshop lots</li>
        <li>Engineering &amp; materials testing labs</li>
        <li>Export documentation for tender lots</li>
      </ul>
    </div>
    <div class="lt-intro-card">
      <img src="{{ asset('assets/images/lab-tenders.png') }}" alt="Laboratory tender equipment" loading="lazy">
      <div class="lt-intro-meta">
        <h3>Trusted export partner</h3>
        <p>ISO-aligned manufacturing from Ambala, India — built for institutional buyers and long-term supply programmes.</p>
      </div>
    </div>
  </div>
</section>

<section class="lt-section lt-muted">
  <div class="lt-wrap">
    <div class="lt-head">
      <p class="lt-eyebrow">End-to-End Tender Support</p>
      <h2>How We Support Global Bidding &amp; Lab Supply</h2>
      <p>From technical compliance to packed consignments, buyers use Atico as a reliable manufacturing partner for laboratory tender lots.</p>
    </div>
    <div class="lt-steps">
      @foreach($supportSteps as $step)
        <article class="lt-step">
          <span class="lt-step-num">{{ $step['num'] }}</span>
          <h3>{{ $step['title'] }}</h3>
          <p>{{ $step['text'] }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="lt-section">
  <div class="lt-wrap">
    <div class="lt-head">
      <p class="lt-eyebrow">Internationally Funded Work</p>
      <h2>Programmes &amp; Tender Types We Supply Against</h2>
      <p>Experience supporting laboratory equipment packages linked to major development and government funding channels.</p>
    </div>
    <div class="lt-program-grid">
      @foreach($programs as $program)
        <article class="lt-program">
          <h3>{{ $program['title'] }}</h3>
          <p>{{ $program['text'] }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="lt-section lt-muted">
  <div class="lt-wrap">
    <div class="lt-head">
      <p class="lt-eyebrow">Trusted Worldwide</p>
      <h2>Regions We Export Tender Lots To</h2>
      <p>Atico ships laboratory equipment for ministries, colleges and project consultants across 35+ countries.</p>
    </div>
    <div class="lt-region-grid">
      @foreach($regions as $region)
        <article class="lt-region">
          <h3>{{ $region['title'] }}</h3>
          <p>{{ $region['text'] }}</p>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="lt-section" id="lt-faq">
  <div class="lt-wrap lt-faq-wrap">
    <div class="lt-head">
      <p class="lt-eyebrow">Buyer FAQs</p>
      <h2>International Tender Buyers — Quick Answers</h2>
    </div>
    <div class="lt-faq-list" id="ltFaqList">
      @foreach($tenderFaqs as $i => $faq)
        <div class="lt-faq-item {{ $i === 0 ? 'is-open' : '' }}">
          <button type="button" class="lt-faq-trigger" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}">
            <span>{{ $faq['q'] }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="lt-faq-panel">
            <p>{{ $faq['a'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="lt-contact-band">
  <div class="lt-wrap lt-contact-grid">
    <div>
      <p class="lt-eyebrow is-light">Atico Scientific — India</p>
      <h2>Tender Correspondence</h2>
      <div class="lt-address-row">
        <div>
          <h4>Head Office</h4>
          <p>#5309, Grain Market,<br>Ambala Cantt, 133001, Haryana, India</p>
        </div>
        <div>
          <h4>Manufacturing</h4>
          <p>274, Sector-II, Industrial Growth Center,<br>HSIIDC, Saha, Haryana, India</p>
        </div>
      </div>
      <p class="lt-contact-line"><a href="mailto:sales@aticoscientific.com">sales@aticoscientific.com</a></p>
      <p class="lt-contact-line"><a href="tel:+919996186555">+91-99961-86555</a> · <a href="tel:+919896783832">+91-98967-83832</a></p>
    </div>
    <div class="lt-contact-actions">
      <a class="lt-btn lt-btn-primary" href="{{ url('/contact-us') }}">Submit Tender Enquiry</a>
      <a class="lt-btn lt-btn-light" href="{{ route('products.index') }}">Complete Product Catalogue</a>
      <a class="lt-btn lt-btn-light" href="{{ url('/engineering-lab-tender') }}">Engineering Lab Tenders</a>
    </div>
  </div>
</section>

<section class="lt-section" id="lt-catalogue">
  <div class="lt-wrap">
    <div class="lt-head">
      <p class="lt-eyebrow">Complete Tender Catalogue</p>
      <h2>Product Lines for Lab Tenders</h2>
      <p>Most-requested categories for school, TVET and engineering tenders — explore each range for the full Atico catalogue.</p>
    </div>
    <div class="lt-cat-grid">
      @foreach($catalogues as $cat)
        <article class="lt-cat-card">
          <h3>{{ $cat['title'] }}</h3>
          <ul>
            @foreach($cat['items'] as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
          <a href="{{ $cat['link'] }}">View full range →</a>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="lt-cta-strip">
  <div class="lt-wrap lt-cta-inner">
    <div>
      <h2>Need a compliance-ready tender quotation?</h2>
      <p>Send your BOQ or tender schedule — our team will map products and return a clear technical response.</p>
    </div>
    <a class="lt-btn lt-btn-primary" href="{{ url('/contact-us') }}">Talk to Tender Desk</a>
  </div>
</section>
@endsection

@section('script')
<script>
(function () {
  var list = document.getElementById('ltFaqList');
  if (!list) return;
  list.addEventListener('click', function (e) {
    var btn = e.target.closest('.lt-faq-trigger');
    if (!btn || !list.contains(btn)) return;
    var item = btn.closest('.lt-faq-item');
    var open = item.classList.contains('is-open');
    Array.prototype.forEach.call(list.querySelectorAll('.lt-faq-item'), function (el) {
      el.classList.remove('is-open');
      var t = el.querySelector('.lt-faq-trigger');
      if (t) t.setAttribute('aria-expanded', 'false');
    });
    if (!open) {
      item.classList.add('is-open');
      btn.setAttribute('aria-expanded', 'true');
    }
  });
})();
</script>
@endsection
