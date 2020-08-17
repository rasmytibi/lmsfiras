<?php $__env->startSection('title','Manage Questions Option'); ?>
<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('questions_option_create')): ?>
    <p>
        <a href="<?php echo e(route('questions_options.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

    </p>
    <?php endif; ?>

    <p>
        <ul class="list-inline">
            <li><a href="<?php echo e(route('questions_options.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li> |
            <li><a href="<?php echo e(route('questions_options.index')); ?>?show_deleted=1" style="<?php echo e(request('show_deleted') == 1 ? 'font-weight: 700' : ''); ?>">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>


                        <th><?php echo app('translator')->get('global.questions-options.fields.question'); ?></th>
                        <th><?php echo app('translator')->get('global.questions-options.fields.option-text'); ?></th>
                        <th><?php echo app('translator')->get('global.questions-options.fields.correct'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php if(count($questions_options) > 0): ?>
                        <?php $__currentLoopData = $questions_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questions_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr >


                                <td><?php echo e($questions_option->question->question or ''); ?></td>
                                <td><?php echo e($questions_option->option_text); ?></td>
                             <td>

                              <input type="checkbox" name='correct' value="" <?php echo e($questions_option->correct ?"checked":""); ?>  disabled class="form-check-input" id="correct">

                                </td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <form method="post" action="<?php echo e(route('questions_options.restore', $questions_option->id)); ?>">
                                        <?php echo csrf_field(); ?>


                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>

                                    <form method="post" action="<?php echo e(route('questions_options.perma_del', $questions_option->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>


                                </td>
                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('questions_option_view')): ?>
                                    <a href="<?php echo e(route('questions_options.show',[$questions_option->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('questions_option_edit')): ?>
                                    <a href="<?php echo e(route('questions_options.edit',[$questions_option->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('questions_option_delete')): ?>
                                            <form method="post" action="<?php echo e(route('questions_options.destroy', $questions_option->id)); ?>">
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
                            <td colspan="7"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('questions_option_delete')): ?>
            <?php if( request('show_deleted') != 1 ): ?> window.route_mass_crud_entries_destroy = '<?php echo e(route('questions_options.mass_destroy')); ?>'; <?php endif; ?>
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/questions_options/index.blade.php ENDPATH**/ ?>