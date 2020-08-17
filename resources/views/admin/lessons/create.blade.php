@extends('layouts.admin')
@section('title','Create Lessons')
@section('content')
    <form method="post" action="{{ route('lessons.store') }}" role="form" enctype="multipart/form-data">
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="form_control_1">Course</label>
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
                    <label for="title">Lesson Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="{{old('title')}}" placeholder="Enter Lesson Title">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="lesson_image_image">Image</label>
                    <div class="custom-file">
                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="lesson_image_image">Files</label>
                    <div class="custom-file">
                        <input type="file" multiple name="file[]" class="file-input" id="files">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="">URL Vedio</label>
                    <input type="text" class="form-control " value="{{old('url_vedio')}}" id="url_vedio" name="url_vedio">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group ">
                    <label for="short_text">Description</label>

                    <textarea type="text" class="form-control   "  id="short_text" name="short_text">{{old('short_text')}}</textarea>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group editor">
                    <label for="full_text">Details</label>

                    <textarea type="text" class="form-control editor"  id="editor" name="full_text">{{old('full_text')}}</textarea>

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

@endsection

