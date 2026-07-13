<li>
    <a class="dropdown-item {{ $item->subCategories && $item->subCategories->count() ? 'dropdown-toggle' : '' }}"
       href="{{ route('categories', $item->slug ?? $item->route) }}">
        {!! $item->short_name ?? $item->name !!}
    </a>

    @if($item->subCategories && $item->subCategories->count())
        <ul class="submenu dropdown-menu">
            @foreach($item->subCategories as $child)
                @include('frontend.layouts.recursive-menu', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>
