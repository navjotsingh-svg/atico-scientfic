@extends('admin.layouts.master')
@section('css')
<script src="{{ asset('assets/js/nicEdit-latest.js') }}"></script>
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
                <h1 class="page-header">Faq<a class="btn btn-sm btn-primary pull-right" href="{!! route('faq.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('faq.faq') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Faq Information</h4>
                            </div>
                            <div class="form-body">

                            <form method="post" class="form" enctype="multipart/form-data"
                                @if (!empty($result)) action="{{ route('faq.update', $result->id) }}" @else action="{{ route('faq.store') }}" @endif>
                            
                               
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <input type="text" name="name" class="form-control" value="<?= @$result->name ?>">
                                            
                                        </div>

                                        <div class="form-group">
                                        <label for="description">Description</label>
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <textarea class="form-control" name="description"><?= @$result->description ?></textarea>
                                            
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