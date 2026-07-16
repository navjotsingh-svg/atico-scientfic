@php
  $sideCategories = $sideCategories ?? sidebarCategories();
  $sideTitle = $sideTitle ?? 'Browse Categories';
@endphp

<aside class="ae-side">
  <h3 class="ae-side-title">{{ $sideTitle }}</h3>
  <div class="ae-side-acc" id="aeSideAcc">
    @forelse($sideCategories as $sideCat)
      @php
        $hasSubs = isset($sideCat->sub_cats) && count($sideCat->sub_cats) > 0;
        $isOpen = $loop->first;
      @endphp
      <div class="ae-side-acc-item {{ $isOpen ? 'is-open' : '' }}" data-acc-item>
        <button
          type="button"
          class="ae-side-acc-trigger"
          aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
          data-acc-trigger
        >
          <span class="ae-side-acc-label">{!! $sideCat->name !!}</span>
          <span class="ae-side-acc-chevron" aria-hidden="true"></span>
        </button>
        <div class="ae-side-acc-panel" data-acc-panel @if(!$isOpen) hidden @endif>
          <ul class="ae-side-list">
            @if($hasSubs)
              @foreach($sideCat->sub_cats as $sub)
                <li>
                  <a href="{{ route('categories', $sub->slug) }}" class="is-sub">{!! $sub->name !!}</a>
                </li>
              @endforeach
            @else
              <li>
                <a href="{{ route('categories', $sideCat->slug) }}">View category</a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    @empty
      <div class="ae-side-empty">No categories found</div>
    @endforelse
  </div>
</aside>

@once
@push('scripts')
<script>
(function () {
  var root = document.getElementById('aeSideAcc');
  if (!root) return;

  root.addEventListener('click', function (e) {
    var trigger = e.target.closest('[data-acc-trigger]');
    if (!trigger || !root.contains(trigger)) return;

    var item = trigger.closest('[data-acc-item]');
    if (!item) return;
    var panel = item.querySelector('[data-acc-panel]');
    var willOpen = !item.classList.contains('is-open');

    root.querySelectorAll('[data-acc-item]').forEach(function (el) {
      var btn = el.querySelector('[data-acc-trigger]');
      var p = el.querySelector('[data-acc-panel]');
      el.classList.remove('is-open');
      if (btn) btn.setAttribute('aria-expanded', 'false');
      if (p) p.hidden = true;
    });

    if (willOpen) {
      item.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
      if (panel) panel.hidden = false;
    }
  });
})();
</script>
@endpush
@endonce
