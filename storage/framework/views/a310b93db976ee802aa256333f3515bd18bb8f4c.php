<?php $__env->startSection("title", "Edit Course"); ?>
<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('courses.update',$course->id)); ?>" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <?php if(Auth::user()->isAdmin()): ?>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="teacher">Teacher</label>

                    <select name="teachers" class="form-control select2 js-example-placeholder-multiple">
                        <option value="">Select Teacher</option>
                        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option <?php echo e((in_array($id,old('teachers',[])) || isset($course) && $course->teachers->contains($id)) ? 'selected' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($teacher); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option   <?php echo e(old('category_id')??$category->id == $category->id?"selected":""); ?> value='<?php echo e($category->id); ?>'><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="title">Course Title</label>
                        <input type="text" class="form-control" id="form_control_1" name="title"
                               value="<?php echo e(old('title')??$course->title); ?>" placeholder="Enter Course Title">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control"  id="description" value="<?php echo e(old('description')); ?>" name="description" ><?php echo e($course->description); ?></textarea>

                    </div>
                </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="col-xs-12 form-group">
                    <?php if($course->course_image): ?>
                        <a href="<?php echo e(asset('storage/'.$course->course_image)); ?>" target="_blank"><img src="<?php echo e(asset('storage/'.$course->course_image)); ?>" style="width: 300px;height: 200px"></a>
                    <?php endif; ?>
                    </div>
                        <div class="col-xs-12 form-group">
                        <div class="custom-file">
                            <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                        </div></div>

                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control date" value="<?php echo e(old('start_date')??$course->start_date); ?>" id="start_date" name="start_date">

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">

                    <input <?php echo e((old('published')??$course->published)?"checked":""); ?> value='1' type="checkbox" name='published' class="form-check-input" id="status">
                    <label class="form-check-label" for='published'>Active</label>


            </div>
        </div>

        </div>
    </div>
        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('global.app_edit'); ?></button>
        <a class='btn btn-danger' href='<?php echo e(asset("admin/categories")); ?>'><?php echo app('translator')->get('global.app_cancel'); ?></a>
    </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/courses/edit.blade.php ENDPATH**/ ?>