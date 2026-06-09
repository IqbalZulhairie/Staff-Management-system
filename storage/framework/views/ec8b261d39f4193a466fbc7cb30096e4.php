<?php echo $__env->make('layout/admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
$arr_type = ['1'=>'Admin', '2'=>'Clerk'];
$arr_status = ['Not Active', 'Active'];
?>
<h3>List of Users</h3>
<div class="mb-3">
    <?php if(session('success_msg')): ?>
     <div class="alert alert-success">
       <?php echo session('success_msg'); ?>

     </div>
     <?php endif; ?>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Type</th>
            <th>Status</th>
            <th>#</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($d->u_name); ?></td>
            <td><?php echo e($d->u_username); ?></td>
            <td><?php echo e($arr_type[$d->u_type]); ?></td>
            <td><?php echo e($arr_status[$d->u_status]); ?></td>
            <td>
                <a href="/user/<?php echo e($d->u_id); ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $__env->make('layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\staff-app\resources\views/user/home.blade.php ENDPATH**/ ?>