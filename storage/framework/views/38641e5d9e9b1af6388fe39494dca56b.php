<!-- using withStatus function -->
                                <?php if(session('status')): ?>
                                 <div class="alert alert-success">
                                    
                                    <?php echo e(session('status')); ?>

                                   
                                </div>
                                <?php endif; ?>
                                 <?php if(session('error')): ?>
                                 <div class="alert alert-danger">
                                    
                                    <?php echo e(session('error')); ?>

                                   
                                </div>
                                 <?php endif; ?>
                                <!-- using with function key value -->
                               <!--  <div class="alert alert-success">
                                    <?php if(session('success')): ?>
                                    <?php echo e(session('success')); ?>

                                    <?php endif; ?>

                                </div> -->
                            <?php if(count($errors)): ?>
                            <div class="alert alert-danger">
                            <strong>Validation error: Please Fix the following issues</strong>
                            <ul><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            </div>
                            <?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel-project\gst_billing\resources\views/include/alert.blade.php ENDPATH**/ ?>