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
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/accordion.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/css/caraousel.css')); ?>">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--===============================================================================================-->
</head>

<body>

  <nav style="background: var(--brown-secondary);" class=" navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('home-frontend')); ?>"><img src="<?php echo e(asset('frontend/images/upnormal.png')); ?>" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-end">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link text-white" href=" <?php echo e(route('keranjang')); ?>"><i class="fas fa-shopping-cart"></i></a>
            <a class="nav-link text-white" href=" <?php echo e(route('home-frontend')); ?>">Home</a>
            <a class="nav-link text-white" href=" <?php echo e(route('pemesanan')); ?>">Pemesanan</a>
            <a class="nav-link text-white" href=" <?php echo e(route('keuangan')); ?>">Keuangan</a>
            <a class="nav-link text-white" href=" <?php echo e(route('profile')); ?>">Profil</a>
            <a class="nav-link text-white" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php echo $__env->yieldContent('frontend-content'); ?>

  

  <script src="<?php echo e(asset('frontend/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/vendor/bootstrap/js/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
  

  
<script>
 (function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end 
        if (e.direction == "left") {
          $(
            ".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);
  </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\TUBESWADFINAL\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>