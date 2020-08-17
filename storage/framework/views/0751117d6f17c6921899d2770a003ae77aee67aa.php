
<!-- Hero section -->
<section class="hero-section set-bg" data-setbg=<?php echo e(asset("frontEnd/img/bg.jpg")); ?>>
    <div class="container">
        <div class="hero-text text-white">
            <h2>Get The Best Free Online Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php echo $__env->make("shared.msg2", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if(!auth()->check()): ?>
                <form class="intro-newslatter" method="POST" action="<?php echo e(route("student-register")); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="text" placeholder="Name" name="name">
                    <input type="text" class="last-s" placeholder="E-mail" name="email">
                    <input type="password"  placeholder="Password" name="password">
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">

                    <button class="site-btn">Sign Up Now Student</button>
                </form>
                    <?php else: ?>


                    <h2 style="font-weight: bold;color: white;text-align: center" >
                        Welcome Dear
                        <?php echo e(auth()->user()->name); ?>

                        In Our E-Learning Site</h2>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->
<?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/layouts/hero.blade.php ENDPATH**/ ?>