<?php $__env->startSection('title', "Pemesanan"); ?>

<?php $__env->startSection('frontend-content'); ?>
<div class="container-custom h-full">
  <div class="container">
    <div class="row pt-5">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="wrap-input100 validate-input">
          <!-- <span>
            <i class="fas fa-search"></i>
          </span> -->
          <input class="input100 card-custom" type="text" name="search" placeholder="search">
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    <div class="row">

      <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 my-3">
        <div class="card-custom p-3" style="width: 18rem;">
          <img class="card-img-top" style="height: 16rem;" src="<?php echo e(asset('upload/menu')); ?>/<?php echo e($item->gambar); ?>" alt="Card image cap">
          <div class="card-body">
            <h5><?php echo e($item->judul); ?></h5>
            <p class="card-text card-title"><?php echo e(\Illuminate\Support\Str::limit($item->deskripsi, 30, $end='...')); ?></p>
            <div class="text-head-3 text-left" style="color: var(--yellow-primary);">Rp <?php echo e($item->harga); ?></div>
            <form action="<?php echo e(url('keranjang/add')); ?>/<?php echo e($item->id); ?>" method="post" class="mt-3">
              <?php echo csrf_field(); ?>
              <button type="submit" class="login100-form-btn">
                <i class="fa fa-plus"></i>&nbsp; Keranjang
              </button>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php if(Session::has('keranjangSuccess')): ?>
    <script>
        swal("Berhasil", "<?php echo Session::get('keranjangSuccess'); ?>", "success",{
            button: "OK",
        })
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/frontend/pemesanan.blade.php ENDPATH**/ ?>