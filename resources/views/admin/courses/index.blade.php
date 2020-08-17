@extends('layouts.admin')
@section("title", "Manage Courses")

@section('content')
    @can('course_create')

            <form class='row'>
                <div class='col-sm-2'>
                    <input type='text'  name="q" value='{{ request()->get("title") }}' class="form-control" placeholder="enter title to search"/>
                </div>

                <div class="col-sm-3">
                    <select name="published" class="form-control">
                        <option value=''>Any Status</option>
                        <option {{ request()->get("published") ?"selected":"" }} value='1'>Active</option>
                        <option {{ request()->get("published")=='0' ?"selected":"" }} value='0'>Inactive</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <select name="category"  class="form-control">
                        <option value=''>Any Category</option>
                        @foreach($categories as $category)
                            <option {{ $category->id==request()->get('category')?"selected":""}} value='{{ $category->id}}'>{{ $category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-sm-2'>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('global.app_search')</button>

                </div>
                <div class='col-sm-2'>
                    <a href="{{ route('courses.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

                </div>

            </form>

    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('courses.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('courses.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                    <tr>

                        @if (Auth::user()->isAdmin())
                            <th>@lang('global.courses.fields.teachers')</th>
                        @endif
                        <th>@lang('global.courses.fields.title')</th>
                        <th>@lang('global.courses.fields.description')</th>
                        <th>@lang('global.courses.fields.course-image')</th>
                        <th>Join Students</th>
                        <th>@lang('global.courses.fields.start-date')</th>
                        <th>@lang('global.courses.fields.published')</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($courses) > 0)
                        @foreach ($courses as $course)


                                @if (Auth::user()->isAdmin())
                                <td>
{{--                                    @foreach ($course->teachers as $singleTeachers)--}}
{{--                                        @dd($singleTeachers)--}}
                                        <span><b>@isset($course->teachers){{$course->teachers->name}}@endisset</b></span>
{{--                                    @endforeach--}}
                                </td>
                                @endif
                                <td>{{ $course->title }}</td>
                                <td>{{substr($course->description,0,40)}} </td>
                                <td><a href="{{ asset('storage/' . $course->course_image) }}" target="_blank"><img src="{{ asset('storage/' . $course->course_image) }} " style="width:100px;height: 90px"/></a></td>
                                <td> <span class="label label-danger label-many ">{{$course->students->count()}}</span></td>
                                <td>{{ $course->getDifDate($course->start_date) }}</td>

                                <td>
                                    @if($course->published)
                                        <a href="{{route('course.status',$course->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                    @else
                                        <a href="{{route('course.status',$course->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                    @endif
                                </td>

                                @if( request('show_deleted') == 1 )

                                <td>

                                    <form method="post" action="{{ route('courses.restore', $course->id) }}">
                                        @csrf


                                        <button onclick='return confirm("Are you sure??")' type="submit" class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>


                                    {{--                                    <form method="post" action="{{ route('delete_full_cource', $course->id) }}">--}}
{{--                                        @csrf--}}
{{--                                        @method('Delete')--}}


{{--                                        <button onclick='return confirm("Are you sure??")' type="submit"--}}
{{--                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>--}}

{{--                                    </form>--}}
                                    <a href="{{ route("delete_full_cource", $course->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>



                                </td>
                                @else
                                <td>
                                    @can('course_view')
                                    <a href="{{ route('lessons.index',['course_id' => $course->id]) }}" class="btn btn-xs btn-primary">@lang('global.lessons.title')</a>
                                    @endcan
                                    @can('course_edit')
                                    <a href="{{ route('courses.edit',[$course->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('course_delete')
                                            <form method="post" action="{{ route('courses.destroy', $course->id) }}">
                                                @csrf
                                                @method("DELETE")

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>
                                                </button>

                                            </form>

                                         {{--  <a href="{{ route("delete-course", $course->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>--}}

                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

   {{ $courses->links() }}

    </div>
@endsection


