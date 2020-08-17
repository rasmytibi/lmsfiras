@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

            @if(auth()->user()->active)

            <li class="{{ $request->segment(2) == 'home' ? 'active' : '' }}">
                <a href="{{ route('home.dashboard') }}">
                    <i class="icon-home"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            @can('categories')
                <li class="{{ $request->segment(2) == 'categories' ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}">
                        <i class="icon-puzzle"></i>
                        <span class="title">@lang('global.categories.title')</span>
                    </a>
                </li>
            @endcan
{{--{{dd($request)}}--}}


                @can('teachers')
                    <li class="{{ $request->segment(2)=='teachers' ? 'active' : '' }}">
                        <a href="{{ route('teachers.index') }}">
                            <i class="icon-user"></i>
                            <span class="title">@lang('global.teachers.title')</span>
                        </a>
                    </li>
                @endcan

            @can('course_access')
            <li class="{{ $request->segment(2) == 'courses' ? 'active' : '' }}">
                <a href="{{ route('courses.index') }}">
                    <i class="icon-briefcase"></i>
                    <span class="title">@lang('global.courses.title')</span>
                </a>
            </li>
            @endcan

            @can('lesson_access')
            <li class="{{ $request->segment(2) == 'lessons' ? 'active' : '' }}">
                <a href="{{ route('lessons.index') }}">
                    <i class="icon-layers"></i>
                    <span class="title">@lang('global.lessons.title')</span>
                </a>
            </li>
            @endcan

                @can('test_access')
                    <li class="{{ $request->segment(2) == 'tests' ? 'active' : '' }}">
                        <a href="{{ route('tests.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">@lang('global.tests.title')</span>
                        </a>
                    </li>
                @endcan

            @can('question_access')
            <li class="{{ $request->segment(2) == 'questions' ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                    <i class="fa fa-question"></i>
                    <span class="title">@lang('global.questions.title')</span>
                </a>
            </li>
            @endcan

            @can('questions_option_access')
            <li class="{{ $request->segment(2) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('global.questions-options.title')</span>
                </a>
            </li>
            @endcan
                @can('blogs_access')
                    <li class="{{  request()->is('blogs' ? 'active' : '') }}">
                        <a href="{{ route('blogs.index') }}">
                            <i class="fa fa-gears"></i>
                            <span class="title">@lang('global.blogs.title')</span>
                        </a>
                    </li>
                @endcan

                @can('setting')
                    <li class="nav-item start  {{ request()->is('setting' ? 'active' : '') }}">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="icon-wrench"></i>
                            <span class="title">@lang('global.global_site')</span>
                            <span class="pull-right-container">
                        <i class="arrow"></i>
                    </span>
                        </a>
                        @endcan
                        <ul class="sub-menu">

                            @can('setting')
                                <li class="nav-item start  {{ $request->segment(2) == 'setting' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('post-settings') }}" class="nav-link ">
                                        <i class=" icon-wrench"></i>
                                        <span class="title">
                                @lang('global.global_site')
                            </span>
                                    </a>
                                </li>
                            @endcan
                            @can('about')
                                <li class="nav-item start {{ $request->segment(2) == 'about' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('post-about') }}" class="nav-link ">
                                        <i class="icon-docs"></i>
                                        <span class="title">
                                @lang('global.global_about')
                            </span>
                                    </a>
                                </li>
                            @endcan
                                @can('contactme')
                                <li class="nav-item start {{ $request->segment(2) == 'contactme' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('contact_me.index') }}" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">
                                @lang('global.global_contact_me')
                            </span>
                                    </a>
                                </li>
                            @endcan
                                @can('emails')
                                    <li class="nav-item start {{ $request->segment(2) == 'emails' ? 'active active-sub' : '' }}">
                                        <a href="{{ route('email-all') }}" class="nav-link ">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="title">
                                @lang('global.global_mail-list')

                                        </a>
                                    </li>
                                @endcan
                                    @can('subscribe')
                                        <li class="nav-item start {{ $request->segment(2) == 'subscribe' ? 'active active-sub' : '' }}">
                                            <a href="{{ route('subscribe.show') }}" class="nav-link ">
                                                <i class="fa fa-briefcase"></i>
                                                <span class="title">
                                @lang('global.global_subscribe')
                            </span>
                                        </a>
                                    </li>
                                @endcan


                        </ul>
                    </li>
                @can('user_management_access')
                    <li class="nav-item start  {{ request()->is('permissions' ? 'active' : '') }}">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-users"></i>
                            <span class="title">@lang('global.user-management.title')</span>
                            <span class="pull-right-container">
                        <i class="arrow"></i>
                    </span>
                        </a>
                        @endcan
                        <ul class="sub-menu">

                            @can('permission_access')
                                <li class="nav-item start  {{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('permissions.index') }}" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">
                                @lang('global.permissions.title')
                            </span>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item start {{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('roles.index') }}" class="nav-link ">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="title">
                                @lang('global.roles.title')
                            </span>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item start {{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                    <a href="{{ route('users.index') }}"class="nav-link ">
                                        <i class="fa fa-user"></i>
                                        <span class="title">
                                @lang('global.users.title')
                            </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                    @endif

{{--            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">--}}
{{--                <a href="{{ route('auth.change_password') }}">--}}
{{--                    <i class="fa fa-key"></i>--}}
{{--                    <span class="title">Change password</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a href="#logout" onclick="$('#logout').submit();">--}}
{{--                    <i class="fa fa-arrow-left"></i>--}}
{{--                    <span class="title">@lang('global.app_logout')</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
    </div>>
</div>
{{--{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}--}}
{{--<button type="submit">@lang('global.logout')</button>--}}
{{--{!! Form::close() !!}--}}
