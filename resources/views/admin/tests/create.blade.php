@extends('layouts.admin')
@section('title','Create New Test')

@section('content')
    <form method="post" action="{{ route('tests.store') }}" role="form" enctype="multipart/form-data">
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <select name="course_id" class="form-control">
                        <option value="">Select Course</option>
                        @foreach($courses as $course)

                            <option   {{old('course_id')== $course->id?"selected":""}} value='{{$course->id}}'>{{$course->title}}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <select name="lesson_id" class="form-control select2">
                        <option value="">Select Lesson</option>
                        @foreach($lessons as $lesson)

                            <option   {{old('lesson_id')== $lesson->id?"selected":""}} value='{{$lesson->id}}'>{{$lesson->title}}</option>
                        @endforeach
                    </select>

                 </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Test Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="{{old('title')}}" placeholder="Enter Test Title">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">

                        <label for="description">Description</label>
                        <textarea type="text" class="form-control   "  id="description" name="description">{{old('description')}}</textarea>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <input type="checkbox" name='published' value="{{old('published')?? ""}}" class="form-check-input" id="Published">
                    <label class="form-check-label" for='published'>Active</label>
                </div>
            </div>

        </div>
    </div>

        <button type="submit" class="btn btn-danger">@lang('global.app_save')</button>
    </form>
@endsection

