<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Toyota - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
    <link href="<?php echo e(url('home/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('home/css/flexslider.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('home/css/style.css')); ?>" rel="stylesheet">

	<!-- global js -->
    <?php echo Html::script('/home/js/jquery.min.js'); ?>

    <?php echo Html::script('/home/js/jquery.flexslider.js'); ?>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div id="overlay" class="overlay"></div>
    <!-- Header -->
    <?php echo $__env->make('home.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End header -->

    <!-- Start slider -->
	<?php echo $__env->make('home.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End slider. -->
    <section>
        <div class="container toplink clearfix">
            <ul>
                <li><a href="#">Đăng ký lái thử</a></li>
                <li><a href="#">Mua xe trả góp</a></li>
                <li><a href="#">Tài chính &amp; Bảo hiểm</a></li>
                <li><a href="#">Bảng giá xe</a></li>
                <li><a href="#">Chứng nhận xe cũ chính hãng</a></li>
            </ul>            
            <?php echo $__env->yieldContent('infomaster'); ?>
        </div>
    </section>
    <!-- Content center -->
    <section>
        <div class="container clearfix content-center">
            <div class="row-data">
                <!-- Left content -->
                <?php echo $__env->make('home.leftMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- End left content -->

                <!-- Right content -->
                <?php echo $__env->yieldContent('right-content'); ?>
                <!-- End right content -->
                <div class="clearfix"></div>
            </div>

            <!-- Tin tuc -->
                <?php echo $__env->make('home.tintuchome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- End tin tuc -->

            <!-- Tin khuyen mai -->
                <?php echo $__env->make('home.tinkhuyenmai', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- End tin khuyen mai -->
        </div>
    </section>

    <script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>

    <!-- End content center -->

    <!-- Infor footer -->
        <?php echo $__env->make('home.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End footer -->
</body>
</html>