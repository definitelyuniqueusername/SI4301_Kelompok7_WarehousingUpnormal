<?php $__env->startSection('title', "Keuangan"); ?>

<?php $__env->startSection('frontend-content'); ?>
<div class="container ">
  <div class="text-head-2 text-center py-5">Transaksi</div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Material</th>
          
          <th scope="col">Harga</th>
          <th scope="col">Status order</th>
          <th scope="col">Pembayaran</th>
          
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $getRiwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <tr>
          <th scope="row"><?php echo e($loop->iteration); ?></th>
          <td><?php echo e($item->tanggal_pengiriman); ?></td>
          <td><?php echo e($item->judul); ?></td>
          
          <td>Rp. <?php echo number_format($item->harga, 0, ',', '.'); ?></td>
          <td><?php echo e($item->status_order); ?></td>
          <td><?php echo e($item->pembayaran); ?></td>
          
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php if(Session::has('paySuccess')): ?>
    <script>
        swal("Berhasil", "<?php echo Session::get('paySuccess'); ?>", "success",{
            button: "OK",
        })
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/frontend/keuangan.blade.php ENDPATH**/ ?>