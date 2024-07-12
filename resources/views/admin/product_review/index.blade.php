@extends('admin.layouts.master')
@section('css')
<!-- tables -->
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/table-style.css') !!}" />
<!-- //tables -->
@endsection
@section('content')

<div class="agile-grids">   
    <div class="grids">       
        <div class="row">
            <div class="col-md-12">                
                <h1 class="page-header">{!! lang('product_review.product_review') !!} Listing </h1>

                <div class="agile-tables">
                    <div class="w3l-table-info">
                      <h3>Product Review Details</h3>

                        {{-- for message rendering --}}
                        @include('admin.layouts.messages')

                        <form action="#" method="post">
                            <div class="col-md-3 text-right pull-right padding0 marginbottom10">
                                {!! lang('common.per_page') !!}: 
                                <form action="#" method="post">
                                 <select id="per-page" name="name"><option value="20" selected="selected">20</option><option value="40">40</option><option value="100">100</option><option value="200">200</option><option value="300">300</option></select>   
                        
                            </div>
                            <div class="col-md-3 padding0 marginbottom10">
                            <input name="page" type="hidden" value="search">
                            @csrf
                                <input type="text" name="name" class="form-control  live-search" placeholder="Search product review by name">
                           </div>
                            <table id="paginate-load" data-route="{{ route('product_review.paginate') }}" class="table table-hover">
                            </table>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop

