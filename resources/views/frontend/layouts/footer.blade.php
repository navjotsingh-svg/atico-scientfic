<footer class="ae-footer">
  <div class="ae-footer-bg" aria-hidden="true">
    <img src="{{ asset('assets/images/footer-bg.webp') }}" alt="" loading="lazy">
  </div>

  <div class="ae-footer-inner">
    <div class="ae-footer-grid">
      <div>
        <h3 class="ae-footer-title">Contact Us</h3>
        <ul class="ae-footer-list">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>
            <a href="tel:+919896793832">+91-9896793832</a>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>
            <a href="tel:+919996186555">+91-9996186555</a>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg>
            <a href="mailto:sales@aticoscientific.com">sales@aticoscientific.com</a>
          </li>
        </ul>
      </div>

      <div>
        <h3 class="ae-footer-title">Quick Links</h3>
        <ul class="ae-footer-links">
          <li><a href="{{ url('/') }}"><span>→</span>Home</a></li>
          <li><a href="{{ url('/about-us') }}"><span>→</span>About Us</a></li>
          <li><a href="{{ route('products.index') }}"><span>→</span>Products</a></li>
          <li><a href="{{ url('/blogs') }}"><span>→</span>Blogs</a></li>
          <li><a href="{{ url('/lab-tenders') }}"><span>→</span>Lab Tenders</a></li>
          <li><a href="{{ url('/contact-us') }}"><span>→</span>Contact</a></li>
        </ul>
      </div>

      <div>
        <h3 class="ae-footer-title">Product Categories</h3>
        <ul class="ae-footer-links">
          @forelse(($navGroups ?? collect())->take(8) as $group)
            <li><a href="{{ route('products.index') }}">{!! $group->name !!}</a></li>
          @empty
            <li><a href="{{ route('products.index') }}">Educational Lab Equipment</a></li>
            <li><a href="{{ route('products.index') }}">Biology Lab Equipment</a></li>
            <li><a href="{{ route('products.index') }}">Chemistry Lab Equipment</a></li>
            <li><a href="{{ route('products.index') }}">Civil Engineering Lab Equipment</a></li>
            <li><a href="{{ route('products.index') }}">Engineering Lab Equipment</a></li>
          @endforelse
        </ul>
      </div>

      <div>
        <h3 class="ae-footer-title">Our Offices</h3>
        <div class="ae-footer-offices">
          <div class="ae-footer-office">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <div>
              <p class="ae-office-name">Corporate Office</p>
              <p>288, Sector 2, HSIIDC, Industrial Growth Centre, SAHA 133104 Haryana INDIA</p>
            </div>
          </div>
          <div class="ae-footer-office">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <div>
              <p class="ae-office-name">Correspondent Office</p>
              <p>5309, Grain Market, Ambala Cantt-133001 INDIA</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ae-footer-divider"></div>

    <div class="ae-footer-units">
      <h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 12h4"></path><path d="M10 8h4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path><path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path></svg>
        Manufacturing Units
      </h2>
      <div class="ae-footer-unit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 12h4"></path><path d="M10 8h4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path><path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path></svg>
        <span>Unit 1: 274, Sector II, Industrial Growth Centre, HSIIDC, SAHA (Haryana) INDIA</span>
      </div>
      <div class="ae-footer-unit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 12h4"></path><path d="M10 8h4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path><path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path></svg>
        <span>Unit 2: 61, HSIIDC, Ambala Cantt 133001 (Haryana) INDIA</span>
      </div>
    </div>
  </div>

  <div class="ae-footer-bottom-bar">
    <div class="ae-footer-bottom-inner">
      <div class="ae-footer-brand">
        <a href="{{ url('/') }}">
          <img src="{{ asset('assets/images/logo_footer.png') }}" alt="Atico Scientific" width="120" height="40" loading="lazy">
        </a>
        <p>Copyright © {{ date('Y') }} <a href="{{ url('/') }}">Atico Scientific</a> All Rights Reserved</p>
      </div>
      <nav class="ae-footer-bottom-nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about-us') }}">About Us</a>
        <a href="{{ url('/blogs') }}">Blogs</a>
        <a href="{{ url('/contact-us') }}">Contact</a>
      </nav>
    </div>
  </div>
</footer>

<a class="ae-whatsapp" href="https://wa.me/919896793832?text=Hi" target="_blank" rel="noopener" aria-label="WhatsApp">
  <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp">
</a>
