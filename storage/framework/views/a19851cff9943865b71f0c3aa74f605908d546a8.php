<?php $__env->startSection('title', 'Ubah password'); ?>;

<?php $__env->startSection('auth-content'); ?>
<div class="limiter">
  <div class="container-login100">
    <div class="flex justify-content-center pb-2 custom-image">
      <img src="<?php echo e(asset('frontend/images/upnormal_svg.svg')); ?>" alt="" srcset="">
    </div>
    <div class="card-custom" style="padding: 2rem;">
      <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo e(session('status')); ?>

        </div>
      <?php endif; ?>
  
      <form action="<?php echo e(url('/lupa-password')); ?>" method="POST" class=" validate-form">
        <?php echo csrf_field(); ?>
        <span class="login100-form-title">
          Atur Ulang Password
          <p>Masukan email</p>
        </span>

        <div class="wrap-input100 validate-input">
          <input id="email" type="email" class="input100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="email">

          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="container-login100-form-btn">
          <button type="submit" class="login100-form-btn">
            Kirim
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>