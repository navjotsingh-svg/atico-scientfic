@extends('frontend.layouts.app')
@section('content')

@php
    $productCats = getProductCats($product->id);
    $leafCats = collect($productCats)->filter(fn ($c) => (int) $c->parent_id !== 0);
    $displayCats = $leafCats->isNotEmpty() ? $leafCats : collect($productCats);
    $breadcrumbCats = getProductBreadcrumbCategories($product->id);
    $visibleBreadcrumbCats = count($breadcrumbCats) > 3 ? array_slice($breadcrumbCats, -3) : $breadcrumbCats;
    $breadcrumbCollapsed = count($breadcrumbCats) > 3;
    $breadcrumbProductName = \Illuminate\Support\Str::limit(strip_tags($product->name), 45);
    $descPlain = strip_tags((string) $product->description);
    $descPreview = \Illuminate\Support\Str::limit($descPlain, 220);
    $hasLongDesc = strlen($descPlain) > 220;
@endphp

<section class="ae-page ae-pdp-page">
    <div class="ae-page-inner">
        <nav class="ae-crumb ae-crumb-pdp" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span class="ae-crumb-sep">/</span>
            <a href="{{ route('products.index') }}">Our Products</a>
            @if($breadcrumbCollapsed)
                <span class="ae-crumb-sep">/</span>
                <span class="ae-crumb-ellipsis" aria-hidden="true">…</span>
            @endif
            @foreach($visibleBreadcrumbCats as $crumbCat)
                <span class="ae-crumb-sep">/</span>
                <a href="{{ route('categories', $crumbCat->slug) }}">{!! \Illuminate\Support\Str::limit(strip_tags($crumbCat->name), 30) !!}</a>
            @endforeach
            <span class="ae-crumb-sep">/</span>
            <span class="ae-crumb-current" title="{!! strip_tags($product->name) !!}">{!! $breadcrumbProductName !!}</span>
        </nav>

        <div class="ae-pdp-hero">
            <div class="ae-pdp">
                <div class="ae-pdp-gallery">
                    <div class="ae-pdp-media">
                        <img
                            src="{{ asset($product->image ? 'uploads/product_images/'.$product->image : 'assets/frontend/images/no_product.png') }}"
                            alt="{!! strip_tags($product->name) !!}"
                            fetchpriority="high"
                            decoding="async"
                            onerror="this.onerror=null;this.src='{{ asset('assets/frontend/images/no_product.png') }}';"
                        >
                    </div>
                </div>

                <div class="ae-pdp-info">
                    <div class="ae-pdp-head">
                        <div class="ae-pdp-tags">
                            <span class="ae-pdp-tag is-primary">Manufacturer Direct</span>
                            @foreach($displayCats as $cat)
                                <a class="ae-pdp-tag" href="{{ route('categories', $cat->slug) }}">{!! $cat->name !!}</a>
                            @endforeach
                        </div>

                        <h1 class="ae-pdp-title">{!! $product->name !!}</h1>

                        @if(!empty($product['product_code']))
                            <p class="ae-pdp-code">
                                <span class="ae-pdp-code-label">Product Code</span>
                                <strong class="ae-pdp-code-value">{!! $product['product_code'] !!}</strong>
                            </p>
                        @endif
                    </div>

                    <div class="ae-pdp-notice">
                        <p>Available for <strong>bulk tender supply</strong>, exports &amp; turnkey lab projects worldwide.</p>
                    </div>

                    <div class="ae-pdp-highlights">
                        <div class="ae-pdp-highlight">
                            <span class="ae-pdp-highlight-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M20 7H4V5l2-2h12l2 2v2zm0 2H4v11h16V9zM8 11h8v2H8v-2z" fill="currentColor"/></svg>
                            </span>
                            <div class="ae-pdp-highlight-text">
                                <strong>Bulk Supply</strong>
                                <span>Tender &amp; export ready</span>
                            </div>
                        </div>
                        <div class="ae-pdp-highlight">
                            <span class="ae-pdp-highlight-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" fill="currentColor"/></svg>
                            </span>
                            <div class="ae-pdp-highlight-text">
                                <strong>90+ Countries</strong>
                                <span>Worldwide exports</span>
                            </div>
                        </div>
                        <div class="ae-pdp-highlight">
                            <span class="ae-pdp-highlight-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z" fill="currentColor"/></svg>
                            </span>
                            <div class="ae-pdp-highlight-text">
                                <strong>24-Hour Quote</strong>
                                <span>Fast BOQ response</span>
                            </div>
                        </div>
                    </div>

                    @if($descPreview)
                        <div class="ae-pdp-summary" id="aePdpSummary">
                            <h2>Product Description</h2>
                            <p class="ae-pdp-summary-text">{!! $descPreview !!}@if($hasLongDesc)<span class="ae-pdp-ellipsis">…</span>@endif</p>
                            @if($hasLongDesc)
                                <button type="button" class="ae-pdp-readmore" data-ae-readmore>Read More</button>
                            @endif
                        </div>
                    @endif

                    <div class="ae-pdp-actions">
                        <button type="button" class="ae-btn-quote ae-btn-quote-lg" data-bs-toggle="modal" data-bs-target="#query">
                            Enquire Now
                        </button>
                        <a class="ae-btn-outline ae-btn-outline-lg" href="{{ url('/contact-us') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ae-pdp-spec ae-panel-card" id="description">
            <h2>Tender Specification Details for Bulk Supplies</h2>
            <div class="body ae-pdp-spec-body">{!! $product->description !!}</div>
        </div>

        <div class="ae-pdp-bulk-cta">
            <div class="ae-pdp-bulk-copy">
                <span class="ae-pdp-bulk-kicker">Bulk Tender Specialists</span>
                <h3>Bulk Order of {!! $product->name !!}?</h3>
                <p>Send us your tender BOQ — we'll respond with a fully compliant manufacturer quote within 24 hours. Trusted by institutional &amp; government buyers worldwide.</p>
            </div>
            <button type="button" class="ae-btn-quote ae-btn-quote-lg ae-btn-quote-white" data-bs-toggle="modal" data-bs-target="#query">Get Tender Quote</button>
        </div>

        @php $related = getRelatedProducts($product->id); @endphp
        @if(count($related) > 0)
            <div class="ae-related-section">
                <h2 class="ae-related-title" id="related">Related Lab Equipments</h2>
                <p class="ae-related-lead">Explore more scientific and educational laboratory equipment from Atico Scientific — trusted manufacturer and exporter for schools, colleges, and research institutions.</p>
                <div class="ae-card-grid is-3">
                    @foreach($related as $related_product)
                        @if((int) $related_product->id === (int) $product->id)
                            @continue
                        @endif
                        <a class="ae-pcard" href="{{ route('product_detail', $related_product->slug) }}">
                            <div class="ae-pcard-media">
                                <img
                                    src="{{ asset($related_product->image ? 'uploads/product_images/'.$related_product->image : 'assets/frontend/images/no_product.png') }}"
                                    alt="{!! strip_tags($related_product->name) !!}"
                                    loading="lazy"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/frontend/images/no_product.png') }}';"
                                >
                            </div>
                            <div class="ae-pcard-body">
                                <div class="ae-pcard-title">{!! $related_product->name !!}</div>
                                <!-- <span class="ae-pcard-cta">View Product</span> -->
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

<div class="modal fade ae-quote-modal" id="query" tabindex="-1" aria-labelledby="aeQuoteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content ae-quote-content">
            <button type="button" class="ae-quote-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>

            <div class="ae-quote-layout">
                <aside class="ae-quote-aside">
                    <p class="ae-quote-kicker">Request a Quote</p>
                    <h2 id="aeQuoteTitle">Get pricing for this product</h2>
                    <p class="ae-quote-copy">Share your requirements and our team will respond with a quotation shortly.</p>

                    <div class="ae-quote-product">
                        <img
                            src="{{ asset($product->image ? 'uploads/product_images/'.$product->image : 'assets/frontend/images/no_product.png') }}"
                            alt="{!! strip_tags($product->name) !!}"
                            onerror="this.onerror=null;this.src='{{ asset('assets/frontend/images/no_product.png') }}';"
                        >
                        <div>
                            <strong>{!! $product->name !!}</strong>
                            @if(!empty($product['product_code']))
                                <span>Code: {!! $product['product_code'] !!}</span>
                            @endif
                        </div>
                    </div>

                    <ul class="ae-quote-points">
                        <li>Fast response from sales team</li>
                        <li>Export packaging &amp; documentation support</li>
                        <li>Bulk and tender quotations available</li>
                    </ul>
                </aside>

                <div class="ae-quote-form-wrap">
                    <form class="ae-quote-form" enctype="multipart/form-data" action="{{ route('product_query.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="ae-quote-grid">
                            <label class="ae-quote-field">
                                <span>Full Name *</span>
                                <input type="text" name="name" required maxlength="120" value="{{ old('name') }}" placeholder="Your name" autocomplete="name">
                                @error('name') <em>{{ $message }}</em> @enderror
                            </label>

                            <label class="ae-quote-field">
                                <span>Email *</span>
                                <input type="email" name="email" required maxlength="150" value="{{ old('email') }}" placeholder="you@company.com" autocomplete="email">
                                @error('email') <em>{{ $message }}</em> @enderror
                            </label>

                            <label class="ae-quote-field">
                                <span>Country *</span>
                                <select name="country" required>
                                    <option value="">Select Country</option>
                                    @foreach(getCountries() as $country)
                                        <option value="{!! $country->name !!}" @selected(old('country') == $country->name)>{!! $country->name !!}</option>
                                    @endforeach
                                </select>
                                @error('country') <em>{{ $message }}</em> @enderror
                            </label>

                            <label class="ae-quote-field">
                                <span>Phone Number *</span>
                                <input type="tel" name="phone_number" required maxlength="40" value="{{ old('phone_number') }}" placeholder="Mobile number" autocomplete="tel">
                                @error('phone_number') <em>{{ $message }}</em> @enderror
                            </label>

                            <label class="ae-quote-field">
                                <span>Quantity *</span>
                                <input type="number" min="1" name="quantity" required value="{{ old('quantity', 1) }}" placeholder="1">
                                @error('quantity') <em>{{ $message }}</em> @enderror
                            </label>

                            <label class="ae-quote-field ae-quote-field-full">
                                <span>Message *</span>
                                <textarea name="message" id="message" required rows="4" maxlength="5000" placeholder="Tell us quantity, destination, and any specifications…">{{ old('message') }}</textarea>
                                @error('message') <em>{{ $message }}</em> @enderror
                            </label>

                            <label class="ae-quote-field ae-quote-field-full">
                                <span>Attachment <i>(optional)</i></span>
                                <input type="file" name="file_name" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png,.webp">
                            </label>
                        </div>

                        <div class="ae-quote-captcha">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                        </div>

                        <button class="ae-quote-submit" type="submit">Submit Quote Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="successModal" class="modal fade ae-success-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ae-success-content">
            <div class="ae-success-icon" aria-hidden="true">✓</div>
            <h4 class="modal-title">Thank you!</h4>
            <p class="mb-0" id="modal_success_message">Your quote request has been received.</p>
            <button class="ae-quote-submit ae-success-ok" type="button" data-bs-dismiss="modal">OK</button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
(function () {
  function ready(fn) {
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', fn);
    else fn();
  }

  ready(function () {
    var quoteModal = document.getElementById('query');
    var captchaLoaded = false;

    function loadCaptcha() {
      if (captchaLoaded || document.querySelector('script[data-ae-recaptcha]')) {
        captchaLoaded = true;
        return;
      }
      captchaLoaded = true;
      var s = document.createElement('script');
      s.src = 'https://www.google.com/recaptcha/api.js';
      s.async = true;
      s.defer = true;
      s.setAttribute('data-ae-recaptcha', '1');
      document.body.appendChild(s);
    }

    function showModal(id) {
      var el = document.getElementById(id);
      if (!el || !window.bootstrap || !bootstrap.Modal) return;
      bootstrap.Modal.getOrCreateInstance(el).show();
    }

    if (quoteModal) {
      quoteModal.addEventListener('show.bs.modal', loadCaptcha);
    }

    var readMoreBtn = document.querySelector('[data-ae-readmore]');
    if (readMoreBtn) {
      readMoreBtn.addEventListener('click', function () {
        var spec = document.getElementById('description');
        if (spec) {
          spec.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    }

    @if ($errors->any())
      loadCaptcha();
      showModal('query');
    @endif

    @if (Session::has('success'))
      var msg = @json(Session::get('success'));
      var box = document.getElementById('modal_success_message');
      if (box) box.textContent = msg;
      showModal('successModal');
    @endif
  });
})();
</script>
@endsection
