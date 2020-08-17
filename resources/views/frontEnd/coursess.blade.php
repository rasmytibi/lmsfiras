@extends('frontEnd.layouts.main')
@section('content')

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="{{asset('frontEnd/img/page-bg/3.jpg')}}">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="/">Home</a>
				<span>Courses</span>
			</div>
		</div>
	</div>
    @include('frontEnd.layouts.in-search')

    <!-- Page info end -->
{{--@include('frontEnd.layouts.search')--}}
	<!-- Page  -->
	<section class="blog-page spad pb-0">
		<div class="container">
			<div class="row">
                @include('frontEnd.layouts.course')
			</div>

        </div>
	</section>
	<!-- Page end -->

@endsection
