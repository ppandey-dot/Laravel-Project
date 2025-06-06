<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | UBold - Responsive Admin Dashboard Template</title>
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


</head>

<body class="authentication-bg">

    <div class="account-pages mt-5 mb-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <h3>GST Billing Software</h3>
                                </div>
                                <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                            </div>

                           <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>


                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                       <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block font-weight-bold"
                                            type="submit">
                                            Log In </button>
                                </div>

                            </form>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                   <!--  <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="#" class="text-white-50 ml-1">Forgot your password?</a></p>
                        </div> 
                    </div> -->
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt text-white-50">

    </footer>

    <!-- Vendor js -->
    <script src="<?php echo e(asset('public/assets/js2/vendor.min.js')); ?>"></script>

    <!-- App js-->
    <script src="<?php echo e(asset('public/assets/js2/app.min.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-project\gst_billing\resources\views/auth/login.blade.php ENDPATH**/ ?>