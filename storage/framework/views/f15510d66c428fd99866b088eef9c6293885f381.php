<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Pesan!</strong> <?php echo e(session('status')); ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php elseif(session('error')): ?>
<div class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Pesan!</strong> <?php echo e(session('error')); ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php endif; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Kebijakan Privasi')); ?></div>
                <div class="card-body">
                    <form action="<?php echo e(url('/back-kebijakan-privasi/update',$getDetailKP->id)); ?>" method="POST">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-2">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" id="desc" rows="5" placeholder="Deskripsi kebijakan privasi" class="form-control <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($getDetailKP->deskripsi); ?></textarea>
                            <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div id="desc" class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-2 d-grid gap-2">
                            <button type="submit" class="btn btn-outline-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/backend/kebijakan_privasi/form.blade.php ENDPATH**/ ?>