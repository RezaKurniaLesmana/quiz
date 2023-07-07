<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo e(asset('img/listrik.jpeg')); ?>">
    <title><?php echo e($title); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">

    <script src="<?php echo e(asset('js/jquery-3.6.3.js')); ?>"></script>
</head>

<body>
    <?php echo $__env->yieldContent('main-body'); ?>

    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

    <script>
        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html><?php /**PATH D:\xampp\htdocs\applications\quiz-reza\resources\views/auth/layouts/main.blade.php ENDPATH**/ ?>