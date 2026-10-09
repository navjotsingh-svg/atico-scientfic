@php
    $assignedIds = [];
    if (!empty($result)) {
        $assignedIds = \App\Models\ProductCategory::query()
            ->where('category_id', $result->id)
            ->pluck('product_id')
            ->map(fn ($id) => (int) $id)
            ->all();
    }
    $assignedLookup = array_fill_keys($assignedIds, true);
    $products = \App\Models\Product::query()
        ->orderBy('name')
        ->get(['id', 'name'])
        ->sortBy(function ($product) use ($assignedLookup) {
            $name = strtolower(trim(preg_replace('/\s+/', ' ', strip_tags($product->name))));
            $assigned = isset($assignedLookup[(int) $product->id]) ? '0' : '1';

            return $assigned.$name;
        })
        ->values();
    $checkedIds = $products
        ->filter(fn ($product) => isset($assignedLookup[(int) $product->id]))
        ->pluck('id')
        ->implode(',');
@endphp
<aside class="assign-products">
    <h4>Assign Products</h4>
    <input type="hidden" name="assign_products" value="1">
    <input type="hidden" name="product_ids_list" value="{{ $checkedIds }}">
    <input type="search" class="form-control assign-products-search" placeholder="Search Product" autocomplete="off">
    <p class="assign-products-count">{{ count(array_filter(explode(',', (string) $checkedIds))) }} assigned</p>
    <div class="assign-products-list">
        @foreach($products as $product)
            @php
                $name = trim(preg_replace('/\s+/', ' ', strip_tags($product->name)));
                $checked = isset($assignedLookup[(int) $product->id]);
            @endphp
            <label class="{{ $checked ? 'is-assigned' : '' }}" data-name="{{ strtolower($name) }}">
                <input type="checkbox" value="{{ $product->id }}" @checked($checked)>
                <span>{{ $name }}</span>
            </label>
        @endforeach
    </div>
</aside>
<script>
(function () {
    var box = document.querySelector('.assign-products');
    if (!box) return;
    var search = box.querySelector('.assign-products-search');
    var list = box.querySelector('.assign-products-list');
    var hidden = box.querySelector('input[name="product_ids_list"]');
    var count = box.querySelector('.assign-products-count');
    var form = box.closest('form');

    function syncList() {
        var ids = [];
        list.querySelectorAll('input[type="checkbox"]').forEach(function (input) {
            var label = input.closest('label');
            label.classList.toggle('is-assigned', input.checked);
            if (input.checked) ids.push(input.value);
        });
        hidden.value = ids.join(',');
        count.textContent = ids.length + ' assigned';
    }

    search.addEventListener('input', function () {
        var term = search.value.trim().toLowerCase();
        list.querySelectorAll('label').forEach(function (label) {
            var name = label.getAttribute('data-name') || '';
            label.classList.toggle('is-hidden', term !== '' && name.indexOf(term) === -1);
        });
    });

    list.addEventListener('change', syncList);
    if (form) form.addEventListener('submit', syncList);
    syncList();
})();
</script>
