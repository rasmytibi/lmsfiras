<?php $__env->startSection("title", "Send Emails"); ?>

<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('email.send')); ?>" role="form" >
        <?php echo csrf_field(); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">


            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title"> Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="<?php echo e(old('title')); ?>" placeholder="Enter Message Title">

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="subject">Subject</label>
                    <textarea  class="form-control"  id="subject" value="<?php echo e(old('subject')); ?>" name="subject" rows="10" ></textarea>

                  </div>
            </div>
        </div>
    </div>

        <button type="submit" class="btn btn-danger">Send Emails</button>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/email/view-emails.blade.php ENDPATH**/ ?>