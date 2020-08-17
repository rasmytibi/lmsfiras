<?php if(Auth::user()->isAdmin()): ?>

<?php $__env->startSection("title",  "Admin Dashboard"); ?>
    <?php elseif(Auth::user()->isTeacher()): ?>
        <?php $__env->startSection("title",  "Teachers Dashboard"); ?>
<?php else: ?>
    <?php $__env->startSection("title",  "Student Dashboard"); ?>
    <?php endif; ?>
<?php $__env->startSection("content"); ?>

  <div class="row">
      <div class='alert alert-info'><b>Welcome <?php echo e(auth()->user()->name); ?> </b>Please select from left menu</div>

  </div>

  <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
              <div class="visual">
                  <i class="fa fa-comments"></i>
              </div>
              <div class="details">
                  <div class="number">

                      <span data-counter="counterup" data-value="<?php echo e($student->count()); ?>"><?php echo e($student->count()); ?></span>
                  </div>
                  <div class="desc">Students </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 red" href="#">
              <div class="visual">
                  <i class="fa fa-bar-chart-o"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span data-counter="counterup" data-value="<?php echo e($teachers->count()); ?>"><?php echo e($teachers->count()); ?></span> </div>
                  <div class="desc"> Teachers </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 green" href="#">
              <div class="visual">
                  <i class="fa fa-book"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span data-counter="counterup" data-value="<?php echo e($course->count()); ?>"><?php echo e($course->count()); ?></span>
                  </div>
                  <div class="desc"> Courses </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
              <div class="visual">
                 <i class=" fa fa-pencil"></i>
              </div>
              <div class="details">
                  <div class="number"> +
                      <span data-counter="counterup" data-value="<?php echo e($lesson->count()); ?>" ><?php echo e($lesson->count()); ?></span></div>
                  <div class="desc"> Lessons </div>
              </div>
          </a>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-6 col-xs-12 col-sm-12">
          <div class="portlet light ">
              <div class="portlet-title">
                  <div class="caption">
                      <span class="caption-subject bold uppercase font-dark">Revenue</span>
                      <span class="caption-helper">distance stats...</span>
                  </div>

              </div>
              <div class="portlet-body">
                  <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
              </div>
          </div>
      </div>
      <div class="col-lg-6 col-xs-12 col-sm-12">
          <div class="portlet light ">
              <div class="portlet-title">
                  <div class="caption ">
                      <span class="caption-subject font-dark bold uppercase">Finance</span>
                      <span class="caption-helper">distance stats...</span>
                  </div>

              </div>
              <div class="portlet-body">
                  <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
              </div>
          </div>
      </div>
  </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/home/index.blade.php ENDPATH**/ ?>