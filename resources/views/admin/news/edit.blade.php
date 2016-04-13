@extends('admin.master')
@section('controller','News')
@section('action','Edit')
@section('content')
<style type="text/css">
    .img_current { width: 150px;}
</style>
<form action="" method="POST" name="frmEditNews" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
    @include('admin.blocks.errors')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
                <?php cate_parent($cate_news,0,"--",$news['cate_news_id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{!! old('txtName'), isset($news['name'])? $news['name']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro'), isset($news['intro'])? $news['intro']:null  !!}</textarea>
            <script type="text/javascript">ckeditor('txtIntro')</script>
        </div>
       <div class="form-group">
            <label>Content: </label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent'), isset($news['content'])? $news['content']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        <div class="form-group">
            <label>Images Current </label>
            <img class="img_current" src="{{ asset('upload/'.$news['image']) }}"  />
            <input type="hidden" name="img_current" value="{{ $news['image'] }}"/>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords'), isset($news['keywords'])? $news['keywords']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription'), isset($news['description'])? $news['description']:null  !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">News Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
</div>
</form>
@endsection