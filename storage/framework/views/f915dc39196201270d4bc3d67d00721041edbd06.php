<?php $__env->startSection('title', 'layout template'); ?>
<?php $__env->startSection('sidebar'); ?>
Nam phia tren
@parent
Nam phia duoi
<?php $__env->stopSection(); ?>
<?php $__env->startSection('noidung'); ?>
Day la trang sub
<?php $hoten ="Phuoc vo trainning"; ?>
<?php echo $hoten; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('views.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>