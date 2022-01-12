<?php $__env->startSection('title', "FAQ"); ?>

<?php $__env->startSection('frontend-content'); ?>
<div style="min-height: 100vh" class="container-custom">
  <div class="text-head-2 text-center pb-3 pt-5">FAQ</div>
  <div id="main">
    <div class="container">
      <div class="accordion" id="faq">

        <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
          <div class="card-header" id="faqhead<?php echo e($item->id); ?>">
            <a href="#" class="btn btn-header-link collapsed text-head-3" data-toggle="collapse" data-target="#faq<?php echo e($item->id); ?>"
              aria-expanded="true" aria-controls="faq1"><?php echo e($item->judul); ?></a>
          </div>
          <div id="faq<?php echo e($item->id); ?>" class="collapse" aria-labelledby="faqhead<?php echo e($item->id); ?>" data-parent="#faq">
            <div class="card-body">
            <?php echo e($item->deskripsi); ?>

            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/frontend/faq.blade.php ENDPATH**/ ?>