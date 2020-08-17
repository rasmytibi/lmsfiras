<?php $__env->startSection('title','Manage Questions'); ?>
<?php $__env->startSection('content'); ?>
        <form class='row'>
            <div class='col-sm-5'>
                <input type='text' class="form-control" placeholder="enter your question name" name="q"/></div>
            <div class='col-sm-5'>
                <input type='text' class="form-control" placeholder="enter your score" name="score"/></div>

            <div class='col-sm-2'>
                <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

            </div>
            <div class="col-sm-2">

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('question_create')): ?>
                    <p>
                        <a href="<?php echo e(route('questions.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

                    </p>
                <?php endif; ?>
            </div>
        </form>

    <p>
        <ul class="list-inline">
            <li><a href="<?php echo e(route('questions.index')); ?>" style="<?php echo e(request('show_deleted') == 1 ? '' : 'font-weight: 700'); ?>">All</a></li> |
            <li><a href="<?php echo e(route('questions.index')); ?>?show_deleted=1" style="<?php echo e(request('show_deleted') == 1 ? 'font-weight: 700' : ''); ?>">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th><?php echo app('translator')->get('global.questions.fields.question'); ?></th>
                        <th><?php echo app('translator')->get('global.questions.fields.question-image'); ?></th>
                        <th><?php echo app('translator')->get('global.questions.fields.score'); ?></th>
                        <?php if( request('show_deleted') == 1 ): ?>
                        <th>&nbsp;</th>
                        <?php else: ?>
                        <th>&nbsp;</th>
                        <?php endif; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php if(count($questions) > 0): ?>
                        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <td><?php echo e(substr($question->question,0,50)); ?></td>
                                <td><?php if($question->question_image): ?><a href="<?php echo e(asset('storage/' . $question->question_image)); ?>" target="_blank"><img  width="100" style="align-items: center" src="<?php echo e(asset('storage/' . $question->question_image)); ?>"/></a><?php endif; ?></td>
                                <td><?php echo e($question->score); ?></td>
                                <?php if( request('show_deleted') == 1 ): ?>
                                <td>
                                    <form method="post" action="<?php echo e(route('questions.restore', $question->id)); ?>">
                                        <?php echo csrf_field(); ?>


                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>

                                    <form method="post" action="<?php echo e(route('questions.perma_del', $question->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('Delete'); ?>

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>

                                <?php else: ?>
                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('question_view')): ?>
                                    <a href="<?php echo e(route('questions.show',[$question->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('question_edit')): ?>
                                    <a href="<?php echo e(route('questions.edit',[$question->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('question_delete')): ?>
                                            <form method="post" action="<?php echo e(route('questions.destroy', $question->id)); ?>">
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
        <?php echo e($questions->links()); ?>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/questions/index.blade.php ENDPATH**/ ?>