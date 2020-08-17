
@extends('frontEnd.layouts.main')

@section('content')


    <!-- Page info -->
    <div class="page-info-section set-bg"  data-setbg={{asset('frontEnd/img/page-bg/2.jpg')}}>
        <div class="container">
            <div class="site-breadcrumb">
                <a href="/">Home</a>
                <a href="{{route('coursess')}}">Courses</a>
                <span>{{$course->title}}</span>

            </div>
        </div>
    </div>
    <!-- Page info end -->


@include('frontEnd.layouts.in-search')

    <!-- single course section -->
    <section class="single-course spad pb-0">
        <div class="container">

                        <img src="{{asset('storage/'. $course->course_image)}}" width="100%"  alt="" class="course-preview">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 course-list">
                    <div class="cl-item">
                        <h4>Course Description</h4>

                        <p>{{$course->description}}</p>
                    </div>
                    <div class="cl-item">
                        <h4>Lessons</h4>
                    </div>
                    <div class="cl-item">
                        @if (Auth::check() && $is_joined == 1)
                        <ul>
                            @php
                            $i=1;
                            @endphp

                            @foreach($course->lessons as $lesson)
                            <a href="{{route('lesson',$lesson->id)}}"><li>
                               {{$lesson->title}}
                                </li></a>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                        </ul>

                            @elseif (Auth::check() && $is_joined == 0)
                            <h3>Please Join Button To See Lesson This Course</h3>
                            @else
                            <h3>Please Sign In Or Sign Up To See Lesson This Course</h3>
                            @endif

                    </div>
                    @if (Auth::check() && $is_joined == 0)
                        <form action="{{route('join')}}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            {{--                                <a href="{{route('login')}}" class="site-btn header-btn">Login</a>--}}

                            <input type="submit" class="join-btn join"  name="join" value="Join Course">
                        </form>
                    @endif
                    </div>
{{--                    <div class="cl-item">--}}
{{--                        <h4>Certification</h4>--}}
{{--                        <p>Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum.</p>--}}
{{--                    </div>--}}
{{--                    <div class="cl-item">--}}
{{--                        <h4>The Instructor</h4>--}}
{{--                        <p>Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. </p>--}}
{{--                    </div>--}}
                </div>
        </div>
    </section>


    <!-- single course section end -->
    <!-- Page -->
    <section class="realated-courses spad">
        <div class="course-warp">
            <h2 class="rc-title">Realated Courses</h2>
            <div class="rc-slider owl-carousel">

                @foreach($last as $last)   <!-- course -->
                <div class="course-item">
                    <div class="course-thumb set-bg" data-setbg="{{ asset('storage/' . $last->course_image) }}">
                    </div>
                    <div class="course-info">
                        <div class="course-text">
                            <a href="{{route('single_course',$last->id)}}"><h5>{{$last->title}}</h5></a>
                            <a href="{{route('single_course',$last->id)}}"><p>{{substr($last->description,0,50)}}</p></a>
                        </div>
                        <div class="course-author">
                            <div class="ca-pic set-bg" data-setbg="img/authors/1.jpg"></div>
                            <p>William Parker, <span>Developer</span></p>
                        </div>
                    </div>
                </div>
                <!-- course -->
              @endforeach
                <!-- course -->
            </div>
        </div>
    </section>
    <!-- Page end -->
@endsection
