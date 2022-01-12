<?php $__env->startSection('title', "Keranjang"); ?>

<?php $__env->startSection('frontend-content'); ?>
<div class="container">
  <form action="<?php echo e(url('/keranjang/transaksi')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="text-head-2 text-center py-5">Keranjang</div>
    <div class="row">
      
      
    </div>
    <div class="">
      <?php $__currentLoopData = $getCartMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="d-flex">
            
            <div class="">
              <p><b><?php echo e($item->judul); ?></b></p>
              <p><?php echo e($item->deskripsi); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <b> 
            <p class="float-right">Rp. <?php echo number_format($item->harga, 0, ',', '.'); ?></p>
          </b>
        </div>
      </div>
      <hr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="text-head-3 text-left">
      Pengiriman
    </div>
    <hr style="  border-top: 4px solid var(--yellow-primary);">
    <label for="alamat">Alamat Pengiriman</label>
    <input id="alamat" class="input100 card-custom" type="text" name="alamat_pengiriman" value="Upnormal dago"
      placeholder="Alamat">
      <br>
    <label for="waktu">Waktu Pengiriman</label>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <input id="waktu" class="input100 card-custom" type="text" name="tanggal_pengiriman" value="3 desember 2021"
              placeholder="Tanggal">
          </div>
          <div class="col-md-6">
            <input id="waktu" class="input100 card-custom" type="text" name="waktu_pengiriman" value="13.00" placeholder="Jam">
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
    <div class="row my-4">
      <div class="col-md-6">
        <div class="text-head-3 text-left">Total tagihan</div>
      </div>
      <div class="col-md-6">
        <div class="text-head-3 text-right">Rp. <?php echo number_format($getCartMenu->sum('harga') + 30000, 0, ',', '.'); ?></div>
      </div>
    </div>
    <div class="my-3">
      <div class="text-head-3 text-left">
        Ringkasan
      </div>
      <hr style="  border-top: 4px solid var(--yellow-primary);">
      <div class="row my-4">
        <div class="col-md-6">
          <p>Total Harga</p>
        </div>
        <div class="col-md-6">
          <p class="text-right">Rp. <?php echo number_format($getCartMenu->sum('harga'), 0, ',', '.'); ?></p>
        </div>
      </div>
      <hr>
      <div class="row my-4">
        <div class="col-md-6">
          <p>Pengiriman</p>
        </div>
        <div class="col-md-6">
          <p class="text-right">Rp 30.000</p>
        </div>
      </div>
      <hr>
      <div class="row my-4">
        <div class="col-md-6">
          <p>Diskon</p>
        </div>
        <div class="col-md-6">
          <p class="text-right">-</p>
        </div>
      </div>
      <hr>
      <div class="my-2 pb-2">
        <button type="submit" class="login100-form-btn">
          Lanjut ke Pembayaran
        </button>
      </div>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/frontend/keranjang.blade.php ENDPATH**/ ?>