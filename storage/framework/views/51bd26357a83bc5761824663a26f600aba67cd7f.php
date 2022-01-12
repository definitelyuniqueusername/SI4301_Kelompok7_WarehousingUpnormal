<?php $__env->startSection('auth-content'); ?>

<div class="limiter">
    <div class="container-login100">
      <div class="flex justify-content-center pb-2 custom-image">
        <img src="<?php echo e(asset('frontend/images/upnormal_svg.svg')); ?>" alt="" srcset="">
      </div>
      <div class="card-custom" style="padding: 2rem;">
        <form  method="POST" action="<?php echo e(url('/update-password')); ?>" class=" validate-form">
          <?php echo method_field('put'); ?>
          <?php echo csrf_field(); ?>
          <span class="login100-form-title">
            Atur Ulang Password
            <p>Massukan password anda</p>
          </span>

          <div class="wrap-input100 validate-input">
            <input id="password" type="password" class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password" placeholder="Password">

            <?php $__errorArgs = ['password'];
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

          <div class="wrap-input100 validate-input">
            <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
          </div>

          <input name="email" value="<?php echo e($user->email); ?>" type="hidden">

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

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/auth/passwords/reset2.blade.php ENDPATH**/ ?>