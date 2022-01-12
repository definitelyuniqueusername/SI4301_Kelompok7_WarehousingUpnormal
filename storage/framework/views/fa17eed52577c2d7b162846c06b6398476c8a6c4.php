<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo e(asset('frontend/images/logo_svg.svg')); ?>" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/vendor/bootstrap/css/bootstrap.min.css')); ?>">

  <!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/main.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/custom.css')); ?>">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--===============================================================================================-->
</head>

<body>

  <?php echo $__env->yieldContent('auth-content'); ?>

  <!--===============================================================================================-->
  <script src="<?php echo e(asset('frontend/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
  <!--===============================================================================================-->
  <script src="<?php echo e(asset('frontend/vendor/bootstrap/js/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>

</html><?php /**PATH C:\Users\denis\Documents\GitHub\SI4301_Kelompok7_WarehousingUpnormal\resources\views/layouts/auth.blade.php ENDPATH**/ ?>