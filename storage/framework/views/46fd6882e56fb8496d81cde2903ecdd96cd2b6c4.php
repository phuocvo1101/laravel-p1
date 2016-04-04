<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Phuoc Vo - <?php echo $__env->yieldContent('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		#wapper {width:980px; height: auto; margin: 0 auto}
		#header {width: auto; height: 200px; background-color: red;}
		#content {width: auto; height: 500px; background-color: blue}
		#footer {width: auto; height: 100px; background-color: green}
	</style>
</head>
<body>
	<div id="wapper">
	<?php echo $__env->make('views.marquee',['mar_content'=>'khoa hoc lap trinh laravel'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div id="header">
			<?php $__env->startSection('sidebar'); ?>
			Day la menu

			<?php echo $__env->yieldSection(); ?>
		</div>
		<div id="content">
			<?php echo $__env->yieldContent('noidung'); ?>
		</div>
		<div id="footer"></div>
	</div>
	
</body>
</html>