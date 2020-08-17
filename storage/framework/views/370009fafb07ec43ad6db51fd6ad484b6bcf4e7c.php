<?php $__env->startSection('title','Edit Teachers'); ?>
<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('teachers.update',$teacher->id)); ?>" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="panel panel-default">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">UserName</label>
                        <input type="text" class="form-control" id="form_control_1" name="name"
                               value="<?php echo e(old('name')??$teacher->name); ?>" placeholder="Enter Teachers Name ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="form_control_1" name="password"
                               value="<?php echo e(old('password')); ?>" placeholder="Enter Password ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="email">Email</label>
                        <input type="email" disabled class="form-control" id="form_control_1" name="email"
                               value="<?php echo e(old('email')??$teacher->email); ?>" placeholder="Enter Teachers Email ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="facebook">FaceBook URL</label>
                        <input type="url" class="form-control" id="form_control_1" name="facebook"
                               value="<?php echo e(old('facebook')??$teacher->facebook); ?>" placeholder="Enter Teachers FaceBook Account ">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="mobile">Mobile NO.</label>
                        <input type="number" class="form-control" id="form_control_1" name="mobile"
                               value="<?php echo e(old('mobile')??$teacher->mobile); ?>" placeholder="Enter Teachers Mobile Number ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <?php if($teacher->image): ?>
                            <a href="<?php echo e(asset('storage/'.$teacher->image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/'.$teacher->image)); ?>"style="width:300px;height: 200px"></a>
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
                    <div class="col-xs-12 form-group ">
                        <label for="description">Details</label>

                        <textarea type="text" class="form-control   "  id="description" name="description"><?php echo e(old('description')??$teacher->description); ?></textarea>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">

                        <input type="checkbox" name='active' value="0" <?php echo e((old('active')??$teacher->active)?"checked":""); ?>" class="form-check-input" id="active">
                        <label class="form-check-label" for='active'>Active</label>

                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('global.app_save'); ?></button>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/teachers/edit.blade.php ENDPATH**/ ?>