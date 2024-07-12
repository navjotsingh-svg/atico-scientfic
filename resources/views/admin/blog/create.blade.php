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
                <h1 class="page-header">{!! lang('blog.blog') !!} <a class="btn btn-sm btn-primary pull-right" href="{!! route('blog.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('blog.blog') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms"> 
                            <div class="form-title">
                                <h4>{!! lang('blog.blog') !!} Information</h4>                        
                            </div>
                            <div class="form-body">
                               
                                <form  class="form" enctype="multipart/form-data"
                                @if (!empty($result)) method="post" action="{{ route('blog.update', $result->id) }}" @else method="post" action="{{ route('blog.store') }}" @endif>
                            
                               @csrf
                               @if (!empty($result))
                               @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                       <label for="name">{!! lang('common.name') !!}</label>
                                        <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                          
                                        <input type="text" name="name" class="form-control" value="<?= @$result->name ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="slug">{!! lang('common.slug') !!}</label>
                                        <input type="text" name="slug" class="form-control"  value="<?= @$result->slug ?>">
                                                                                       
                                        </div>
                                        <div class="form-group">
                                           <label for="meta_title">{!! lang('common.meta_title') !!}</label>
                                           <input type="text" name="meta_title" class="form-control"  value="<?= @$result->meta_title ?>">
                                        
                                        </div>
                                        <div class="form-group">

                                        <label for="meta_tag">{!! lang('common.meta_tag') !!}</label>
                                           <input type="text" name="meta_tag" class="form-control" value="<?= @$result->meta_tag ?>">
                                        
                                            
                                        </div>
                                        <div class="form-group">
                                        <label for="meta_description">{!! lang('common.meta_description') !!}</label>
                                           <input type="text" name="meta_description" class="form-control" value="<?= @$result->meta_description ?>">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <textarea name="description" class="form-control" rows="20"><?= @$result->description ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>(Height : 100-200px and Width : 200-300px)
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <input type="file" name="image" class="form-control">
                                        </div>  
                                        @if(!empty($result->image))
                                            <div class="form-group"> 
                                                <img src="{{asset('uploads/blog_images/'.$result->image)}}" class="img-responsive" width="70" height="70">
                                            </div>
                                        @endif     
                                        
                                       
                                        <div class="checkbox"> 
                                            <label><input type="checkbox" value="1" <?php if( @$result->status==1) echo "checked"; ?> name="status"> Status </label> 
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

@section('script')


@stop