
<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-0">
            <h2>Featured Courses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
        </div>
    </div>
    <div class="course-warp">
        <ul class="course-filter controls">
            <li class="control active" data-filter="all">All</li>
            @php
                $i=1;
            @endphp

            @foreach($category as $row)
                {{--                @foreach($course as $row1)--}}
                <li class="control" data-filter=".cat{{$row->id}}">{{$row->name}} </li>

                {{--                <li class="control" data-filter="{{$row->id}}">{{$row->name}}</li>--}}
                @php
                    $i++;
                @endphp
            @endforeach
        </ul>


        <div class="row course-items-area">

        @php
            $i=1;
        @endphp
        @foreach($category as $row)
            @php
                $a=1;
            @endphp
            @foreach($row->courses as $course)

                <!-- course -->
                    <div class="mix col-lg-3 col-md-4 col-sm-6 cat{{$row->id}} ">
                        <div class="course-item">
                            <div class="course-thumb set-bg" data-setbg="{{asset('storage/'. $course->course_image)}}">
                                <div class="price">Price: $14</div>
                            </div>
                            <div class="course-info">
                                <div class="course-text">
                                    <a href="{{route('single_course',$course->id)}}"><h5>{{substr($course->title,0,20)}}</h5></a>
                                    <a href="{{route('single_course',$course->id)}}"><p>{{substr($course->description,0,50)}}</p></a>
                                    <div class="students">{{$course->students->count()}} Students</div>
                                </div>
                                <div class="course-author">
                                    <div class="ca-pic set-bg" data-setbg={{asset('storage/' . $course->teachers->image)}}></div>
                                    <p>{{$course->teachers->name}}, <span>Developer</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $a++;
                    @endphp
                @endforeach
                @php
                    $i++;
                @endphp
            @endforeach

        </div>

    </div>
</section>
<!-- course section end -->

