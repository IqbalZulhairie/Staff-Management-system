<?php echo $__env->make('layout/admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>User (Edit)</h3>

<form action="/user/<?php echo e($d->u_id); ?>" method="post">
    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo e($d->u_name); ?>">
    </div>

    <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo e($d->u_username); ?>">
    </div>

    <div class="mb-3">
        <label for="type">Type</label>
        <select name="type" class="form-control">
            <?php echo $opt_type; ?>

        </select>
    </div>

    <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <?php echo $opt_status; ?>

        </select>
    </div>

    <div class="mb-3">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>
<?php echo $__env->make('layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\staff-app\resources\views/user/edit.blade.php ENDPATH**/ ?>