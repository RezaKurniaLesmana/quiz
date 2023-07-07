

<?php $__env->startSection('main-body'); ?>
<?php if(session()->has('loginSuccess')): ?>
        <?php echo session('loginSuccess'); ?>

<?php endif; ?>

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="alert alert-success" role="alert">
        <h3>
            Selamat datang, <?php echo e(auth()->user()->user_nama); ?>!
        </h3>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\applications\quiz-reza\resources\views/home/index.blade.php ENDPATH**/ ?>