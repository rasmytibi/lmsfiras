<?php $__env->startSection('content'); ?>

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="<?php echo e(asset('frontEnd/img/page-bg/3.jpg')); ?>">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="/">Home</a>
				<span>Courses</span>
			</div>
		</div>
	</div>
    <?php echo $__env->make('frontEnd.layouts.in-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page info end -->

	<!-- Page  -->
	<section class="blog-page spad pb-0">
		<div class="container">
			<div class="row">
                <?php echo $__env->make('frontEnd.layouts.course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			</div>

        </div>
	</section>
	<!-- Page end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/coursess.blade.php ENDPATH**/ ?>