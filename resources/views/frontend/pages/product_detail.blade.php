@extends('frontend.layouts.app')
@section('content')
<style>
.ae-panel-card .body table { width: 100%; border-collapse: collapse; margin: 12px 0; }
.ae-panel-card .body table td,
.ae-panel-card .body table th { border: 1px solid #e6e6e6; padding: 8px; vertical-align: top; }
</style>

<section class="ae-page">
    <div class="ae-page-inner">
        <nav class="ae-crumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <span>{!! $product->name !!}</span>
        </nav>

        <div class="ae-pdp">
            <div>
                <div class="ae-pdp-media">
                    <img
                        src="{{ asset($product->image ? 'uploads/product_images/'.$product->image : 'assets/frontend/images/no_product.png') }}"
                        alt="{!! strip_tags($product->name) !!}"
                        fetchpriority="high"
                        decoding="async"
                        onerror="this.onerror=null;this.src='{{ asset('assets/frontend/images/no_product.png') }}';"
                    >
                </div>
                <div class="ae-pdp-actions">
                    <button type="button" class="ae-btn-quote" data-bs-toggle="modal" data-bs-target="#query">
                        Get Quote
                    </button>
                    <a class="ae-btn-ghost" href="tel:+919996186555">Call Us</a>
                    <p class="ae-help">Need help? <a href="{{ url('/contact-us') }}">Contact our team</a></p>
                </div>
            </div>

            <div class="ae-pdp-main">
                @if(count(getAllProductCats($product->id)) > 0)
                    <div class="ae-pdp-cats">
                        @foreach(getAllProductCats($product->id) as $cat)
                            <span>{!! $cat->name !!}</span>@if(!$loop->last) · @endif
                        @endforeach
                    </div>
                @endif

                <h1>{!! $product->name !!}</h1>

                @if(!empty($product['product_code']))
                    <p class="ae-pdp-code">Product Code: <strong>{!! $product['product_code'] !!}</strong></p>
                @endif

                <div class="ae-panel-card">
                    <h2>Product Overview</h2>
                    <div class="body">
                        {!! substr(strip_tags($product->description), 0, 280) !!}@if(strlen(strip_tags($product->description)) > 280)…@endif
                    </div>
                </div>

                <div class="ae-panel-card" id="description">
                    <h2>Description</h2>
                    <div class="body">{!! $product->description !!}</div>
                </div>
            </div>
        </div>

        @php $related = getRelatedProducts($product->id); @endphp
        @if(count($related) > 0)
            <h2 class="ae-related-title" id="related">Related Products</h2>
            <div class="ae-card-grid is-3">
                @foreach($related as $related_product)
                    <a class="ae-pcard" href="{{ route('product_detail', $related_product->slug) }}">
                        <div class="ae-pcard-media">
                            <img
                                src="{{ asset($related_product->image ? 'uploads/product_images/'.$related_product->image : 'assets/frontend/images/no_product.png') }}"
                                alt="{!! strip_tags($related_product->name) !!}"
                                loading="lazy"
                                onerror="this.onerror=null;this.src='{{ asset('assets/frontend/images/no_product.png') }}';"
                            >
                        </div>
                        <div class="ae-pcard-title">{!! $related_product->name !!}</div>
                    </a>
                @endforeach
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
