<?php $__env->startSection("title", "Manage Lesson"); ?>

<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lesson_create')): ?>
        <form class='row'>
            <div class='col-sm-2'>
                <input type='text'  name="q" value='<?php echo e(request()->get("title")); ?>' class="form-control" placeholder="enter title to search"/>
            </div>

            <div class="col-sm-3">
                <select name="published" class="form-control">
                    <option value=''>Any Status</option>
                    <option <?php echo e(request()->get("published") ?"selected":""); ?> value='1'>Active</option>
                    <option <?php echo e(request()->get("published")=='0' ?"selected":""); ?> value='0'>Inactive</option>
                </select>
            </div>

            <div class="col-sm-2">
                <select name="course"  class="form-control">
                    <option value=''>Any Courses</option>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($course->id==request()->get('course_id')?"selected":""); ?> value='<?php echo e($course->id); ?>'><?php echo e($course->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class='col-sm-2'>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i><?php echo app('translator')->get('global.app_search'); ?></button>

            </div>
            <div class='col-sm-2'>
                <a href="<?php echo e(route('lessons.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

            </div>

        </form>

    <?php endif; ?>

    <p>
        <ul class="list-inline">
            <li><a href="<?php echo e(route('lessons.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li> |
            <li><a href="<?php echo e(route('lessons.index')); ?>?show_deleted=1" style="<?php echo e(request('show_deleted') == 1 ? 'font-weight: 700' : ''); ?>">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">


        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th><?php echo app('translator')->get('global.lessons.fields.course'); ?></th>
                        <th><?php echo app('translator')->get('global.lessons.fields.title'); ?></th>
                        <th>Image</th>
                        <th><?php echo app('translator')->get('global.lessons.fields.published'); ?></th>
                        <th>Actions</th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php if(count($lessons) > 0): ?>
                        <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <td><?php echo e($lesson->course->title); ?></td>
                                <td><?php echo e($lesson->title); ?></td>
                                <td><a href="<?php echo e(asset('storage/' . $lesson->lesson_image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/' . $lesson->lesson_image)); ?> " style="width:100px;height: 90px"/></a></td>
                                <td>
                                    <?php if($lesson->published): ?>
                                        <a href="<?php echo e(route('lesson.status',$lesson->id)); ?>" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('lesson.status',$lesson->id)); ?>" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                    <?php endif; ?>
                                </td>

                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>









                                    <a href="<?php echo e(route("delete-lesson", $lesson->id)); ?>" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lesson_view')): ?>
                                    <a href="<?php echo e(route('lessons.show',[$lesson->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lesson_edit')): ?>
                                    <a href="<?php echo e(route('lessons.edit',[$lesson->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lesson_delete')): ?>









                                            <a href="<?php echo e(route("delete-lesson", $lesson->id)); ?>" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


                                        <?php endif; ?>
                                </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="14"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo e($lessons->links()); ?>


    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/lessons/index.blade.php ENDPATH**/ ?>