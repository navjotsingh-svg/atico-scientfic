@php
    $megaItems = getProductsMegaMenuItems();
    $megaGroups = ($navGroups ?? getGroups())->map(function ($group) {
        return (object) [
            'id' => $group->id,
            'slug' => $group->route,
            'name' => trim(strip_tags($group->name)),
        ];
    });
@endphp
<div class="dropdown-menu ae-mega-menu" role="menu" aria-label="Browse products by laboratory">
    <div class="ae-mega-panel">
        <div class="ae-mega-head">
            <span class="ae-mega-kicker">Browse by laboratory</span>
            <a class="ae-mega-view-all" href="{{ route('products.index') }}">View all products <span aria-hidden="true">›</span></a>
        </div>

        @if($megaGroups->count())
            <div class="ae-mega-chips" role="tablist" aria-label="Filter laboratories">
                <button type="button" class="ae-mega-chip is-active" data-mega-filter="all" role="tab" aria-selected="true">All laboratories</button>
                @foreach($megaGroups as $chipGroup)
                    <button type="button" class="ae-mega-chip" data-mega-filter="{{ $chipGroup->id }}" role="tab" aria-selected="false">{!! e($chipGroup->name) !!}</button>
                @endforeach
            </div>
        @endif

        <div class="ae-mega-grid">
            @forelse($megaItems as $item)
                <a
                    class="ae-mega-item"
                    href="{{ $item->url }}"
                    data-mega-group="{{ $item->group_id }}"
                >
                    <span class="ae-mega-icon" aria-hidden="true">{{ navMegaMenuIcon($item->slug) }}</span>
                    <span class="ae-mega-item-text">
                        <strong>{!! $item->name !!}</strong>
                        @if($item->sections > 0)
                            <small>{{ $item->sections }} {{ $item->sections === 1 ? 'section' : 'sections' }}</small>
                        @else
                            <small>View range</small>
                        @endif
                    </span>
                </a>
            @empty
                <a class="ae-mega-item" href="{{ route('products.index') }}">
                    <span class="ae-mega-icon" aria-hidden="true">🔬</span>
                    <span class="ae-mega-item-text"><strong>All products</strong><small>Browse full catalogue</small></span>
                </a>
            @endforelse
        </div>

        <div class="ae-mega-foot">
            <div class="ae-mega-foot-links">
                <a href="{{ route('lab_tender_page') }}">
                    <span class="ae-mega-foot-ic" aria-hidden="true">📋</span>
                    Lab tenders
                </a>
                <a href="{{ route('contact_us_page') }}">
                    <span class="ae-mega-foot-ic" aria-hidden="true">🏗️</span>
                    Turnkey projects
                </a>
            </div>
            <a class="ae-mega-cta" href="{{ route('contact_us_page') }}">
                <span aria-hidden="true">✉️</span>
                Send your requirement
            </a>
        </div>
    </div>
</div>
