<?php $__env->startSection('title', "Home"); ?>

<?php $__env->startSection('frontend-content'); ?>
<div class="container-custom">
  <div class="container">
    <div class="d-flex justify-content-center ">
      <div class="py-5 text-head">Welcome to
        <span style="color: var(--yellow-primary)">
          UPNORMAL
        </span>
      </div>
    </div>
    
    <div class="text-head-2 text-center mb-3">Update dan Berita</div> 
    <div class="container-fluid">
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">

          
          
          <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="carousel-item card-berita-custom col-md-4 <?php if($item->id == 1): ?> active <?php endif; ?>">
            <a href="berita/<?php echo e($item->id); ?>">
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
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mt-4">
              <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                <i class="fa fa-lg fa-chevron-left"></i>
              </a>
              <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                <i class="fa fa-lg fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-head-2 pt-5 text-center">Tentang kami</div>

    <div class="row pt-3 pb-3">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <ul class="icons d-flex justify-content-between">
          <li><a href="#" class="icon"><i class="fab fa-youtube"></i></a></li>
          <li><a href="#" class="icon"><i class="fab fa-line"></i></a></li>
          <li><a href="#" target="_blank" class="icon"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#" target="_blank" class="icon"><i class="fab fa-linkedin"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-3"></div>
    </div>

   

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/frontend/home.blade.php ENDPATH**/ ?>