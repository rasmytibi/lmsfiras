

<!-- Header section -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <img src="<?php echo e(asset('storage/' . $setting->logo)); ?>" style="width: 160px">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <?php if(!auth()->check()): ?>{

                <a href="<?php echo e(route('login')); ?>" class="site-btn header-btn">Login</a>
                }<?php endif; ?>
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="<?php echo e(route('coursess')); ?>">Courses</a></li>
                        <li><a href="<?php echo e(route('show_blogs')); ?>">News</a></li>
                        <li><a href="<?php echo e(route('contact-me')); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header section end -->
<?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/layouts/header.blade.php ENDPATH**/ ?>