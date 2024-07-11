@extends('admin.layouts.master')
@section('css')
<script src="assets/js/nicEdit-latest.js"></script>

<script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
//]]>
</script>
@stop
@section('content')
@include('admin.layouts.messages')
@php
$route  = \Route::currentRouteName();
@endphp
<div class="agile-grids">
    <div class="grids">
        <div class="row">
            <div class="col-md-10">
                <h1 class="page-header">Category <a class="btn btn-sm btn-primary pull-right" href="{!! route('category.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('category.category') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Category Information</h4>
                            </div>
                            <div class="form-body">
                                 <form method="post" class="form" enctype="multipart/form-data"
                                @if (!empty($result)) action="{{ route('category.update', $result->id) }}" @else action="{{ route('category.store') }}" @endif>
                                
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="" for="name">Name</label>
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <input type="text" name="name" id="name" class="form-control" >
                                            
                                        </div>

                                        <div class="form-group">
                                        <label class="" for="short_name">Short Name</label>
                                        <input type="text" name="short_name" id="short_name" class="form-control" >
                                            
                                            
                                        </div>


                                        <div class="form-group">
                                            <label class="" for="description">Description</label>
                                            <textarea class="form-control" name="description" id="description" rows="20"></textarea>
                                            
                                        </div>

                                        <div class="form-group">
                                        <label class="" for="meta_tag">Meta Tag</label>
                                        <input type="text" name="meta_tag" id="meta_tag" class="form-control" >
                                         
                                            
                                        </div>

                                        <div class="form-group">
                                        <label class="" for="meta_description">Meta Description</label>
                                        <input type="text" name="meta_description" id="meta_description" class="form-control" >
                                        
                                        </div>

                                        <div class="form-group">
                                        <label class="" for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" >
                                        
                                        </div>
                                    
                                        <div class="form-group">
                                        <label class="" for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" >
                                        
                                             @if(!empty($result->image))
                                            <div class="form-group">
                                                <img src="{{ asset('uploads/product_images/'.$result->image) }}" class="img-responsive" style="max-height: 70px;">
                                            </div>
                                            @endif
                                        </div>
                                       
                                    </div>
                                    
                                    
                                </div>
                                <div class="row">
                                    <p>&nbsp;</p>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                    </div>
                                </div>
                                
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop