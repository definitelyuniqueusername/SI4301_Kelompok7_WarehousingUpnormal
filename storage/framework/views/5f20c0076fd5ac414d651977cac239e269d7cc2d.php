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
                <div class="card-header"><?php echo e(__('Tambah Berita')); ?></div>
                <div class="card-body">
                    <form action="<?php echo e(url('/back-berita/add')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-2">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" placeholder="Berita Makanan Enak" value="<?php echo e(old('title')); ?>">
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div id="title" class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-2">
                            <label for="desc">Deskripsi</label>
                            <textarea name="desc" id="desc" rows="5" placeholder="Deskripsi berita" class="form-control <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('desc')); ?></textarea>
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
                        <div class="form-group mb-3">
                            <label for="image">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" class="form-control" name="image">
                            </div>
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div id="image" class="invalid-feedback">
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
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('List Berita')); ?></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center" style="width: 200px;">Gambar</th>
                                <th scope="col" class="text-center">Judul</th>
                                <th scope="col" class="text-center w-50">Deskripsi</th>
                                <th scope="col" class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $getBerita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row" class="text-center align-middle"><?php echo e($loop->iteration); ?></th>
                                <td>
                                    <img src="<?php echo e(asset('upload/berita')); ?>/<?php echo e($item->gambar); ?>" class="img-fluid" alt="...">
                                </td>
                                <td class="text-center align-middle"><?php echo e($item->judul); ?></td>
                                <td class="align-middle"><?php echo e($item->deskripsi); ?></td>
                                <td class="text-center align-middle">
                                    <form action="<?php echo e(url('/back-berita')); ?>/<?php echo e($item->id); ?>/edit" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm btn-info btn-circle">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                    </form>
                                    |
                                    <form action="<?php echo e(url('/back-berita')); ?>/<?php echo e($item->id); ?>/drop" method="POST" class="d-inline">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm btn-danger btn-circle" onclick="return confirm('Hapus Data ?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/backend/berita/list.blade.php ENDPATH**/ ?>