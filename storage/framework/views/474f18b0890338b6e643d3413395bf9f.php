<?php echo $__env->make('layout/admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>Staff Info (Edit) <a href="/staff" class="btn btn-sm btn-dark">Back</a></h3>
<form action="/staff/<?php echo e($d->s_id); ?>" method="post">
    <input type="hidden" name="_method" value="put">
    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo e($d->s_name); ?>">
    </div>

    <div class="mb-3">
    <label for="number">Staff No.</label>
        <input type="text" class="form-control" name="number" value="<?php echo e($d->s_number); ?>">
    </div>

    <div class="mb-3">
    <label for="phone">Phone No</label>
        <input type="number" class="form-control" name="phone" value="<?php echo e($d->s_phone); ?>">
    </div>

    <div class="mb-3">
    <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email" value="<?php echo e($d->s_email); ?>">
    </div>

    <div class="mb-3">
    <label for="address">Address</label>
        <textarea name="address" class="form-control"><?php echo e($d->s_address); ?></textarea>
    </div>

    <div class="mb-3">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>

<?php echo $__env->make('layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\staff-app\resources\views/staff/edit.blade.php ENDPATH**/ ?>