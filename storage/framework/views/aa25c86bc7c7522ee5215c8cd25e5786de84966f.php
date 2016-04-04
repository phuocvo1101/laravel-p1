
<?php $__env->startSection('title', 'layout template'); ?>
<?php $__env->startSection('noidung'); ?>
Day la trang layout
<?php $__env->stopSection(); ?>
<?php echo $__env->make('views.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>