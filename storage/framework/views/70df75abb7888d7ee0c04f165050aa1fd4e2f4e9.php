<?php $__env->startSection('controller','User'); ?>
<?php $__env->startSection('action','Edit'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST">
    <?php echo $__env->make('admin.blocks.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"  />
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value="<?php echo e($user->username); ?>" disabled />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="<?php echo e($user->email); ?>" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" <?php if($user->level == 1): ?> checked="checked" <?php endif; ?> type="radio">

                Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" type="radio" <?php if($user->level == 2): ?> checked="checked" <?php endif; ?>>Member
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
<?php $__env->stopSection(); ?>
               
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>