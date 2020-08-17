<?php $__env->startSection("title", "Manage Courses"); ?>

<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_create')): ?>

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
                    <select name="category"  class="form-control">
                        <option value=''>Any Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($category->id==request()->get('category')?"selected":""); ?> value='<?php echo e($category->id); ?>'><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class='col-sm-2'>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i><?php echo app('translator')->get('global.app_search'); ?></button>

                </div>
                <div class='col-sm-2'>
                    <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

                </div>

            </form>

    <?php endif; ?>

    <p>
        <ul class="list-inline">
            <li><a href="<?php echo e(route('courses.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li> |
            <li><a href="<?php echo e(route('courses.index')); ?>?show_deleted=1" style="<?php echo e(request('show_deleted') == 1 ? 'font-weight: 700' : ''); ?>">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>

                        <?php if(Auth::user()->isAdmin()): ?>
                            <th><?php echo app('translator')->get('global.courses.fields.teachers'); ?></th>
                        <?php endif; ?>
                        <th><?php echo app('translator')->get('global.courses.fields.title'); ?></th>
                        <th><?php echo app('translator')->get('global.courses.fields.description'); ?></th>
                        <th><?php echo app('translator')->get('global.courses.fields.course-image'); ?></th>
                        <th>Join Students</th>
                        <th><?php echo app('translator')->get('global.courses.fields.start-date'); ?></th>
                        <th><?php echo app('translator')->get('global.courses.fields.published'); ?></th>

                    </tr>
                </thead>

                <tbody>
                    <?php if(count($courses) > 0): ?>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <?php if(Auth::user()->isAdmin()): ?>
                                <td>


                                        <span><b><?php if(isset($course->teachers)): ?><?php echo e($course->teachers->name); ?><?php endif; ?></b></span>

                                </td>
                                <?php endif; ?>
                                <td><?php echo e($course->title); ?></td>
                                <td><?php echo e(substr($course->description,0,40)); ?> </td>
                                <td><a href="<?php echo e(asset('storage/' . $course->course_image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/' . $course->course_image)); ?> " style="width:100px;height: 90px"/></a></td>
                                <td> <span class="label label-danger label-many "><?php echo e($course->students->count()); ?></span></td>
                                <td><?php echo e($course->getDifDate($course->start_date)); ?></td>

                                <td>
                                    <?php if($course->published): ?>
                                        <a href="<?php echo e(route('course.status',$course->id)); ?>" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('course.status',$course->id)); ?>" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                    <?php endif; ?>
                                </td>

                                <?php if( request('show_deleted') == 1 ): ?>

                                <td>

                                    <form method="post" action="<?php echo e(route('courses.restore', $course->id)); ?>">
                                        <?php echo csrf_field(); ?>


                                        <button onclick='return confirm("Are you sure??")' type="submit" class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>


                                    








                                    <a href="<?php echo e(route("delete_full_cource", $course->id)); ?>" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>



                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_view')): ?>
                                    <a href="<?php echo e(route('lessons.index',['course_id' => $course->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.lessons.title'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_edit')): ?>
                                    <a href="<?php echo e(route('courses.edit',[$course->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_delete')): ?>
                                            <form method="post" action="<?php echo e(route('courses.destroy', $course->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field("DELETE"); ?>

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>
                                                </button>

                                            </form>

                                         

                                    <?php endif; ?>
                                </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="12"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

   <?php echo e($courses->links()); ?>


    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/courses/index.blade.php ENDPATH**/ ?>