<?php $__env->startSection('title','Tests Manage'); ?>
<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_create')): ?>
    <p>
        <a href="<?php echo e(route('tests.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

    </p>
    <?php endif; ?>

    <p>
        <ul class="list-inline">
            <li><a href="<?php echo e(route('tests.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li> |
            <li><a href="<?php echo e(route('tests.index')); ?>?show_deleted=1" style="<?php echo e(request('show_deleted') == 1 ? 'font-weight: 700' : ''); ?>">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>


                        <th><?php echo app('translator')->get('global.tests.fields.course'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.lesson'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.title'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.description'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.questions'); ?></th>
                        <th><?php echo app('translator')->get('global.tests.fields.published'); ?></th>
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


                                <td><?php echo e($test->course->title); ?></td>
                                <td><?php echo e($test->lesson->title); ?></td>
                                <td><?php echo e($test->title); ?></td>
                                <td><?php echo $test->description; ?></td>
                                <td><?php echo e($test->questions->count()); ?></td>
                                    <td>
                                        <?php if($test->published): ?>
                                            <a href="<?php echo e(route('test.status',$test->id)); ?>" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('test.status',$test->id)); ?>" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                        <?php endif; ?>
                                    </td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <form method="post" action="<?php echo e(route('tests.restore', $test->id)); ?>">
                                        <?php echo csrf_field(); ?>


                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>

                                    <form method="post" action="<?php echo e(route('tests.perma_del', $test->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>

                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_view')): ?>
                                    <a href="<?php echo e(route('tests.show',[$test->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_edit')): ?>
                                    <a href="<?php echo e(route('tests.edit',[$test->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_delete')): ?>
                                            <form method="post" action="<?php echo e(route('tests.destroy', $test->id)); ?>">
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
                            <td colspan="10"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/tests/index.blade.php ENDPATH**/ ?>