<?php $__env->startSection('controller','Category'); ?>
<?php $__env->startSection('action','List'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        <?php foreach($data as $item): ?>
        <?php $stt = $stt +1; ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo e($stt); ?></td>
            <td><?php echo $item['name']; ?></td>
            <td>
                <?php if($item['parent_id'] == 0): ?>
                    <?php echo "None"; ?>

                <?php else: ?>
                    <?php
                    $parent = DB::table('cates')->where('id',$item['parent_id'])->first();
                    //var_dump($parent);
                      echo $parent->name;
                    ?>
                <?php endif; ?>
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có muốn xóa không')" href="<?php echo URL::route('admin.cate.getDelete',$item['id']); ?>"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.cate.getEdit',$item['id']); ?>">Edit</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
               
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>