
<!-- search section -->
<section class="search-section ss-other-page">
    <div class="container">
        <div class="search-warp">
            <div class="section-title text-white">
                <h2><span>Search your course</span></h2>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <!-- search form -->
                    <form  class="course-search-form center-block" action="<?php echo e(route('course-search')); ?>">

                        <input  type="text" class="col-md-3 " name="q" id="q" value="<?php echo e(request()->get("q")); ?>" placeholder="Course">


                        <select name="cat" class="col-md-3 form-control" style="height: 57px;margin-right: 15px"   >
                            <option type="text"  value=''>Any Category</option>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e($row->id==request()->get('cat')?"selected":""); ?> value='<?php echo e($row->id); ?>'><?php echo e($row->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <button type="submit" class="site-btn btn-dark">Search Couse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH I:\project\lms new22\lms\resources\views/frontEnd/layouts/in-search.blade.php ENDPATH**/ ?>