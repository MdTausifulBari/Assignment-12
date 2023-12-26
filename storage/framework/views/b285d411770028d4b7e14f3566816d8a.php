<?php $__env->startSection('content'); ?>
    <div class="bodyStyle">
        <div class="loginPage">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="loginForm">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="loginCard">
                                <h3 class="text-warning text-uppercase">Bus Ticket Counter</h3>
                                <div class="mobileLogo">
                                    <img src="<?php echo e(asset('')); ?>" alt="" srcset="">
                                </div>
                                <div class="loginLogo">
                                    <h5 class="text-dark text-uppercase">Login</h5>
                                </div>
                                
                                <div id="adminForm">
                                    <form action="<?php echo e(url('/login')); ?>" class="loginForm" id="" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" name="userphone" class="form-control text-center"
                                            id="" placeholder="Enter your phone number" required>
                                        <input type="password" name="password" class="form-control text-center"
                                            id="" placeholder="Enter your password" required>

                                        <input class="btn btn-login" name="submit" type="submit" value="Login">
                                    </form>
                                </div>
                                
                                <div>
                                    <p class=" text-light">Don't have account ?</p>
                                    <a class=" btn btn-success" href="<?php echo e(url('registration')); ?>">Create New Account</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php if(session('success')): ?>
        <script>
            swal("Success !", "<?php echo e(session('success')); ?>", "success", {
                button: false,
                // button: "OK",
                timer: 2000,
            })
        </script>
    <?php elseif(session('error')): ?>
        <script>
            swal("Error !", "<?php echo e(session('error')); ?>", "error", {
                button: false,
                // button: "OK",
                timer: 3000,
            })
        </script>
    <?php else: ?>
        <div></div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\Projects from Git\module-12-main\resources\views/UserLogin.blade.php ENDPATH**/ ?>