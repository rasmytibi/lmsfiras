<?php $__env->startSection("title", "Manage Role"); ?>

<?php $__env->startSection('content'); ?>


    <form >
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your search" name="q"/></div>

        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>
        </div>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_create')): ?>
    <p>
        <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

    </p>
    <?php endif; ?>



    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th><?php echo app('translator')->get('global.roles.fields.title'); ?></th>
                        <th><?php echo app('translator')->get('global.roles.fields.permission'); ?></th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>

                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-entry-id="<?php echo e($role->id); ?>">
                                    <td><?php echo e($role->id); ?></td>

                                <td><?php echo e($role->title); ?></td>
                                <td>
                                    <?php $__currentLoopData = $role->permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singlePermission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="label label-danger label-many"><?php echo e($singlePermission->title); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                                                <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_view')): ?>
                                    <a href="<?php echo e(route('roles.show',[$role->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_edit')): ?>
                                    <a href="<?php echo e(route('roles.edit',[$role->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_delete')): ?>
                                            <form method="post" action="<?php echo e(route('roles.destroy', $role->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field("DELETE"); ?>

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                            </form>

                                    <?php endif; ?>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('roles.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>