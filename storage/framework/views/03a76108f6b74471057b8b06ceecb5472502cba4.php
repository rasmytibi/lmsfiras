
<!-- categories section -->
<section class="categories-section spad">
    <div class="container">
        <div class="section-title">
            <h2>Our Course Categories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
        <div class="row">
            <!-- categorie -->
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <a href="<?php echo e(route("course-search",["cat"=>$row->id])); ?>" class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg=<?php echo e(asset('storage/'. $row->image)); ?>></div>
                            <div class="ci-text">
                                <h5><?php echo e($row->name); ?></h5>
                                <p><?php echo e($row->description); ?></p>
                                <span><?php echo e($row->courses->count()); ?> Courses</span>
                            </div>
                        </a>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- categories section end -->
<?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/layouts/category.blade.php ENDPATH**/ ?>