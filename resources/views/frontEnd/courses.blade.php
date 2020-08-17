@extends('frontEnd.layouts.main')
@section('content')



    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="/">Home</a>
                <span>Courses</span>
            </div>
        </div>
    </div>

{{--    @include('frontEnd.layouts.in-search')--}}



    <!-- course section -->
    <section class="course-section spad pb-0">
        <div class="course-warp">
            <ul class="course-filter controls">

                <li class="control active" data-filter="all">All</li>

                @php
                    $i=1;
                @endphp

                @foreach($category as $row)
                <li class="control data-filter=" @if ($i==1) .finance  @elseif ($i==2) .design  @elseif ($i==3) .web @elseif ($i==4) .photo @elseif ($i==5) .web @elseif ($i==6) .finance @else .web    @endif">{{$row->name}}</li>
                @endforeach

            </ul>
        </div>
    </section>
