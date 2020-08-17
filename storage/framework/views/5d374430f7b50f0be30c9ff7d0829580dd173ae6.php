<!DOCTYPE html>
<html lang="en">
<head>
    <title>WebUni - Education Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="WebUni Education Template">
    <meta name="keywords" content="webuni, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->

    <link href="<?php echo e(asset("frontEnd/img/favicon.ico")); ?>" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset("frontEnd/css/bootstrap.min.css")); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset("frontEnd/css/font-awesome.min.css")); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset("frontEnd/css/owl.carousel.css")); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset("frontEnd/css/style.css")); ?>"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php echo $__env->make("frontEnd.layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<br>

<!-- Page info -->
<div class="page-info-section set-bg" data-setbg="<?php echo e(asset('frontEnd/img/page-bg/4.jpg')); ?>">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="/">Home</a>
            <span>Contact</span>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- search section -->
<section class="search-section ss-other-page">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2><span>Search your course</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <!-- search form -->
                    <form class="course-search-form">
                        <input type="text" placeholder="Course">
                        <input type="text" class="last-m" placeholder="Category">
                        <button class="site-btn btn-dark">Search Couse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search section end -->



<!-- Page -->
<section class="contact-page spad pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-warp">
                    <div class="section-title text-white text-left">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </p>
                    </div>
                    <?php echo $__env->make("shared.msg2", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form class="contact-form" method="post" action="<?php echo e(route('post-contact-me')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="email"name="email" placeholder="Your E-mail">
                        <input type="text"name="title" placeholder="Subject">
                        <textarea name="description" placeholder="Message"></textarea>
                        <button class="site-btn">Sent Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-area">
                    <div class="section-title text-left p-0">
                        <h2>Contact Info</h2>
                        <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendi sse cursus faucibus finibus.</p>
                    </div>
                    <div class="phone-number">
                        <span>Direct Line</span>
                        <h2><?php echo e($setting->phone); ?></h2>
                    </div>
                    <ul class="contact-list">
                        <li><?php echo e($setting->address); ?> </li>
                        <li><?php echo e($setting->phone); ?></li>
                        <li><?php echo e($setting->email); ?></li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27201.708361648656!2d34.455552000000004!3d31.54575360000001!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sus!4v1597393749640!5m2!1sar!2sus" width="100%" height="484" frameborder="0" style="margin-top: 58px;background: #ddd;border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
</section>
<!-- Page end -->
<?php echo $__env->make("frontEnd.layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--====== Javascripts & Jquery ======-->
<script src=<?php echo e(asset("frontEnd/js/jquery-3.2.1.min.js")); ?>></script>
<script src=<?php echo e(asset("frontEnd/js/bootstrap.min.js")); ?>></script>
<script src=<?php echo e(asset("frontEnd/js/mixitup.min.js")); ?>></script>
<script src=<?php echo e(asset("frontEnd/js/circle-progress.min.js")); ?>></script>
<script src=<?php echo e(asset("frontEnd/js/owl.carousel.min.js")); ?>></script>
<script src=<?php echo e(asset("frontEnd/js/main.js")); ?>></script>

<script src="<?php echo e(asset("frontEnd/js/map.js")); ?>"></script>
</html>
<?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/contact-me.blade.php ENDPATH**/ ?>