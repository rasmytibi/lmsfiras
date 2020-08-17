

<?php $__env->startSection("title",  "Admin Dashboard"); ?>

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

  <div class="col-lg-12 col-xs-12 col-sm-12">
      <div class="portlet light ">
          <div class="portlet-title">
              <div class="caption">
                  <i class="icon-cursor font-dark hide"></i>
                  <span class="caption-subject font-dark bold uppercase">Last Courses</span>
              </div>
              <div class="actions">
                  <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                      <i class="fa fa-repeat"></i> Reload </a>
              </div>
          </div>
          <div class="portlet-body">
              <div class="row">
                  <div class="col-md-4">
                      <div class="easy-pie-chart">
                          <div class="number transactions" data-percent="55">
                              <span>81</span>% <canvas height="75" width="75"></canvas></div>
                          <a class="title" href="javascript:;"> Students
                              <i class="icon-arrow-right"></i>
                          </a>
                      </div>
                  </div>
                  <div class="margin-bottom-10 visible-sm"> </div>
                  <div class="col-md-4">
                      <div class="easy-pie-chart">
                          <div class="number visits" data-percent="85">
                              <span>9</span>% <canvas height="75" width="75"></canvas></div>
                          <a class="title" href="javascript:;"> New Visits
                              <i class="icon-arrow-right"></i>
                          </a>
                      </div>
                  </div>
                  <div class="margin-bottom-10 visible-sm"> </div>
                  <div class="col-md-4">
                      <div class="easy-pie-chart">
                          <div class="number bounce" data-percent="46">
                              <span>92</span>% <canvas height="75" width="75"></canvas></div>
                          <a class="title" href="javascript:;"> Cource
                              <i class="icon-arrow-right"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lms\resources\views/admin/home/index.blade.php ENDPATH**/ ?>