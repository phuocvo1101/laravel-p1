<?php $__env->startSection('title', 'Trang chủ'); ?>


<!-- <?php echo e($variable1); ?>

<?php echo e($infors['name']); ?> -->
    <!-- Slider  homeslide-->
    
    <!-- End Slider homeslide-->

<!-- Informaster -->
<?php $__env->startSection('infomaster'); ?>
    <div class="infomaster">
        <div class="hotline">
            <h2><?php echo e($infors['mobile']); ?></h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br><?php echo e($infors['name']); ?></h2>
    </div>
<?php $__env->stopSection(); ?>
<!-- End informaster -->

<?php $__env->startSection('right-content'); ?>
    <!-- Right content -->
                <div class="col-dl-9 right-content">
                    <div class="wrapper">
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe khuyến mãi<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Product Xe khuyen mai-->
                        <div class="content">
                        <?php if($promotion_product): ?>
                            <?php foreach($promotion_product as $item): ?>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="<?php echo URL::route('detailProduct', $item->id); ?>"><img src="<?php echo e(asset('upload/'.$item->image)); ?>" alt="E200 Edition E"></a>
                                    </div>
                                    <h4><a href="<?php echo URL::route('detailProduct', $item->id); ?>"><?php echo $item->name; ?></a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter"><?php echo number_format($item->price,0,',','.'); ?> VND</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End product xe khuyen mai -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe nhập khẩu<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>

                        <!-- Xe nhap khau -->
                        <div class="content">
                         <?php if($import_product): ?>
                            <?php foreach($import_product as $item): ?>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="<?php echo URL::route('detailProduct', $item->id); ?>"><img src="<?php echo e(asset('upload/'.$item->image)); ?>" alt="GLE400 4Matic"></a>
                                    </div>
                                    <h4><a href="<?php echo URL::route('detailProduct', $item->id); ?>"><?php echo $item->name; ?></a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter"><?php echo number_format($item->price,0,',','.'); ?> VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe nhap khau -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe đã qua sử dụng<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Xe cu -->
                        <div class="content">
                         <?php if($old_product): ?>
                            <?php foreach($old_product as $item): ?>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="<?php echo URL::route('detailProduct', $item->id); ?>"><img src="<?php echo e(asset('upload/'.$item->image)); ?>" alt="E400 AMG 2013"></a>
                                    </div>
                                    <h4><a href="<?php echo URL::route('detailProduct', $item->id); ?>"><?php echo $item->name; ?></a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter"><?php echo number_format($item->price,0,',','.'); ?> VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                             <?php endforeach; ?>
                        <?php endif; ?>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe cu -->
                    </div>
                </div>
                <!-- End right content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>