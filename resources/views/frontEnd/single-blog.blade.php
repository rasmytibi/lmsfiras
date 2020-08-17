
@extends('frontEnd.layouts.main')

@section('content')


    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg={{asset('frontEnd/img/page-bg/2.jpg')}}>
        <div class="container">
            <div class="site-breadcrumb">
                <a href="/">Home</a>
                <a href="{{route('show_blogs')}}">Blogs</a>
                <span>{{$blog->title}}</span>

            </div>
        </div>
    </div>
    <!-- Page info end -->



    <!-- single course section -->
    <section class="single-course spad pb-0">
        <div class="container">

                        <img src="{{asset('storage/'. $blog->blog_image)}}"  alt="" class="course-preview">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 course-list">
                    <div class="cl-item">
                        <h4>Blog Description</h4>
                        <p>{{$blog->description}}</p>
                    </div>
                    <div class="cl-item">
                        <h4>Blog Details</h4>
                        <p>{{$blog->details}}</p>
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
{{--    <section class="realated-courses spad">--}}
{{--        <div class="course-warp">--}}
{{--            <h2 class="rc-title">Realated Courses</h2>--}}
{{--            <div class="rc-slider owl-carousel">--}}
{{--                <!-- course -->--}}
{{--                <div class="course-item">--}}
{{--                    <div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">--}}
{{--                        <div class="price">Price: $15</div>--}}
{{--                    </div>--}}
{{--                    <div class="course-info">--}}
{{--                        <div class="course-text">--}}
{{--                            <h5>Art & Crafts</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur</p>--}}
{{--                            <div class="students">120 Students</div>--}}
{{--                        </div>--}}
{{--                        <div class="course-author">--}}
{{--                            <div class="ca-pic set-bg" data-setbg="img/authors/1.jpg"></div>--}}
{{--                            <p>William Parker, <span>Developer</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- course -->--}}
{{--                <div class="course-item">--}}
{{--                    <div class="course-thumb set-bg" data-setbg="img/courses/2.jpg">--}}
{{--                        <div class="price">Price: $15</div>--}}
{{--                    </div>--}}
{{--                    <div class="course-info">--}}
{{--                        <div class="course-text">--}}
{{--                            <h5>IT Development</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur</p>--}}
{{--                            <div class="students">120 Students</div>--}}
{{--                        </div>--}}
{{--                        <div class="course-author">--}}
{{--                            <div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>--}}
{{--                            <p>William Parker, <span>Developer</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- course -->--}}
{{--                <div class="course-item">--}}
{{--                    <div class="course-thumb set-bg" data-setbg="img/courses/3.jpg">--}}
{{--                        <div class="price">Price: $15</div>--}}
{{--                    </div>--}}
{{--                    <div class="course-info">--}}
{{--                        <div class="course-text">--}}
{{--                            <h5>Graphic Design</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur</p>--}}
{{--                            <div class="students">120 Students</div>--}}
{{--                        </div>--}}
{{--                        <div class="course-author">--}}
{{--                            <div class="ca-pic set-bg" data-setbg="img/authors/3.jpg"></div>--}}
{{--                            <p>William Parker, <span>Developer</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- course -->--}}
{{--                <div class="course-item">--}}
{{--                    <div class="course-thumb set-bg" data-setbg="img/courses/4.jpg">--}}
{{--                        <div class="price">Price: $15</div>--}}
{{--                    </div>--}}
{{--                    <div class="course-info">--}}
{{--                        <div class="course-text">--}}
{{--                            <h5>IT Development</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur</p>--}}
{{--                            <div class="students">120 Students</div>--}}
{{--                        </div>--}}
{{--                        <div class="course-author">--}}
{{--                            <div class="ca-pic set-bg" data-setbg="img/authors/4.jpg"></div>--}}
{{--                            <p>William Parker, <span>Developer</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- course -->--}}
{{--                <div class="course-item">--}}
{{--                    <div class="course-thumb set-bg" data-setbg="img/courses/5.jpg">--}}
{{--                        <div class="price">Price: $15</div>--}}
{{--                    </div>--}}
{{--                    <div class="course-info">--}}
{{--                        <div class="course-text">--}}
{{--                            <h5>IT Development</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur</p>--}}
{{--                            <div class="students">120 Students</div>--}}
{{--                        </div>--}}
{{--                        <div class="course-author">--}}
{{--                            <div class="ca-pic set-bg" data-setbg="img/authors/5.jpg"></div>--}}
{{--                            <p>William Parker, <span>Developer</span></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- course -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Page end -->

@endsection
