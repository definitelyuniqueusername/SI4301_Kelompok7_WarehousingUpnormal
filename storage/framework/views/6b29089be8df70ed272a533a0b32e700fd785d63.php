<?php $__env->startSection('title', "Login"); ?>

<?php $__env->startSection('auth-content'); ?>
<div class="limiter">
    <div class="container-login100">
        <div class="flex justify-content-center pb-2 custom-image">
            <img src="<?php echo e(asset('frontend/images/upnormal_svg.svg')); ?>" alt="" srcset="">
        </div>
        <div class="card-custom" style="padding: 2rem;">
            <form method="POST" action="<?php echo e(route('login')); ?>" class="validate-form">
                <?php echo csrf_field(); ?>
                <span class="login100-form-title">
                    Selamat Datang
                    <p>Masuk dengan akunmu</p>
                </span>

                <div class="wrap-input100 validate-input">
                    <input id="email" type="email" class="input100 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">

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
                <div class="wrap-input100 validate-input">
                    <input id="password" type="password" class="input100 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

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

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Masuk
                    </button>
                </div>

                <div class="text-center pt-3">
                    <span class="txt1">
                        Lupa password?
                    </span>
                    <a class="txt2" href="<?php echo e(route('password.request')); ?>">
                        Atur ulang
                    </a>
                </div>
                <div class="text-center pt-3">
                    <span class="txt1">
                        Belum mempunyai akun ?
                    </span>
                    <a class="txt2" href="<?php echo e(route('register')); ?>">
                        Daftar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\denis\Documents\GitHub\SI4301_Kelompok7_WarehousingUpnormal\resources\views/auth/login.blade.php ENDPATH**/ ?>