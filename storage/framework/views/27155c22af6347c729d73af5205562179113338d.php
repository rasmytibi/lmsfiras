<?php $__env->startSection("title", "Manage ContactMe"); ?>


<?php $__env->startSection("content"); ?>
    <div class="portlet light ">


        <div class="portlet-body">
            <div class='row'>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter your search" class="form-control" />
                </div>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter your search" class="form-control" />
                </div>
                <div class="col-sm-3">
                    <input type="text" placeholder="Enter your search" class="form-control" />
                </div>
                <div class="col-sm-3">
                    <button class='btn btn-primary'><i class='fa fa-search'></i> Search</button>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr class="col">
                        <th class="col-2"> Title </th>
                        <th class="col-2"> Description </th>
                        <th class="col-2"> name </th>
                        <th class="col-2"> email </th>
                        <th class="col-5"> Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td> <?php echo e($contact->title); ?> </td>
                            <td> <?php echo e($contact->description); ?> </td>
                            <td> <?php echo e($contact->name); ?> </td>
                            <td> <?php echo e($contact->email); ?> </td>
                            <td>
                                <div class="btn-group">
                                    <form method="post" action="<?php echo e(route('contact_me.destroy', $contact->id)); ?>">

                                        <button onclick='return confirm("Are you sure delete ?")' type="submit" class="btn btn-danger">Delele</button>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.admin", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\project\lms new22\lms\resources\views/admin/contactme/index.blade.php ENDPATH**/ ?>