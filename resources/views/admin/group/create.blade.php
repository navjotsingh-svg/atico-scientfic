@extends('admin.layouts.master')
@section('css')
<script src="{{ asset('assets/js/nicEdit-latest.js') }}"></script>

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
                <h1 class="page-header">{!! lang('group.group') !!} <a class="btn btn-sm btn-primary pull-right" href="{!! route('group.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('group.group') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>{!! lang('group.group') !!} Information</h4>
                            </div>
                            <div class="form-body">
                              

                                <form  class="form" enctype="multipart/form-data"
                                @if (!empty($result)) method="post" action="{{ route('group.update', $result->id) }}" @else method="post" action="{{ route('group.store') }}" @endif>
                            
                               @csrf
                               @if (!empty($result))
                               @method('PUT')
                                @endif
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group cats">
                                            
                                            <div class="form-title">
                                                <h4>{!! lang('category.category') !!}<sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup></h4>
                                            </div>
                                            
                                            
                                            <ul class="list-group cat_ul" id="myDiv">
                                                @foreach($cats as $key => $cat)
                                                <li class="list-group-item"><input class="check_cat"  type="checkbox" name="category_id[]" {{ in_array($key, $group_cats) ? 'checked' : '' }} value="{{ $key }}"><span class="main_cat">{!! $cat !!}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                    <label class="" for="name">Name</label>
                                    <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                       <input type="text" name="name" id="name" class="form-control" value="<?= @$result->name ?>">
                                     
                                    </div>

                                    <div class="form-group">
                                            
                                            <label class="" for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" value="<?= @$result->name ?>">
                                     
                                            @if(!empty($result->image))
                                            <div class="form-group">
                                                <img src="{{ asset('uploads/product_images/'.$result->image) }}" class="img-responsive" style="max-height: 70px;">
                                            </div>
                                            @endif
                                        </div>

                                        
                                    <div class="form-group">
                                    <label class="" for="sort">Sort</label>
                                    <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                      
                                        <input type="number" name="sort" id="sort" class="form-control" value="<?= @$result->sort ?>" >
                                   
                                    </div>

                                    <div class="form-group">
                                    <label class="" for="route">Route</label>
                                        <input type="text" name="route" id="route" class="form-control" value="<?= @$result->route ?>">
                                     
                                       </div>

                                    <div class="form-group">
                                        <label class="" for="meta_tag">Meta Tag</label>
                                        <input type="text" name="meta_tag" id="meta_tag" class="form-control" value="<?= @$result->meta_tag ?>">
                                      
                                    </div>

                                    <div class="form-group">
                                        <label class="" for="meta_description">Meta Description</label>
                                        <input type="text" name="meta_description" id="meta_description" class="form-control" value="<?= @$result->meta_description ?>">
                                      
                                    </div>

                                    <div class="form-group">
                                    <label class="" for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="<?= @$result->meta_title ?>">
                                        
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