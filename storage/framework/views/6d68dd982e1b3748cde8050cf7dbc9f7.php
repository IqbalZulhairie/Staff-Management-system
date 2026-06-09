<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery-3.6.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    
    <title>Staff Management System</title>
  </head>
  <body>
    <div class="mx-auto" style="width:300px;margin-top:30px;">
        <div class="card">
            <div class="card-header">Success Registration</div>
            <div class="card-body">
                <div class="mb-3" style="text-align:center;">
                    <img src="<?php echo e(asset('img/logo.png')); ?>" style="width:100px;height:auto;">
                </div>
                
                <div class="mb-3">
                    <?php if(session('success_msg')): ?>
                        <div class="alert alert-success">
                             <?php echo e(session('success_msg')); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html><?php /**PATH C:\laragon\www\staff-app\resources\views/success_register.blade.php ENDPATH**/ ?>