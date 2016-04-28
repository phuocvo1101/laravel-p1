@extends('admin.master')
@section('controller','Product')
@section('action','Edit')
@section('content')
<style type="text/css">
    .img_current { width: 150px;}
    .imgDetail { width: 170px;}
    .icon_del {position: relative;top:-40px;left: -20px;}
    #insert {margin-top: 20px;}
</style>
<form action="" method="POST" name="frmEditProduct" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.errors')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
                <?php cate_parent($cate,0,"--",$product['cate_id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{!! old('txtName'), isset($product['name'])? $product['name']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Information: </label> </br>
            <input  type="checkbox" name="newPro" @if ($product['new_product'] == 1) checked="checked" @endif /> Sản Phẩm Mới </br>
            <input type="checkbox" name="oldPro" @if ($product['old_product'] == 1) checked="checked" @endif /> Sản Phẩm Đã Qua Sử Dụng </br>
            <input type="checkbox" name="importPro" @if ($product['import_product'] == 1) checked="checked" @endif /> Sản Phẩm Nhập Khẩu </br>
            <input type="checkbox" name="promotionPro" @if ($product['promotion_product'] == 1) checked="checked" @endif /> Sản Phẩm Khuyến Mãi </br>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Price" value="{!! old('txtPrice'), isset($product['price'])? $product['price']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro'), isset($product['intro'])? $product['intro']:null  !!}</textarea>
            <script type="text/javascript">ckeditor('txtIntro')</script>
        </div>
       <div class="form-group">
            <label>Content 1: Đánh giá</label>
            <textarea class="form-control" rows="3" name="txtContent1">{!! old('txtContent1'), isset($product['content1'])? $product['content1']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent1")</script>
        </div>
         <div class="form-group">
            <label>Content 2: Thông số kỹ thuật</label>
            <textarea class="form-control" rows="3" name="txtContent2">{!! old('txtContent2'), isset($product['content2'])? $product['content2']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent2")</script>
        </div>
         <div class="form-group">
            <label>Content 3: Màu nội thất</label>
            <textarea class="form-control" rows="3" name="txtContent3">{!! old('txtContent3'), isset($product['content3'])? $product['content3']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent3")</script>
        </div>
         <div class="form-group">
            <label>Content 4: Màu ngoại thất</label>
            <textarea class="form-control" rows="3" name="txtContent4">{!! old('txtContent4'), isset($product['content4'])? $product['content4']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent4")</script>
        </div>
        <div class="form-group">
            <label>Images Current </label>
            <img class="img_current" src="{{ asset('upload/'.$product['image']) }}"  />
            <input type="hidden" name="img_current" value="{{ $product['image'] }}"/>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords'), isset($product['keywords'])? $product['keywords']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription'), isset($product['description'])? $product['description']:null  !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Product Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
   @foreach ($image_detail as $key=>$item)
    <div class="form-group" id={{ $key }}>
        <img class="imgDetail" src="{{ asset('upload/detail/'.$item['image']) }}" idHinh="{{$item['id']}}" id="{{ $key }}" /> 
        <a href="javascript:void(0)" type="button" id="del_img_detail" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>     
    </div>
    @endforeach
    <button type="button" class="btn btn-primary" id="addImages">Add Images Detail</button>
    <div id="insert"></div>
</div>
</form>
@endsection