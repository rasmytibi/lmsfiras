<?php $__env->startSection('content'); ?>

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="<?php echo e(asset('frontEnd/img/page-bg/3.jpg')); ?>">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="/">Home</a>
				<span>Blog</span>
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
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="blog-post">
						<img alt="" src="<?php echo e(asset('storage/'. $blog->blog_image)); ?>" >
						<h3><?php echo e($blog->title); ?></h3>
						<div class="blog-metas">
							<div class="blog-meta author">
								<div class="post-author set-bg" data-setbg="<?php echo e(asset('frontEnd/img/authors/1.jpg')); ?>"></div>
								<a href="#">James Smith</a>
							</div>
							<div class="blog-meta">
								<a href="#">Development</a>
							</div>
							<div class="blog-meta">
								<a href="#"><?php echo e($blog->created_at); ?></a>
							</div>
							<div class="blog-meta">
								<a href="#">2 Comments</a>
							</div>
						</div>
						<p> <?php echo e($blog->description); ?></p>
						<a href="<?php echo e(route('single_blog',$blog->id)); ?>" class="site-btn readmore">Read More</a>
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

        </div>
	</section>
	<!-- Page end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/blog.blade.php ENDPATH**/ ?>