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
                <div class="card-header"><?php echo e(__('List Transaksi')); ?></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col" class="text-center">Tanggal</th>
                                <th scope="col" class="text-center w-25">Material</th>
                                <th scope="col" class="text-center">Harga</th>
                                <th scope="col" class="text-center">Status Order</th>
                                <th scope="col" class="text-center">Pembayaran</th>
                                <th scope="col" class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $getList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row" class="text-center"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($item->tanggal_pengiriman); ?></td>
                                <td><?php echo e($item->deskripsi); ?></td>
                                <td>Rp. <?php echo number_format($item->harga, 0, ',', '.'); ?></td>
                                <td><?php echo e($item->status_order); ?></td>
                                <td><?php echo e($item->pembayaran); ?></td>
                                <td class="text-center">
                                    <form action="<?php echo e(url('/back-transaksi')); ?>/<?php echo e($item->id); ?>/proses" method="POST" class="d-inline">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm btn-info btn-circle">
                                            Dalam Proses
                                        </button>
                                    </form>
                                    |
                                    <form action="<?php echo e(url('/back-transaksi')); ?>/<?php echo e($item->id); ?>/perjalanan" method="POST" class="d-inline">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm btn-info btn-circle">
                                            Dalam Perjalanan
                                        </button>
                                    </form>
                                    |
                                    <form action="<?php echo e(url('/back-transaksi')); ?>/<?php echo e($item->id); ?>/done" method="POST" class="d-inline">
                                        <?php echo method_field('PUT'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm btn-info btn-circle">
                                            Diterima
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/backend/transaksi/list.blade.php ENDPATH**/ ?>