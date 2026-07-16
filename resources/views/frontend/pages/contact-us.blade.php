@extends('frontend.layouts.app')

@section('content')
@php
  $countries = [
    'Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antarctica','Antigua And Barbuda','Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan',
    'Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei','Bulgaria','Burkina Faso','Burundi',
    'Cambodia','Cameroon','Canada','Cape Verde','Cayman Islands','Central African Republic','Chad','Chile','China','Colombia','Comoros','Congo','Costa Rica','Croatia','Cuba','Cyprus','Czech Republic',
    'Denmark','Djibouti','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia',
    'Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guam','Guatemala','Guinea','Guinea-Bissau','Guyana',
    'Haiti','Honduras','Hong Kong S.A.R.','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy','Ivory Coast',
    'Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Korea North','Korea South','Kuwait','Kyrgyzstan',
    'Laos','Latvia','Lebanon','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Luxembourg','Macau S.A.R.','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Mauritania','Mauritius','Mexico','Moldova','Monaco','Mongolia','Montenegro','Morocco','Mozambique','Myanmar',
    'Namibia','Nepal','Netherlands','New Zealand','Nicaragua','Niger','Nigeria','North Macedonia','Norway','Oman',
    'Pakistan','Palestine','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Puerto Rico','Qatar',
    'Romania','Russia','Rwanda','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Somalia','South Africa','South Sudan','Spain','Sri Lanka','Sudan','Suriname','Sweden','Switzerland','Syria',
    'Taiwan','Tajikistan','Tanzania','Thailand','Togo','Tonga','Trinidad And Tobago','Tunisia','Turkey','Turkmenistan','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','Uruguay','Uzbekistan',
    'Vanuatu','Venezuela','Vietnam','Yemen','Zambia','Zimbabwe',
  ];
@endphp

<section class="ae-contact-hero">
  <div class="ae-container ae-contact-hero-inner">
    <p class="ae-kicker">Atico Scientific</p>
    <h1 class="ae-title">Contact Us</h1>
    <p class="ae-contact-lead">Speak with our team for quotations, tenders, dealerships, and laboratory equipment support worldwide.</p>
  </div>
</section>

<section class="ae-section ae-contact-page">
  <div class="ae-container">
    @if ($errors->any())
      <div class="ae-contact-alert is-error" role="alert">
        <strong>Please fix the following:</strong>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('success'))
      <div class="ae-contact-alert is-success" role="status">{{ session('success') }}</div>
    @endif

    @if (session('error'))
      <div class="ae-contact-alert is-error" role="alert">{{ session('error') }}</div>
    @endif

    <div class="ae-contact-layout">
      <aside class="ae-contact-side">
        <div class="ae-contact-side-card">
          <h2>Get in touch</h2>
          <p>ISO 9001 certified manufacturer &amp; exporter of scientific, educational and engineering laboratory equipment.</p>

          <div class="ae-contact-item">
            <span class="ae-contact-icon ae-contact-icon-pin" aria-hidden="true"></span>
            <div>
              <h3>Head Office</h3>
              <p>#5309, Grain Market,<br>Ambala Cantt, 133001, HR, India</p>
            </div>
          </div>

          <div class="ae-contact-item">
            <span class="ae-contact-icon ae-contact-icon-factory" aria-hidden="true"></span>
            <div>
              <h3>Factory</h3>
              <p>274, Sector-II, Industrial Growth Center,<br>HSIIDC, Saha, HR, India</p>
            </div>
          </div>

          <div class="ae-contact-item">
            <span class="ae-contact-icon ae-contact-icon-mail" aria-hidden="true"></span>
            <div>
              <h3>Email</h3>
              <p><a href="mailto:sales@aticoscientific.com">sales@aticoscientific.com</a></p>
            </div>
          </div>

          <div class="ae-contact-item">
            <span class="ae-contact-icon ae-contact-icon-phone" aria-hidden="true"></span>
            <div>
              <h3>Phone</h3>
              <p>Technical Support<br><a href="tel:+919996186555">+91-99961-86555</a></p>
              <p>Business Development<br><a href="tel:+919896783832">+91-98967-83832</a></p>
            </div>
          </div>

          <a class="ae-contact-whatsapp" href="https://wa.me/919896793832?text=Hi%20Atico%20Scientific%2C%20I%20need%20a%20quotation" target="_blank" rel="noopener">
            Chat on WhatsApp
          </a>
        </div>
      </aside>

      <div class="ae-contact-form-wrap">
        <div class="ae-contact-form-card">
          <h2>Send an enquiry</h2>
          <p class="ae-contact-form-sub">Fill in the details below and our sales team will respond shortly.</p>

          <form method="post" enctype="multipart/form-data" action="{{ route('enquiry.store') }}" class="ae-contact-form" novalidate>
            @csrf

            <div class="ae-contact-grid">
              <label class="ae-field">
                <span>Full Name *</span>
                <input type="text" name="name" value="{{ old('name') }}" required maxlength="120" placeholder="Your name" autocomplete="name">
              </label>

              <label class="ae-field">
                <span>Email *</span>
                <input type="email" name="email" value="{{ old('email') }}" required maxlength="150" placeholder="you@company.com" autocomplete="email">
              </label>

              <label class="ae-field">
                <span>Mobile Number *</span>
                <input type="tel" name="mobile_no" value="{{ old('mobile_no') }}" required maxlength="40" placeholder="Mobile number" autocomplete="tel">
              </label>

              <label class="ae-field">
                <span>Country *</span>
                <select name="country" required>
                  <option value="">Select Country</option>
                  @foreach($countries as $country)
                    <option value="{{ $country }}" @selected(old('country') === $country)>{{ $country }}</option>
                  @endforeach
                </select>
              </label>
            </div>

            <label class="ae-field">
              <span>How can we help? *</span>
              <textarea name="message" rows="6" required maxlength="5000" placeholder="Tell us about products, quantity, destination country, or tender requirements...">{{ old('message') }}</textarea>
            </label>

            <label class="ae-field">
              <span>Attachment <em>(optional, max 5MB)</em></span>
              <input type="file" name="file_name" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png,.webp">
            </label>

            <button type="submit" class="ae-contact-submit">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
