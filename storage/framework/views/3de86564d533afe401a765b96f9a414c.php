<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

  <!-- Plugins css -->
  <!-- <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" /> -->

  <!-- App css -->
  <link href="<?php echo e(asset('public/assets/css2/bootstrap-creative.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
  <link href="<?php echo e(asset('public/assets/css2/app-creative.min.css')); ?>" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

  <link href="<?php echo e(asset('public/assets/css2/bootstrap-creative-dark.min.css')); ?>" rel="stylesheet" type="text/css" id="bs-dark-stylesheet"
    disabled />
  <link href="<?php echo e(asset('public/assets/css2/app-creative-dark.min.css')); ?>" rel="stylesheet" type="text/css" id="app-dark-stylesheet"
    disabled />

  <!-- icons -->
  <link href="<?php echo e(asset('public/assets/css2/icons.min.css')); ?>" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="<?php echo e(asset('public/style.css')); ?>">

</head>

<body data-layout-mode="detached"
  data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
      <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

          <!-- All-->

          <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
              role="button" aria-haspopup="false" aria-expanded="false">
              <img src="<?php echo e(asset('public/assets/images/users/user-1.jpg')); ?>" alt="user-image" class="rounded-circle" />
              <span class="pro-user-name ml-1">
                Geneva <i class="mdi mdi-chevron-down"></i>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
              <!-- item-->
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
              </div>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="fe-user"></i>
                <span>My Account</span>
              </a>

              <div class="dropdown-divider"></div>

              <!-- item-->
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                <i class="fe-log-out"></i>
                <span>Logout</span>
              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
            </div>
          </li>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
    
          <a href="<?php echo e(url('/')); ?>" class="logo logo-light text-center">
            <span class="logo-sm">
              <img src="<?php echo e(asset('public/assets/images/users/gst_logo.jpg')); ?>" alt="" height="35" />
            </span>
            <span class="logo-lg">
              <img src="<?php echo e(asset('public/assets/images/users/gst_logo.jpg')); ?>" alt="" height="50" />
            </span>
          </a>

        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
          <li>
            <button class="button-menu-mobile waves-effect waves-light">
              <i class="fe-menu"></i>
            </button>
          </li>

          <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- end Topbar -->
    <!--include sidebar-->

   <?php echo $__env->make('include/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">
        
        <?php echo $__env->yieldContent('content'); ?>
      </div>

     <!--  include footer-->
     <?php echo $__env->make('include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
  </div>

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- Vendor js -->
  <script src="<?php echo e(asset('public/assets/js2/vendor.min.js')); ?>"></script>

  <!-- Plugins js-->
  <script src="<?php echo e(asset('public/assets/libs2/flatpickr/flatpickr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/assets/libs2/apexcharts/apexcharts.min.js')); ?>"></script>

  <!-- Dashboar 1 init js-->
  <script src="<?php echo e(asset('public/assets/js2/pages/dashboard-1.init.js')); ?>"></script>

  <!-- App js-->
  <script src="<?php echo e(asset('public/assets/js2/app.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/script.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-project\gst_billing\resources\views/layout/app.blade.php ENDPATH**/ ?>