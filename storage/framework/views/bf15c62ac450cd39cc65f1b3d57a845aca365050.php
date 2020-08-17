<?php $__env->startSection('title','Manage Teachers'); ?>

<?php $__env->startSection('content'); ?>
    <form class='row'>
        <div class='col-sm-3'>
            <input type='text' class="form-control" placeholder="Enter Name Teacher" name="q"/></div>
        <div class='col-sm-3'>
            <input type='text' class="form-control" placeholder="Enter Mobile" name="mobile"/></div>

        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

        </div>
        <div class="col-sm-2">

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('teacher_create')): ?>
                <p>
                    <a href="<?php echo e(route('teachers.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

                </p>
            <?php endif; ?>
        </div>
    </form>


       <p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="<?php echo e(route('teachers.index')); ?>"
                       style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a>
                </li>
                |
                <li class="list-inline-item">
                    <a href="<?php echo e(route('teachers.index')); ?>?show_deleted=1"
                       style="<?php echo e(request('show_deleted') == 1 ? 'font-weight: 700' : ''); ?>">Trash</a>
                </li>
            </ul>
       </p>

            <div class="panel panel-default">


                <div class="panel-body table-responsive">
                        <table id="myTable"
                               class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Status</th>
                                <?php if( request('show_deleted') == 1 ): ?>
                                    <th>&nbsp; Actions</th>
                                <?php else: ?>
                                    <th>&nbsp; Actions</th>
                                <?php endif; ?>
                            </tr>
                            </thead>

                            <?php if(count($users) > 0): ?>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <td><?php echo e($teacher->name); ?></td>
                                    <td><?php echo e($teacher->email); ?></td>
                                    </td>
                                    <td><a href="<?php echo e(asset('storage/' . $teacher->image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/' .$teacher->image)); ?> " style="width:100px;height: 90px"/></a></td>

                                    <td>
                                        <?php if($teacher->active): ?>
                                            <a href="<?php echo e(route('teacher.status',$teacher->id)); ?>" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('teacher.status',$teacher->id)); ?>" style="width: 80px"  class="btn btn-warning btn-sm">Pending</a>

                                        <?php endif; ?>


                                    </td>

                                    <?php if( request('show_deleted') == 1 ): ?>
                                        <td>
                                            <form method="post" action="<?php echo e(route('teachers.restore', $teacher->id)); ?>">
                                                <?php echo csrf_field(); ?>


                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                            </form>

                                            <form method="post" action="<?php echo e(route('delete_full_teacher', $teacher->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('Delete'); ?>

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                            </form>

                                        </td>
                                    <?php else: ?>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('teacher_view')): ?>
                                                <a href="<?php echo e(route('teachers.show',[$teacher->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('teacher_edit')): ?>
                                                <a href="<?php echo e(route('teachers.edit',[$teacher->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                            <?php endif; ?>


                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('teacher_delete')): ?>
                                                <form method="post" action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>">
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
                                                <td colspan="14"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            </tbody>
                        </table>
                    </div>
             

            </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/teachers/index.blade.php ENDPATH**/ ?>