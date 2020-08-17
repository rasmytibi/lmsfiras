<?php $__env->startSection('content'); ?>


    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg=<?php echo e(asset('frontEnd/img/page-bg/2.jpg')); ?>>
        <div class="container">
            <div class="site-breadcrumb">
                <a href="/">Home</a>
                <a href="<?php echo e(route('coursess')); ?>">Courses</a>
                <a href="<?php echo e(route('single_course',$lesson->course->id)); ?>"><?php echo e($lesson->course->title); ?></a>
                <span><?php echo e($lesson->title); ?></span>
            </div>
        </div>
    </div>
    <!-- Page info end -->


<?php echo $__env->make('frontEnd.layouts.in-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- single course section -->
    <section class="single-course spad  pb-0">
        <div class="container">

            <div class="row">
                <div class="col-md-5 content-center  course-list">
                    <div class="cl-item">
                        <h4>lesson Description</h4>
                        <p><?php echo e($lesson->short_text); ?></p>
                    </div>
                    <div class="cl-item">
                        <h4>lesson Details</h4>
                        <p><?php echo e($lesson->full_text); ?></p>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5  course-list">

                        <h4>lesson Image</h4>
                        <img src="<?php echo e(asset('storage/'. $lesson->lesson_image)); ?>"  alt="" class="course-preview">


                        <h4>lesson Vedio</h4>
                        <video  width="100%" height="250px" class="js-player"   data-plyr-embed-id="<?php echo e($lesson->url_vedio); ?>" data-plyr-provider="youtube"  playsinline controls>
                            <source src="<?php echo e($lesson->url_vedio); ?>" type="youtube"/>
                        </video>


                </div>

                </div>
            </div>



    </section>


    <!-- single course section end -->
    <!-- Page -->
    <section class="realated-courses spad">
        <div class="course-warp">
            <h2 class="rc-title">Realated Courses</h2>
            <div class="rc-slider owl-carousel">

            <?php $__currentLoopData = $last; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   <!-- course -->
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="<?php echo e(asset('storage/' . $last->course_image)); ?>">
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <a href="<?php echo e(route('single_course',$last->id)); ?>"><h5><?php echo e($last->title); ?></h5></a>
                            <a href="<?php echo e(route('single_course',$last->id)); ?>"><p><?php echo e(substr($last->description,0,50)); ?></p></a>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/1.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
                <!-- course -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- course -->
            </div>
        </div>
    </section>
    <!-- Page end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/lesson.blade.php ENDPATH**/ ?>