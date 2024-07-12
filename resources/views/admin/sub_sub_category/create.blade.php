@extends('admin.layouts.master')
@section('css')
<script src="{{ asset('assets/js/nicEdit-latest.js') }}"></script>  <script type="text/javascript">
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
                <h1 class="page-header">{!! lang('sub_sub_category.sub_sub_category') !!} <a class="btn btn-sm btn-primary pull-right" href="{!! route('sub_sub_category.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('sub_sub_category.sub_sub_category') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>{!! lang('sub_sub_category.sub_sub_category') !!} Information</h4>
                            </div>
                            <div class="form-body">
                              

                                <form  class="form" enctype="multipart/form-data"
                                @if (!empty($result)) method="post" action="{{ route('sub_sub_category.update', $result->id) }}" @else method="post" action="{{ route('sub_sub_category.store') }}" @endif>
                            
                               @csrf
                               @if (!empty($result))
                               @method('PUT')
                                @endif
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        @if(!isset($result))
                                        <div class="form-group">
                                        <label for="parent_id">'ategory</label>
                                        <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                             <select name="parent_id_old" class="select2 form-control1" onchange="getSubCat(this.value)">
                                                <option value="">-Select Sub Category-</option>
                                                @foreach($categories as $key => $cat)
                                                <option value="{{ $key }}" {{ $key == @$result['parent_id'] ? 'selected' : '' }}>{{ $cat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group"> 
                                        <label for="parent_id">Record Sub Category</label>
                                        <select name="parent_id" id="sub-cat" class="select2 form-control1">
                                                <option value="">-Select Sub Category-</option>
                                            </select>
                                        </div>
                                        @else

                                        <div class="form-group"> 
                                        <label for="parent_id">Record Sub Category</label>
                                             <select name="parent_id" class="select2 form-control1">
                                                <option value="">-Select Sub Category-</option>
                                                @foreach($cats as $key => $cat)
                                                <option value="{{ $cat->id }}" {{ $cat->id == $result['parent_id'] ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @endif
                                        
                                        <div class="form-group">
                                        <label for="name">Name</label>
                                        
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <input type="text" name="name" class="form-control" value="<?= @$result->name ?>">
                                            
                                        </div>

                                        <div class="form-group">
                                        <label for="short_name">Short Name</label>
                                        <input type="text" name="short_name" class="form-control" value="<?= @$result->short_name ?>">
                                           
                                        </div>

                                       
                                        <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" rows="20"><?= @$result->description ?></textarea>
                                             
                                        </div>

                                        <div class="form-group">
                                        <label for="meta_tag">Meta Tag</label>
                                        <input type="text" name="meta_tag" class="form-control" value="<?= @$result->meta_tag ?>">
                                        
                                         </div>

                                        <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <input type="text" name="meta_description" class="form-control" value="<?= @$result->meta_description ?>">
                                        
                                        </div>

                                        <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" value="<?= @$result->meta_title ?>">
                                        
                                         </div>

                                        
                                        <div class="form-group">
                                        <label for="image">Image</label>
                                       
                                        <input type="file" name="image" class="form-control" >
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
<script>
    function getSubCat(val) {
    $.ajax({
    type: "GET",
    url: "{{ route('get_sub_cat') }}",
    data: {'cat_id' : val},
    success: function(data){
        $("#sub-cat").html(data);
    }
    });
}
</script>
@stop