<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Tiki Booking System</title>
    <script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>" />

    <?php echo $__env->yieldContent('styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>" />
</head>

<body>



    <?php echo $__env->yieldContent('content'); ?>


    <?php echo $__env->yieldContent('scripts'); ?>


    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.7.0.js')); ?>"></script>
    <script src="<?php echo e(asset('js/axios.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH E:\Laravel\Projects from Git\module-12-main\resources\views/layout/app.blade.php ENDPATH**/ ?>