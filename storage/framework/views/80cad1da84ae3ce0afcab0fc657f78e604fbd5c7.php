<?php $__env->startSection('content'); ?>


    <!-- Page info -->
    <div class="page-info-section set-bg"  data-setbg=<?php echo e(asset('frontEnd/img/page-bg/2.jpg')); ?>>
        <div class="container">
            <div class="site-breadcrumb">
                <a href="/">Home</a>
                <a href="<?php echo e(route('coursess')); ?>">Courses</a>
                <span><?php echo e($course->title); ?></span>

            </div>
        </div>
    </div>
    <!-- Page info end -->


<?php echo $__env->make('frontEnd.layouts.in-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- single course section -->
    <section class="single-course spad pb-0">
        <div class="container">

                        <img src="<?php echo e(asset('storage/'. $course->course_image)); ?>" width="100%"  alt="" class="course-preview">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 course-list">
                    <div class="cl-item">
                        <h4>Course Description</h4>

                        <p><?php echo e($course->description); ?></p>
                    </div>
                    <div class="cl-item">
                        <h4>Lessons</h4>
                    </div>
                    <div class="cl-item">
                        <?php if(Auth::check() && $is_joined == 1): ?>
                        <ul>
                            <?php
                            $i=1;
                            ?>

                            <?php $__currentLoopData = $course->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('lesson',$lesson->id)); ?>"><li>
                               <?php echo e($lesson->title); ?>

                                </li></a>
                                <?php
                                    $i++;
                                ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                            <?php elseif(Auth::check() && $is_joined == 0): ?>
                            <h3>Please Join Button To See Lesson This Course</h3>
                            <?php else: ?>
                            <h3>Please Sign In Or Sign Up To See Lesson This Course</h3>
                            <?php endif; ?>

                    </div>
                    <?php if(Auth::check() && $is_joined == 0): ?>
                        <form action="<?php echo e(route('join')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                            

                            <input type="submit" class="join-btn join"  name="join" value="Join Course">
                        </form>
                    <?php endif; ?>
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

<?php echo $__env->make('frontEnd.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/single-course.blade.php ENDPATH**/ ?>