<?php $__env->startSection("title", "Show Role "); ?>

<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th><?php echo app('translator')->get('global.roles.fields.title'); ?></th>
                            <td><?php echo e($role->title); ?></td>
                        </tr>
                        <tr>
                            <th><?php echo app('translator')->get('global.roles.fields.permission'); ?></th>
                            <td>
                                <?php $__currentLoopData = $role->permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePermission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singlePermission->title); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="users">
<table class="table table-bordered table-striped ">
    <thead>
        <tr>
            <th><?php echo app('translator')->get('global.users.fields.name'); ?></th>
                        <th><?php echo app('translator')->get('global.users.fields.email'); ?></th>
                        <th><?php echo app('translator')->get('global.users.fields.role'); ?></th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        <?php if(count($users) > 0): ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-entry-id="<?php echo e($user->id); ?>">
                    <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td>
                                    <?php $__currentLoopData = $user->role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-info label-many"><?php echo e($singleRole->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_view')): ?>
                                    <a href="<?php echo e(route('users.show',[$user->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_edit')): ?>
                                    <a href="<?php echo e(route('users.edit',[$user->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>









                                </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="9"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-default"><?php echo app('translator')->get('global.app_back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/roles/show.blade.php ENDPATH**/ ?>