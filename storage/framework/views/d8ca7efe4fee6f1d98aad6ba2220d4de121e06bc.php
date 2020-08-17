<?php $__env->startSection("title", "Edit User"); ?>
<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('users.update',$user->id)); ?>" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">Name</label>
                        <input value='<?php echo e(old("name")??$user->name); ?>' type="text" autofocus class="<?php echo e($errors->has('name')?"is-invalid":""); ?> form-control" id="title" name="name" placeholder="Enter UserName">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="email">email</label>
                        <input  type="email" value="<?php echo e(old('email')??$user->email); ?>" class="form-control"  id="email" name="email" placeholder="Enter email">
                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="password">password</label>
                        <input  type="password" value="<?php echo e(old('password')); ?>" autofocus class="form-control" id="password" name="password" placeholder="Enter your password">


                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <?php if($user->image): ?>
                            <a href="<?php echo e(asset('storage/'.$user->image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/'.$user->image)); ?>"style="width:300px;height: 200px"></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="lesson_image_image">Image</label>
                        <div class="custom-file">
                            <input type="file" name="imageFile" <?php echo e(old('imageFile')); ?> class="custom-file-input" id="imageFile">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="facebook">FaceBook URL</label>
                        <input type="url" class="form-control" id="form_control_1" name="facebook"
                               value="<?php echo e(old('facebook')??$user->facebook); ?>" placeholder="Enter Teachers FaceBook Account ">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group ">
                        <label for="description">Details</label>

                        <textarea type="text" class="form-control   "  id="description" name="description"><?php echo e(old('description')??$user->description); ?></textarea>

                    </div>
                </div>



                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="mobile">Mobile NO.</label>
                        <input type="number" class="form-control" id="form_control_1" name="mobile"
                               value="<?php echo e(old('mobile')??$user->mobile); ?>" placeholder="Enter Teachers Mobile Number ">

                    </div>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_user_profile')): ?>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="role">Role</label>
                        <select name="role" class="form-control " >
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php echo e(old('role',$user->id)== $role->id?"selected":""); ?> value='<?php echo e($role->id); ?>'><?php echo e($role->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>


                    </div>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('global.app_update'); ?></button>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>