@extends('layouts.admin')
@section("title", "Manage Lesson")

@section('content')
    @can('lesson_create')
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
                <select name="course"  class="form-control">
                    <option value=''>Any Courses</option>
                    @foreach($courses as $course)
                        <option {{ $course->id==request()->get('course_id')?"selected":""}} value='{{ $course->id}}'>{{ $course->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class='col-sm-2'>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('global.app_search')</button>

            </div>
            <div class='col-sm-2'>
                <a href="{{ route('lessons.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

            </div>

        </form>

    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('lessons.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('lessons.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">


        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th>@lang('global.lessons.fields.course')</th>
                        <th>@lang('global.lessons.fields.title')</th>
                        <th>Image</th>
                        <th>@lang('global.lessons.fields.published')</th>
                        <th>Actions</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @if (count($lessons) > 0)
                        @foreach ($lessons as $lesson)


                                <td>{{ $lesson->course->title }}</td>
                                <td>{{ $lesson->title }}</td>
                                <td><a href="{{ asset('storage/' . $lesson->lesson_image) }}" target="_blank"><img src="{{ asset('storage/' . $lesson->lesson_image) }} " style="width:100px;height: 90px"/></a></td>
                                <td>
                                    @if($lesson->published)
                                        <a href="{{route('lesson.status',$lesson->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                    @else
                                        <a href="{{route('lesson.status',$lesson->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                    @endif
                                </td>

                                @if( request('show_deleted') == 1 )
                                <td>

{{--                                    <form method="post" action="{{ route('delete_full_lessons', $lesson->id) }}">--}}
{{--                                        @csrf--}}
{{--                                        @method('Delete')--}}

{{--                                        <button onclick='return confirm("Are you sure??")' type="submit"--}}
{{--                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>--}}

{{--                                    </form>--}}
                                    <a href="{{ route("delete-lesson", $lesson->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


                                </td>
                                @else
                                <td>
                                    @can('lesson_view')
                                    <a href="{{ route('lessons.show',[$lesson->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('lesson_edit')
                                    <a href="{{ route('lessons.edit',[$lesson->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('lesson_delete')
{{--                                            <form method="post" action="{{ route('lessons.destroy', $lesson->id) }}">--}}
{{--                                                @csrf--}}
{{--                                                @method("DELETE")--}}

{{--                                                <button onclick='return confirm("Are you sure??")' type="submit"--}}
{{--                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>--}}
{{--                                                </button>--}}

{{--                                            </form>--}}
                                            <a href="{{ route("delete-lesson", $lesson->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


                                        @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="14">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{ $lessons->links() }}

    </div>
@stop

