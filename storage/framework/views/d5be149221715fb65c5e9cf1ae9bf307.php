<?php echo $__env->make('layout/clerk_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3>New Staff Info </h3>

<div class="mb-3">
    <?php if(session('error_msg')): ?>
    <div class="alert alert-danger">
        <?php echo session('error_msg'); ?>

    </div>
    <?php endif; ?>


    <?php if(session('success_msg')): ?>
     <div class="alert alert-success">
       <?php echo session('success_msg'); ?>

     </div>
     <?php endif; ?>
</div>

<form action="/clerk" method="post">
    <div class="mb-3">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="mb-3">
    <label for="number">Staff No.</label>
        <input type="text" class="form-control" name="number">
    </div>

    <div class="mb-3">
    <label for="phone">Phone No</label>
        <input type="number" class="form-control" name="phone">
    </div>

    <div class="mb-3">
    <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="mb-3">
    <label for="address">Address</label>
        <textarea name="address" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>
</form>

<?php echo $__env->make('layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\staff-app\resources\views/clerk/home.blade.php ENDPATH**/ ?>