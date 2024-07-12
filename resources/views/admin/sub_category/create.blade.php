@extends('admin.layouts.master')
@section('css')
<script src="{{ asset('assets/js/nicEdit-latest.js') }}"></script> <script type="text/javascript">
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
                <h1 class="page-header">{!! lang('sub_category.sub_category') !!} <a class="btn btn-sm btn-primary pull-right" href="{!! route('sub_category.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('sub_category.sub_category') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>{!! lang('sub_category.sub_category') !!} Information</h4>
                            </div>
                            <div class="form-body">
                             

                                <form  class="form" enctype="multipart/form-data"
                                @if (!empty($result)) method="post" action="{{ route('sub_category.update', $result->id) }}" @else method="post" action="{{ route('sub_category.store') }}" @endif>
                            
                               @csrf
                               @if (!empty($result))
                               @method('PUT')
                                @endif
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="parent_id">Category</label>
                                        <select name="parent_id" class="select2 form-control1">
                                                <option value="">-Select Sub Category-</option>
                                                @foreach($categories as $key => $cat)
                                                <option value="{{ $key }}" {{ $key == @$result['parent_id'] ? 'selected' : '' }}>{{ $cat }}</option>
                                                @endforeach
                                            </select>
                                              
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="second_parent_id">Second Category</label>
                                            <select name="second_parent_id" class="select2 form-control1">
                                                <option value="">-Select Sub Category-</option>
                                                @foreach($categories as $key => $cat)
                                                <option value="{{ $key }}" {{ $key == @$result['parent_id'] ? 'selected' : '' }}>{{ $cat }}</option> @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label for="third_parent_id">Third Category</label>
                                        <select name="third_parent_id" class="select2 form-control1">
                                                <option value="">-Select Sub Category-</option>
                                                @foreach($categories as $key => $cat)
                                                <option value="{{ $key }}" {{ $key == @$result['parent_id'] ? 'selected' : '' }}>{{ $cat }}</option>  @endforeach
                                            </select>
                                          </div>
                                        
                                        <div class="form-group">
                                        <label for="four_parent_id">Fourth Category</label>
                                        <select name="four_parent_id" class="select2 form-control1">
                                                <option value="">-Select Sub Category-</option>
                                                @foreach($categories as $key => $cat)
                                                <option value="{{ $key }}" {{ $key == @$result['parent_id'] ? 'selected' : '' }}>{{ $cat }}</option>  @endforeach
                                            </select></div>
                                        
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
@stop