@extends('frontend.layouts.app')
@section('content')
<style>
#query .modal-header { background: #1947d1; color: #fff; }
#query button.btn { background-color: #ff6b35; border-color: #ff6b35; color: #fff !important; padding: 10px 20px; }
#query .close { color: #fff; opacity: 1; background: transparent; border: 0; font-size: 28px; line-height: 1; }
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

<div class="modal fade" id="query" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">{!! $product->name !!} - Query</h4>
                <button type="button" class="close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{ route('product_query.store') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="row">
                        <div class="col-12 py-2">
                            <label for="name">Name:</label>
                            <input type="text" name="name" required class="form-control" value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <label for="country">Country:</label>
                            <select name="country" required class="form-control">
                                <option value="">Select Country</option>
                                @foreach(getCountries() as $country)
                                    <option value="{!! $country->name !!}" {{ old('country') == $country->name ? 'selected' : '' }}>{!! $country->name !!}</option>
                                @endforeach
                            </select>
                            @if($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <label for="phone_number">Phone Number:</label>
                            <input type="number" class="form-control" name="phone_number" required value="{{ old('phone_number') }}">
                            @if($errors->has('phone_number'))
                                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <label for="quantity">Quantity:</label>
                            <input type="number" min="0" class="form-control" name="quantity" required value="{{ old('quantity') }}">
                            @if($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" class="form-control" required rows="4">{{ old('message') }}</textarea>
                            @if($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <input type="file" name="file_name" class="form-control">
                        </div>
                        <div class="col-12 py-2">
                            <div class="g-recaptcha" data-sitekey="6LdxTXQoAAAAALx5i79u3FVOWj-Rgh0XguRBmwM_"></div>
                        </div>
                        <div class="col-12 py-2 text-center">
                            <button class="btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="successModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Success!</h4>
            </div>
            <div class="modal-body">
                <p class="text-center mb-0" id="modal_success_message">Success</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-bs-dismiss="modal" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
@if (Session::has('errors'))
$('#query').modal('show');
@endif
@if (Session::has('success'))
$("#modal_success_message").html("{!! Session::get('success') !!}");
$('#successModal').modal('show');
@endif
</script>
@endsection
