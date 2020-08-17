<?php $__env->startSection("title", " Lesson Details"); ?>

<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="20%"><?php echo app('translator')->get('global.lessons.fields.course'); ?></th>
                            <td><?php echo e($lesson->course->title); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->get('global.lessons.fields.title'); ?></th>
                            <td><?php echo e($lesson->title); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->get('global.lessons.fields.description'); ?></th>
                            <td><?php echo $lesson->short_text; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->get('global.lessons.fields.details'); ?></th>
                            <td><?php echo $lesson->full_text; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->get('global.tests.fields.published'); ?></th>

                            <td>
                                <?php if($lesson->published): ?>
                                    <a href="#" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                <?php else: ?>
                                    <a href="#" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->get('global.lessons.fields.lesson-image'); ?></th>
                            <td><?php if($lesson->lesson_image): ?><a href="<?php echo e(asset('storage/' . $lesson->lesson_image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/' . $lesson->lesson_image)); ?>" style="width:100%;height: 250px"/></a><?php endif; ?></td>

                        </tr>

                        <tr>
                            <th>Lesson Vedio</th>
                            <td>
                                <video src="<?php echo e($lesson->url_vedio); ?>" type="video/mp4"  data-plyr-provider="youtube"   width="100%" height="250px"    playsinline controls>

                                </video>



                            </td>
                        </tr>

                        <tr>
                            <th>Lesson Files</th>
                            <td>
                                <?php $files = json_decode($lesson->files) ?>
                                <?php if(!empty($files)): ?>
                                    <hr>
                                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <ul>
                                            <li>
                                                <a width='100' href='<?php echo e(asset("storage/".$file)); ?>' target="_blank">Download File <?php echo e(substr($lesson->title,0,30)); ?> </a>
                                            </li>
                                        </ul>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </td>
                        </tr>


</table>
                </div>

            </div>
        </div>
    </div>



<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#tests" aria-controls="tests" role="tab" data-toggle="tab">Tests</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="tests">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th><?php echo app('translator')->get('global.tests.fields.course'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.lesson'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.title'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.description'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.questions'); ?></th>
                        <th>Actions</th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
        </tr>
    </thead>

    <tbody>
        <?php if(count($tests) > 0): ?>
            <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($test->id); ?>">
                    <td><?php echo e($test->course->title); ?></td>
                                <td><?php echo e($test->lesson->title); ?></td>
                                <td><?php echo e($test->title); ?></td>
                                <td><?php echo e($test->description); ?> </td>
                                <td>
                                    <?php $__currentLoopData = $test->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleQuestions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e(substr($singleQuestions->question,0,50)); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>


                    <?php if( request('show_deleted') == 1 ): ?>
                          <form method="post" action="<?php echo e(route('tests.restore', $test->id)); ?>">
                             <?php echo csrf_field(); ?>

                        <button onclick='return confirm("Are you sure??")' type="submit"
                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                    </form>
                    <form method="post" action="<?php echo e(route('tests.perma_del', $test->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>

                        <button onclick='return confirm("Are you sure??")' type="submit"
                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                    </form>

                               <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_view')): ?>
                                    <a href="<?php echo e(route('tests.show',[$test->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_edit')): ?>
                                    <a href="<?php echo e(route('tests.edit',[$test->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_delete')): ?>
                                            <form method="post" action="<?php echo e(route('tests.destroy',$test->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field("DELETE"); ?>

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                            </form>
                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="10"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('lessons.index')); ?>" class="btn btn-default"><?php echo app('translator')->get('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/lessons/show.blade.php ENDPATH**/ ?>