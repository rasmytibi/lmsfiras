<?php $request = app('Illuminate\Http\Request'); ?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

            <?php if(auth()->user()->active): ?>

            <li class="<?php echo e($request->segment(2) == 'home' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('home.dashboard')); ?>">
                    <i class="icon-home"></i>
                    <span class="title"><?php echo app('translator')->get('global.app_dashboard'); ?></span>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('categories')): ?>
                <li class="<?php echo e($request->segment(2) == 'categories' ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('categories.index')); ?>">
                        <i class="icon-puzzle"></i>
                        <span class="title"><?php echo app('translator')->get('global.categories.title'); ?></span>
                    </a>
                </li>
            <?php endif; ?>



                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('teachers')): ?>
                    <li class="<?php echo e($request->segment(2)=='teachers' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('teachers.index')); ?>">
                            <i class="icon-user"></i>
                            <span class="title"><?php echo app('translator')->get('global.teachers.title'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('course_access')): ?>
            <li class="<?php echo e($request->segment(2) == 'courses' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('courses.index')); ?>">
                    <i class="icon-briefcase"></i>
                    <span class="title"><?php echo app('translator')->get('global.courses.title'); ?></span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('lesson_access')): ?>
            <li class="<?php echo e($request->segment(2) == 'lessons' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('lessons.index')); ?>">
                    <i class="icon-layers"></i>
                    <span class="title"><?php echo app('translator')->get('global.lessons.title'); ?></span>
                </a>
            </li>
            <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('test_access')): ?>
                    <li class="<?php echo e($request->segment(2) == 'tests' ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('tests.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title"><?php echo app('translator')->get('global.tests.title'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('question_access')): ?>
            <li class="<?php echo e($request->segment(2) == 'questions' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('questions.index')); ?>">
                    <i class="fa fa-question"></i>
                    <span class="title"><?php echo app('translator')->get('global.questions.title'); ?></span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('questions_option_access')): ?>
            <li class="<?php echo e($request->segment(2) == 'questions_options' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('questions_options.index')); ?>">
                    <i class="fa fa-gears"></i>
                    <span class="title"><?php echo app('translator')->get('global.questions-options.title'); ?></span>
                </a>
            </li>
            <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blogs_access')): ?>
                    <li class="<?php echo e(request()->is('blogs' ? 'active' : '')); ?>">
                        <a href="<?php echo e(route('blogs.index')); ?>">
                            <i class="fa fa-gears"></i>
                            <span class="title"><?php echo app('translator')->get('global.blogs.title'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('setting')): ?>
                    <li class="nav-item start  <?php echo e(request()->is('setting' ? 'active' : '')); ?>">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="icon-wrench"></i>
                            <span class="title"><?php echo app('translator')->get('global.global_site'); ?></span>
                            <span class="pull-right-container">
                        <i class="arrow"></i>
                    </span>
                        </a>
                        <?php endif; ?>
                        <ul class="sub-menu">

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('setting')): ?>
                                <li class="nav-item start  <?php echo e($request->segment(2) == 'setting' ? 'active active-sub' : ''); ?>">
                                    <a href="<?php echo e(route('post-settings')); ?>" class="nav-link ">
                                        <i class=" icon-wrench"></i>
                                        <span class="title">
                                <?php echo app('translator')->get('global.global_site'); ?>
                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('about')): ?>
                                <li class="nav-item start <?php echo e($request->segment(2) == 'about' ? 'active active-sub' : ''); ?>">
                                    <a href="<?php echo e(route('post-about')); ?>" class="nav-link ">
                                        <i class="icon-docs"></i>
                                        <span class="title">
                                <?php echo app('translator')->get('global.global_about'); ?>
                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('contactme')): ?>
                                <li class="nav-item start <?php echo e($request->segment(2) == 'contactme' ? 'active active-sub' : ''); ?>">
                                    <a href="<?php echo e(route('contact_me.index')); ?>" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">
                                <?php echo app('translator')->get('global.global_contact_me'); ?>
                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                    <li class="nav-item start  <?php echo e(request()->is('permissions' ? 'active' : '')); ?>">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-users"></i>
                            <span class="title"><?php echo app('translator')->get('global.user-management.title'); ?></span>
                            <span class="pull-right-container">
                        <i class="arrow"></i>
                    </span>
                        </a>
                        <?php endif; ?>
                        <ul class="sub-menu">

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                                <li class="nav-item start  <?php echo e($request->segment(2) == 'permissions' ? 'active active-sub' : ''); ?>">
                                    <a href="<?php echo e(route('permissions.index')); ?>" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">
                                <?php echo app('translator')->get('global.permissions.title'); ?>
                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                                <li class="nav-item start <?php echo e($request->segment(2) == 'roles' ? 'active active-sub' : ''); ?>">
                                    <a href="<?php echo e(route('roles.index')); ?>" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">
                                <?php echo app('translator')->get('global.roles.title'); ?>
                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                                <li class="nav-item start <?php echo e($request->segment(2) == 'users' ? 'active active-sub' : ''); ?>">
                                    <a href="<?php echo e(route('users.index')); ?>"class="nav-link ">
                                        <i class="fa fa-user"></i>
                                        <span class="title">
                                <?php echo app('translator')->get('global.users.title'); ?>
                            </span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php endif; ?>














        </ul>
    </div>>
</div>



<?php /**PATH C:\laragon\www\lms\resources\views/layouts/admin/sidebar.blade.php ENDPATH**/ ?>