<?php $__env->startSection('controller','Tin Tức - Khuyến Mãi - Giới Thiệu'); ?>
<?php $__env->startSection('action','Add'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    #insert {margin-top: 20px;}
</style>
<form action="<?php echo url('admin/news/add'); ?>" method="POST" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
<?php echo $__env->make('admin.blocks.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        <div class="form-group">
            <label>News categories</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
                <?php cate_parent($cate_news,0,"--",old('sltParent')) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value ="<?php echo old('txtName'); ?>" />
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro"><?php echo old('txtIntro'); ?></textarea>
            <script type="text/javascript">ckeditor("txtIntro")</script>
        </div>
         <div class="form-group">
            <label>Content :</label>
            <textarea class="form-control" rows="3" name="txtContent"><?php echo old('txtContent'); ?></textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages" value ="<?php echo old('fImages'); ?>">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value ="<?php echo old('txtKeywords'); ?>"/>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription" value ="<?php echo old('txtDescription'); ?>"></textarea>
        </div>
        <button type="submit" class="btn btn-default">News Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
</div>
<form>
<?php $__env->stopSection(); ?>
               
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>