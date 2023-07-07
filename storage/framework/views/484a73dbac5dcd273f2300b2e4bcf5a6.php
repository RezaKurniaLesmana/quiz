

<?php $__env->startSection('main-body'); ?>

<?php if(session()->has('pesan')): ?>
        <?php echo session('pesan'); ?>

<?php endif; ?>

<div class="login-page">
    <div class="form">
      <form class="register-form" action="/register" method="post">
        <h3>Register Now</h3>
        <hr>
        <?php echo csrf_field(); ?>

        <input type="email" placeholder="email" name="user_email" required/>
        <input type="password" placeholder="password" name="password" required/>
        <input type="text" placeholder="nama" name="user_nama" required/>
        <textarea name="user_alamat" placeholder="Isi alamat..."></textarea>
        <input type="text" placeholder="No Hp" name="user_hp" required/>
        <input type="text" placeholder="Kode Pos" name="user_pos" required/>

        <button type="submit">create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

      <form class="login-form" action="/login" method="post">
        <h3>Login</h3>
        <hr>
        <?php echo csrf_field(); ?>

        <input type="text" placeholder="username" name="user_email" required/>
        <input type="password" placeholder="password" name="password" required/>
        <button type="submit">login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ary\quiz-reza\resources\views/auth/login.blade.php ENDPATH**/ ?>