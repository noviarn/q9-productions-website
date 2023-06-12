
<?php $__env->startSection('title', 'Admin-q9p'); ?>
<?php $__env->startSection('maincontent'); ?>   
            
            <main class="container">
            <div class="form bg-white shadow-sm p-md-5 border text-center" style="border-radius: 25px;"> 
                <form action="<?php echo e(route('login.post')); ?>" method="post">
            
                <?php echo csrf_field(); ?>
                    <h1 class="h2 fw-bold">Sign In Here</h1>
                    <h5 class="h5 mb-3 fs-5 text-muted">Hi, please sign in to see our recomendation healthy food.</h5>
                    <i class="bi bi-person-circle"></i>

                    <div class="form-floating mb-3">
                    <input type="username" name="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> id-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username" placeholder="Username" autofocus required>
                    <label for="floatingInput">Username</label>
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    </div>

                    
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                
                </form>
            </div>
        </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.login-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/login.blade.php ENDPATH**/ ?>