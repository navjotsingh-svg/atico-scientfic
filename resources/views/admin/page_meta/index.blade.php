@extends('admin.layouts.master')
@section('content')
<div class="agile-grids">
    <div class="grids">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Page SEO</h1>

                @include('admin.layouts.messages')

                <p style="color:#5d767a;margin:-6px 0 16px;">Set the browser title and meta description for each public page. Product, category and individual blog pages keep their own fields on those records.</p>

                <form method="post" action="{{ route('page_meta.update') }}">
                    @csrf

                    @foreach($pages as $page)
                        <div class="page-seo-card">
                            <h3>{{ $page->name }}</h3>
                            <span class="page-path">{{ $page->path }}</span>

                            <div class="form-group">
                                <label for="meta_title_{{ $page->id }}">Meta Title</label>
                                <input
                                    type="text"
                                    id="meta_title_{{ $page->id }}"
                                    name="pages[{{ $page->id }}][meta_title]"
                                    class="form-control seo-field"
                                    maxlength="255"
                                    data-max="60"
                                    value="{{ old('pages.'.$page->id.'.meta_title', $page->meta_title) }}"
                                >
                                <div class="seo-hint"><span>Shown in the browser tab and search results.</span><span class="seo-count">0 / 60</span></div>
                            </div>

                            <div class="form-group">
                                <label for="meta_description_{{ $page->id }}">Meta Description</label>
                                <textarea
                                    id="meta_description_{{ $page->id }}"
                                    name="pages[{{ $page->id }}][meta_description]"
                                    class="form-control seo-field"
                                    rows="3"
                                    maxlength="500"
                                    data-max="160"
                                >{{ old('pages.'.$page->id.'.meta_description', $page->meta_description) }}</textarea>
                                <div class="seo-hint"><span>Short summary search engines can show under the title.</span><span class="seo-count">0 / 160</span></div>
                            </div>
                        </div>
                    @endforeach

                    <div class="page-seo-actions">
                        <button type="submit" class="btn btn-primary">Save Page SEO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(function () {
    function refreshCount(field) {
        var max = parseInt(field.getAttribute('data-max'), 10) || 0;
        var count = field.parentNode.querySelector('.seo-count');
        if (!count) {
            return;
        }
        count.textContent = field.value.length + ' / ' + max;
    }

    $('.seo-field').each(function () {
        refreshCount(this);
    }).on('input', function () {
        refreshCount(this);
    });
});
</script>
@endsection
