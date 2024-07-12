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
                <h1 class="page-header">{!! lang('product.product') !!} Listing <a class="btn btn-sm btn-primary pull-right" href="{!! route('product.create') !!}"> <i class="fa fa-plus fa-fw"></i> {!! lang('common.create_heading', lang('product.product')) !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>

                <div class="agile-tables">
                    <div class="w3l-table-info">
                      <h3>Product Details</h3>

                        {{-- for message rendering --}}
                        @include('admin.layouts.messages')

                        <a href="{!! route('product.excel') !!}" class="btn btn-success"> Export Excel</a>

                        <form action="#" method="post">
                            <div class="col-md-3 text-right pull-right padding0 marginbottom10">
                                {!! lang('common.per_page') !!}: 
                                <form action="#" method="post">
                                 <select id="per-page" name="name"><option value="20" selected="selected">20</option><option value="40">40</option><option value="100">100</option><option value="200">200</option><option value="300">300</option></select>   
                        
                            </div>
                            <div class="col-md-3 padding0 marginbottom10">
                            <input name="page" type="hidden" value="search">
                            @csrf
                                <input type="text" name="name" class="form-control  live-search" placeholder="Search Product by name">
                           </div>
                            <table id="paginate-load" data-route="{{ route('product.paginate') }}" class="table table-hover">
                            </table>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop


