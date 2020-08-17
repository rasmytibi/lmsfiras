
<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-0">
            <h2>Featured Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all">All</li>
            <?php
                $i=1;
            ?>

            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <li class="control" data-filter=".cat<?php echo e($row->id); ?>"><?php echo e($row->name); ?> </li>

                
                <?php
                    $i++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


        <div class="row course-items-area">

        <?php
            $i=1;
        ?>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $a=1;
            ?>
            <?php $__currentLoopData = $row->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- course -->
                    <div class="mix col-lg-3 col-md-4 col-sm-6 cat<?php echo e($row->id); ?> ">
                        <div class="course-item">
                            <div class="course-thumb set-bg" data-setbg="<?php echo e(asset('storage/'. $course->course_image)); ?>">
                                <div class="price">Price: $14</div>
                            </div>
                            <div class="course-info">
                                <div class="course-text">
                                    <a href="<?php echo e(route('single_course',$course->id)); ?>"><h5><?php echo e(substr($course->title,0,20)); ?></h5></a>
                                    <a href="<?php echo e(route('single_course',$course->id)); ?>"><p><?php echo e(substr($course->description,0,50)); ?></p></a>
                                    <div class="students"><?php echo e($course->students->count()); ?> Students</div>
                                </div>
                                <div class="course-author">
                                    <div class="ca-pic set-bg" data-setbg=<?php echo e(asset('storage/' . $course->teachers->image)); ?>></div>
                                    <p><?php echo e($course->teachers->name); ?>, <span>Developer</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $a++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $i++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
</section>
<!-- course section end -->

<?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/layouts/course.blade.php ENDPATH**/ ?>