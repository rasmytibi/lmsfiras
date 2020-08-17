<?php $__env->startSection('content'); ?>

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="<?php echo e(asset('frontEnd/img/page-bg/3.jpg')); ?>">
		<br>
        <div class="container">

            <div class="site-breadcrumb">
				<a href="/">Home</a>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<span><?php echo e($row->name); ?> Category</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- Page  -->
	<section class="blog-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
                    <p></p>
                    <p></p>
					<!-- blog post -->
                    <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="blog-post">
						<img alt="" width="100%" src="<?php echo e(asset('storage/'. $row->course_image)); ?>" >
						<h3><?php echo e($row->title); ?></h3>
						<div class="blog-metas">
							<div class="blog-meta author">
								<div class="post-author set-bg" data-setbg="<?php echo e(asset('storage/'. $row->teachers->image)); ?>"></div>
								<a href="#"><?php echo e($row->teachers->name); ?></a>
							</div>
							<div class="blog-meta">
								<a href="#">Development</a>
							</div>
							<div class="blog-meta">
								<a href="#"><?php echo e($row->created_at); ?></a>
							</div>
							<div class="blog-meta">
								<a href="#"><?php echo e($row->lessons->count()); ?> Lesson</a>
							</div>
						</div>
						<p> <?php echo e($row->description); ?></p>
						<a href="<?php echo e(route('single_course',$row->id)); ?>" class="site-btn readmore">Read More</a>
					</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    




				</div>
				<div class="col-lg-3 col-md-5 col-sm-9 sidebar">
					<div class="sb-widget-item">
						<form class="search-widget" >
							<input type="text" placeholder="Search" name="q" id="q" value="<?php echo e(request()->get("q")); ?>">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="sb-widget-item">
						<h4 class="sb-w-title">Categories</h4>
						<ul>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="#"><?php echo e($category->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="sb-widget-item">
						<h4 class="sb-w-title">Archives</h4>
						<ul>
							<li><a href="#">February 2018</a></li>
							<li><a href="#">March 2018</a></li>
							<li><a href="#">April 2018</a></li>
							<li><a href="#">May 2018</a></li>
							<li><a href="#">June 2018</a></li>
						</ul>
					</div>
					<div class="sb-widget-item">
						<h4 class="sb-w-title">Archives</h4>
						<div class="tags">
							<a href="#">education</a>
							<a href="#">courses</a>
							<a href="#">development</a>
							<a href="#">design</a>
							<a href="#">on line courses</a>
							<a href="#">wp</a>
							<a href="#">html5</a>
							<a href="#">music</a>
						</div>
					</div>
					<div class="sb-widget-item">
						<div class="add">
							<a href="#"><img src="<?php echo e(asset('frontEnd/img/add.jpg')); ?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
<?php echo e($course->links()); ?>

        </div>
	</section>
	<!-- Page end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/course-search.blade.php ENDPATH**/ ?>