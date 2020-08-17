<?php $__env->startSection('title','Create Lessons'); ?>
<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('lessons.store')); ?>" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="form_control_1">Course</label>
                    <select name="course_id" class="form-control">
                        <option value="">Select Course</option>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option   <?php echo e(old('course_id')== $course->id?"selected":""); ?> value='<?php echo e($course->id); ?>'><?php echo e($course->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Lesson Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="<?php echo e(old('title')); ?>" placeholder="Enter Lesson Title">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="lesson_image_image">Image</label>
                    <div class="custom-file">
                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="lesson_image_image">Files</label>
                    <div class="custom-file">
                        <input type="file" multiple name="file[]" class="file-input" id="files">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="">URL Vedio</label>
                    <input type="text" class="form-control " value="<?php echo e(old('url_vedio')); ?>" id="url_vedio" name="url_vedio">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group ">
                    <label for="short_text">Description</label>

                    <textarea type="text" class="form-control   "  id="short_text" name="short_text"><?php echo e(old('short_text')); ?></textarea>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group editor">
                    <label for="full_text">Details</label>

                    <textarea type="text" class="form-control editor"  id="editor" name="full_text"><?php echo e(old('full_text')); ?></textarea>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">

                    <input type="checkbox" name='published' value="<?php echo e(old('published')?? ""); ?>" class="form-check-input" id="Published">
                    <label class="form-check-label" for='published'>Active</label>

                </div>
            </div>

        </div>
    </div>
        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('global.app_save'); ?></button>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/lessons/create.blade.php ENDPATH**/ ?>