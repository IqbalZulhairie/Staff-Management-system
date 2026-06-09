<?php echo $__env->make('layout/admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Staff Info    <a href="staff/create" class="btn btn-sm btn-dark">New Staff</a></h3>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Staff No</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>#</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($d->s_name); ?></td>
            <td><?php echo e($d->s_number); ?></td>
            <td><?php echo e($d->s_phone); ?></td>
            <td><?php echo e($d->s_email); ?></td>
            <td><?php echo e($d->s_address); ?></td>
            <td>
                <a href="/staff/<?php echo e($d->s_id); ?>/edit">Edit</a>
                <a class="link-danger" href="javascript:void(0)" onclick="del('staff/<?php echo e($d->s_id); ?>','<?php echo e(csrf_token()); ?>','staff')">Delete</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $__env->make('layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\staff-app\resources\views/staff/list.blade.php ENDPATH**/ ?>