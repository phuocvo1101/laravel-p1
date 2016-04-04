<?php $__env->startSection('controller','User'); ?>
<?php $__env->startSection('action','List'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Username</th>
            <th>Level</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    <?php $stt = 0 ?>
        <?php foreach($data as $item): ?>
        <?php $stt++ ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo e($stt); ?></td>
            <td><?php echo e($item['username']); ?></td>
            <td>
                <?php if($item['level']==1): ?>
                    Admin
                <?php else: ?>
                    Member
                <?php endif; ?>
            </td>
            <td><?php echo e($item['email']); ?></td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có muốn xóa không')" href="<?php echo URL::route('admin.user.getDelete',$item['id']); ?>"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.user.getEdit',$item['id']); ?>">Edit</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
              
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>