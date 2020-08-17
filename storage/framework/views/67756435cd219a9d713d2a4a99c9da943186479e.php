<?php $__env->startSection("title", "Manege Users"); ?>
<?php $__env->startSection('content'); ?>

    <form class='row'>
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your name" name="q"/></div>
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your mobile" name="mobile"/></div>

        <div class='col-sm-2'>
                <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

            </div>
            <div class="col-sm-2">

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_create')): ?>
                    <p>
                        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success"><?php echo app('translator')->get('global.app_add_new'); ?></a>

                    </p>
                <?php endif; ?>
            </div>
    </form>




    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                <tr>


                    <th><?php echo app('translator')->get('global.users.fields.name'); ?></th>
                    <th><?php echo app('translator')->get('global.users.fields.email'); ?></th>
                    <th><?php echo app('translator')->get('global.users.fields.image'); ?></th>
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
                            <td><a href="<?php echo e(asset('storage/' . $user->image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/' .$user->image)); ?> " style="width:100px;height: 90px"/></a></td>

                            <td>
                                <?php $__currentLoopData = $user->role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="label label-info label-many"><?php echo e($singleRole->title); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_view')): ?>
                                    <a href="<?php echo e(route('user_profile',[$user->id])); ?>" class="btn btn-xs btn-primary"><?php echo app('translator')->get('global.app_view'); ?></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_edit')): ?>
                                    <a href="<?php echo e(route('users.edit',[$user->id])); ?>" class="btn btn-xs btn-info"><?php echo app('translator')->get('global.app_edit'); ?></a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_delete')): ?>
                                        <form method="post" action="<?php echo e(route('users.destroy', $user->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("DELETE"); ?>

                                            <button onclick='return confirm("Are you sure??")' type="submit"
                                                    class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                        </form>


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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_delete')): ?>
            window.route_mass_crud_entries_destroy = '<?php echo e(route('users.mass_destroy')); ?>';
        <?php endif; ?>

    </script>
    <?php echo e($users->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/users/index.blade.php ENDPATH**/ ?>