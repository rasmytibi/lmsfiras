
@extends('frontEnd.layouts.main')

@section('content')


    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg={{asset('frontEnd/img/page-bg/2.jpg')}}>
        <div class="container">
            <div class="site-breadcrumb">
                <a href="/">Home</a>
                <a href="{{route('coursess')}}">Courses</a>
                <a href="{{route('single_course',$lesson->course->id)}}">{{$lesson->course->title}}</a>
                <span>{{$lesson->title}}</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->


@include('frontEnd.layouts.in-search')

    <!-- single course section -->
    <section class="single-course spad  pb-0">
        <div class="container">

            <div class="row">
                <div class="col-md-5 content-center  course-list">
                    <div class="cl-item">
                        <h4>lesson Description</h4>
                        <p>{{$lesson->short_text}}</p>
                    </div>
                    <div class="cl-item">
                        <h4>lesson Details</h4>
                        <p>{{$lesson->full_text}}</p>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5  course-list">
{{--                    <div class="cl-item">--}}
                        <h4>lesson Image</h4>
                        <img src="{{asset('storage/'. $lesson->lesson_image)}}"  alt="" class="course-preview">
{{--                    </div>--}}
{{--                    <div class="cl-item">--}}
                        <h4>lesson Vedio</h4>
                        <video  width="100%" height="250px" class="js-player"   data-plyr-embed-id="{{$lesson->url_vedio}}" data-plyr-provider="youtube"  playsinline controls>
                            <source src="{{$lesson->url_vedio}}" type="youtube"/>
                        </video>
{{--                    </div>--}}

                </div>

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
