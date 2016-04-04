<?php $__env->startSection('controller','Product'); ?>
<?php $__env->startSection('action','Edit'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .img_current { width: 150px;}
    .imgDetail { width: 170px;}
    .icon_del {position: relative;top:-40px;left: -20px;}
    #insert {margin-top: 20px;}
</style>
<form action="" method="POST" name="frmEditProduct" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom:120px">
    <?php echo $__env->make('admin.blocks.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
                <?php cate_parent($cate,0,"--",$product['cate_id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value="<?php echo old('txtName'), isset($product['name'])? $product['name']:null; ?>" />
        </div>
        <div class="form-group">
            <label>Information: </label> </br>
            <input  type="checkbox" name="newPro" <?php if($product['new_product'] == 1): ?> checked="checked" <?php endif; ?> /> Sản Phẩm Mới </br>
            <input type="checkbox" name="oldPro" <?php if($product['old_product'] == 1): ?> checked="checked" <?php endif; ?> /> Sản Phẩm Đã Qua Sử Dụng </br>
            <input type="checkbox" name="importPro" <?php if($product['promotion_product'] == 1): ?> checked="checked" <?php endif; ?> /> Sản Phẩm Nhập Khẩu </br>
            <input type="checkbox" name="promotionPro" <?php if($product['import_product'] == 1): ?> checked="checked" <?php endif; ?> /> Sản Phẩm Khuyến Mãi </br>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Price" value="<?php echo old('txtPrice'), isset($product['price'])? $product['price']:null; ?>" />
        </div>
        <div class="form-group">
            <label>Intro</label>
            <textarea class="form-control" rows="3" name="txtIntro"><?php echo old('txtIntro'), isset($product['intro'])? $product['intro']:null; ?></textarea>
            <script type="text/javascript">ckeditor('txtIntro')</script>
        </div>
       <div class="form-group">
            <label>Content 1: Đánh giá</label>
            <textarea class="form-control" rows="3" name="txtContent1"><?php echo old('txtContent1'), isset($product['content1'])? $product['content1']:null; ?></textarea>
            <script type="text/javascript">ckeditor("txtContent1")</script>
        </div>
         <div class="form-group">
            <label>Content 2: Thông số kỹ thuật</label>
            <textarea class="form-control" rows="3" name="txtContent2"><?php echo old('txtContent2'), isset($product['content2'])? $product['content2']:null; ?></textarea>
            <script type="text/javascript">ckeditor("txtContent2")</script>
        </div>
         <div class="form-group">
            <label>Content 3: Màu nội thất</label>
            <textarea class="form-control" rows="3" name="txtContent3"><?php echo old('txtContent3'), isset($product['content3'])? $product['content3']:null; ?></textarea>
            <script type="text/javascript">ckeditor("txtContent3")</script>
        </div>
         <div class="form-group">
            <label>Content 4: Màu ngoại thất</label>
            <textarea class="form-control" rows="3" name="txtContent4"><?php echo old('txtContent4'), isset($product['content4'])? $product['content4']:null; ?></textarea>
            <script type="text/javascript">ckeditor("txtContent4")</script>
        </div>
        <div class="form-group">
            <label>Images Current </label>
            <img class="img_current" src="<?php echo e(asset('upload/'.$product['image'])); ?>"  />
            <input type="hidden" name="img_current" value="<?php echo e($product['image']); ?>"/>
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="<?php echo old('txtKeywords'), isset($product['keywords'])? $product['keywords']:null; ?>" />
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" rows="3" name="txtDescription"><?php echo old('txtDescription'), isset($product['description'])? $product['description']:null; ?></textarea>
        </div>
        <button type="submit" class="btn btn-default">Product Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
   <?php foreach($image_detail as $key=>$item): ?>
    <div class="form-group" id=<?php echo e($key); ?>>
        <img class="imgDetail" src="<?php echo e(asset('upload/detail/'.$item['image'])); ?>" idHinh="<?php echo e($item['id']); ?>" id="<?php echo e($key); ?>" /> 
        <a href="javascript:void(0)" type="button" id="del_img_detail" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>     
    </div>
    <?php endforeach; ?>
    <button type="button" class="btn btn-primary" id="addImages">Add Images Detail</button>
    <div id="insert"></div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>