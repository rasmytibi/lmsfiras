@extends("layouts.admin")
@if(Auth::user()->isAdmin())

@section("title",  "Admin Dashboard")
    @elseif(Auth::user()->isTeacher())
        @section("title",  "Teachers Dashboard")
@else
    @section("title",  "Student Dashboard")
    @endif
@section("content")

  <div class="row">
      <div class='alert alert-info'><b>Welcome {{ auth()->user()->name }} </b>Please select from left menu</div>

  </div>

  <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
              <div class="visual">
                  <i class="fa fa-comments"></i>
              </div>
              <div class="details">
                  <div class="number">

                      <span data-counter="counterup" data-value="{{$student->count()}}">{{$student->count()}}</span>
                  </div>
                  <div class="desc">Students </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 red" href="#">
              <div class="visual">
                  <i class="fa fa-bar-chart-o"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span data-counter="counterup" data-value="{{$teachers->count()}}">{{$teachers->count()}}</span> </div>
                  <div class="desc"> Teachers </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 green" href="#">
              <div class="visual">
                  <i class="fa fa-book"></i>
              </div>
              <div class="details">
                  <div class="number">
                      <span data-counter="counterup" data-value="{{$course->count()}}">{{$course->count()}}</span>
                  </div>
                  <div class="desc"> Courses </div>
              </div>
          </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
              <div class="visual">
                 <i class=" fa fa-pencil"></i>
              </div>
              <div class="details">
                  <div class="number"> +
                      <span data-counter="counterup" data-value="{{$lesson->count()}}" >{{$lesson->count()}}</span></div>
                  <div class="desc"> Lessons </div>
              </div>
          </a>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-6 col-xs-12 col-sm-12">
          <div class="portlet light ">
              <div class="portlet-title">
                  <div class="caption">
                      <span class="caption-subject bold uppercase font-dark">Revenue</span>
                      <span class="caption-helper">distance stats...</span>
                  </div>

              </div>
              <div class="portlet-body">
                  <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
              </div>
          </div>
      </div>
      <div class="col-lg-6 col-xs-12 col-sm-12">
          <div class="portlet light ">
              <div class="portlet-title">
                  <div class="caption ">
                      <span class="caption-subject font-dark bold uppercase">Finance</span>
                      <span class="caption-helper">distance stats...</span>
                  </div>

              </div>
              <div class="portlet-body">
                  <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
              </div>
          </div>
      </div>
  </div>



@endsection
