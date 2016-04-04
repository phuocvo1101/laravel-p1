<?php $__env->startSection('controller','News'); ?>
<?php $__env->startSection('action','List'); ?>
<?php $__env->startSection('content'); ?>
                    <!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Name</th>
            <th>Date</th>
            <th>Category News</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    <?php $stt = 0; ?>
        <?php foreach($data as $item): ?>
        <?php $stt++; ?>
        <tr class="odd gradeX" align="center">
            <td><?php echo e($stt); ?></td>
            <td><?php echo $item['name']; ?></td>
            <td>
                <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans();; ?>

            </td>
            <td>
                <?php $cate_news = DB::table('cate_news')->where('id',$item['cate_news_id'])->first(); ?>
                <?php if(!empty($cate_news->name)): ?>
                    <?php echo $cate_news->name; ?>

                <?php endif; ?>
            </td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo URL::route('admin.news.getDelete', $item['id']); ?>" onclick= "return xacnhanxoa('Do You want delete this News')"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.news.getEdit', $item['id']); ?>">Edit</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>