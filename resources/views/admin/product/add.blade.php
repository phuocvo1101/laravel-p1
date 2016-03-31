@extends('admin.master')
@section('controller','Product')
@section('action','Add')
@section('content')
<style type="text/css">
    #insert {margin-top: 20px;}
</style>
<form action="{!! url('admin/product/add') !!}" method="POST" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
                <?php cate_parent($cate,0,"--",old('sltParent')) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value ="{!! old('txtName') !!}" />
        </div>
        <div class="form-group">
            <label>Information: </label> </br>
            <input  type="checkbox" name="newPro" /> Sản Phẩm Mới </br>
            <input type="checkbox" name="oldPro" /> Sản Phẩm Đã Qua Sử Dụng </br>
            <input type="checkbox" name="importPro"/> Sản Phẩm Nhập Khẩu </br>
            <input type="checkbox" name="promotionPro"/> Sản Phẩm Khuyến Mãi </br>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Price" value ="{!! old('txtPrice') !!}"/>
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro') !!}</textarea>
            <script type="text/javascript">ckeditor("txtIntro")</script>
        </div>
        <div class="form-group">
            <label>Content 1: Đánh giá</label>
            <textarea class="form-control" rows="3" name="txtContent1">{!! old('txtContent1') !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent1")</script>
        </div>
         <div class="form-group">
            <label>Content 2: Thông số kỹ thuật</label>
            <textarea class="form-control" rows="3" name="txtContent2">{!! old('txtContent2') !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent2")</script>
        </div>
         <div class="form-group">
            <label>Content 3: Màu nội thất</label>
            <textarea class="form-control" rows="3" name="txtContent3">{!! old('txtContent3') !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent3")</script>
        </div>
         <div class="form-group">
            <label>Content 4: Màu ngoại thất</label>
            <textarea class="form-control" rows="3" name="txtContent4">{!! old('txtContent3') !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent4")</script>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages" value ="{!! old('fImages') !!}">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value ="{!! old('txtKeywords') !!}"/>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription" value ="{!! old('txtDescription') !!}"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Product Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
    <button type="button" class="btn btn-primary" id="addImages">Add Images Detail</button>
    <div id="insert"></div>
   
</div>
<form>
@endsection
               