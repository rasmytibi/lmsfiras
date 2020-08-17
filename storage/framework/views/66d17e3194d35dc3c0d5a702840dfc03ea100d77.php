
<!-- signup section -->
<section class="signup-section spad">
    <div class="signup-bg set-bg" data-setbg=<?php echo e(asset("frontEnd/img/signup-bg.jpg")); ?>></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="signup-warp">
                    <div class="section-title text-white text-left">
                        <h2>Sign up to became a teacher</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                    </div>
                    <!-- signup form -->

                        <?php echo $__env->make("shared.msg", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form class="signup-form" method="POST" enctype="multipart/form-data" action="<?php echo e(route("teacher-register")); ?>">
                            <?php echo csrf_field(); ?>
                            <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Your Name" >
                            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Your E-mail">
                            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Your password">
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">

                            <input  type="file" name="imageFile" class="fileinput-controls" >

                            <button  type="submit" class="site-btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signup section end -->

<?php /**PATH C:\laragon\www\lms\resources\views/frontEnd/layouts/signup.blade.php ENDPATH**/ ?>