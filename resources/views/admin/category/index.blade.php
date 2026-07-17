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
                <h1 class="page-header">Category Listing <a class="btn btn-sm btn-primary pull-right" href="{!! route('category.create') !!}"> <i class="fa fa-plus fa-fw"></i> {!! lang('common.create_heading', lang('category.category')) !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h3>Category Details</h3>
                        {{-- for message rendering --}}
                        @include('admin.layouts.messages')
                        <div class="row">
                            <div class="col-md-12 question-filter">
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-inner">
                                        Category Filter
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            
                                            <form method="post" id="ajaxForm" action="{{ route('category.paginate') }}">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <label for="group" class="control-label">Group</label>
                                                    <select class="form-control" id="group_id" name="group_id"><option value="" selected="selected">Select Group</option><option value="7">Civil Engineering</option><option value="1">Educational lab Equipment</option><option value="4">Engineering Lab</option><option value="2">Engineering Tenders</option><option value="3">Lab Trainers</option><option value="9">Pharmacy</option><option value="6">Research Lab</option><option value="5">Testing Equipments</option></select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <label for="name" class="control-label">Name</label>
                                                        <input type="text" name="name" value="<?php echo (session('name') != "") ? session('name') : '';  ?>" class="form-control" placeholder='Search by Name' autocomplete="off">
                                                     </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <label for="slug" class="control-label">Slug</label>
                                                    <input type="text" name="slug" value="<?php echo (session('slug') != "") ? session('slug') : '';  ?>" class="form-control" placeholder='Search by slug' autocomplete="off">
                                                   
                                                      </div>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                         <label for="status" class="control-label">Status</label>
                                                         <select class="form-control" id="status" name="status"><option value="1">Active</option><option value="2">Non-active</option><option value="" selected="selected">All</option></select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-3 margintop20">
                                                    <div class="form-group">
                                                        <input type="hidden" name="form-search" value="1">
                                                        <input type="submit" value="Filter" class="btn btn-primary">
                                                        <a href="{!! route('category.index') !!}" class="btn btn-success"> Reset Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! route('category.excel') !!}" class="btn btn-success">Export CSV</a>
                        <form action="#" method="post">
                            <div class="col-md-3 text-right pull-right padding0 marginbottom10">
                                {!! lang('common.per_page') !!}: 
                                 <form action="#" method="post">
                                 <select id="per-page" name="name"><option value="20" selected="selected">20</option><option value="40">40</option><option value="100">100</option><option value="200">200</option><option value="300">300</option></select>   
                            </div>
                            <div class="col-md-3 padding0 marginbottom10">
                            <input name="page" type="hidden" value="search">
                                 @csrf
                             </div>
                            <table id="paginate-load" data-route="{{ route('category.paginate') }}" class="table table-hover">
                            </table>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop