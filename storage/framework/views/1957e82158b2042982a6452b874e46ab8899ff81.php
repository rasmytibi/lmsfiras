<?php $__env->startSection("title", "Manage Subscribe"); ?>

<?php $__env->startSection('content'); ?>
    <div class='col-sm-2'>
        <a href="<?php echo e(route('email.send.create')); ?>" class="btn btn-success">Send New Email</a>

    </div>
    <p>
        <ul class="list-inline">
<br>
    </ul>
    </p>


    <div class="panel panel-default">


        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th>#</th>
                        <th>Title Message</th>
                        <th>Subject Message</th>

                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    <?php if(count($subscribe) > 0): ?>
                        <?php $__currentLoopData = $subscribe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <td><?php echo e($subscribe->id); ?></td>
                                <td><?php echo e($subscribe->title); ?></td>
                                <td><?php echo e($subscribe->subject); ?></td>


                                <td>


                                    <a href="<?php echo e(route("delete-email", $subscribe->id)); ?>" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


                                </td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="14"><?php echo app('translator')->get('global.app_no_entries_in_table'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>


    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/email/newsletter.blade.php ENDPATH**/ ?>