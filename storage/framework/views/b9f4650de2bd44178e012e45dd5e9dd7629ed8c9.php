<?php $__env->startSection('title', "Detail berita"); ?>

<?php $__env->startSection('frontend-content'); ?>

<div class="container-custom h-full">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-9">
        <div class="text-head-2 text-center pb-3 pt-5"><?php echo e($berita->judul); ?></div>
        <img src="<?php echo e(asset('upload/berita')); ?>/<?php echo e($berita->gambar); ?>" class="img-fluid-custom pb-4" alt="Responsive image">

        <p class="regular-text"><?php echo e($berita->deskripsi); ?></p>

      </div>
      <div class="col-md-3 ">
        <?php $__currentLoopData = $all_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="card mb-4 card-berita-custom">
          <a href="/berita/<?php echo e($item->id); ?>">
            <div class="card">
              <img class="img-fluid" alt="100%x280"
                src="<?php echo e(asset('upload/berita')); ?>/<?php echo e($item->gambar); ?>">
              <div class="card-body">
                <h4 class="card-title-1"><?php echo e($item->judul); ?></h4>
                </p>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/frontend/detail.blade.php ENDPATH**/ ?>