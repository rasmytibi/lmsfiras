<?php $__env->startSection("title", "Edit Role"); ?>
<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('roles.update',$role->id)); ?>" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="panel panel-default">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="title">Title</label>
                        <input value='<?php echo e(old("title")??$role->title); ?>' type="text" autofocus class="<?php echo e($errors->has('title')?"is-invalid":""); ?> form-control" id="title" name="title" placeholder="Enter Role Title">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="permission">Permission</label>
                        <select name="permissions[]" id="permissions" class="form-control " multiple>

                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>" <?php echo e((in_array($id, old('permissions', [])) || isset($role) && $role->permission->contains($id)) ? 'selected' : ''); ?>><?php echo e($permissions); ?></option>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>


                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('global.app_save'); ?></button>


        <?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>