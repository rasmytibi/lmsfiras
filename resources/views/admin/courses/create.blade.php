@extends('layouts.admin')
@section("title", "Create Course")

@section('content')
    <form method="post" action="{{ route('courses.store') }}" role="form" enctype="multipart/form-data">
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            @if (Auth::user()->isAdmin())
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="teacher">Teacher</label>
                    <select name="teachers" class="form-control select2 js-example-placeholder-multiple">
                        <option value="">Select Teacher</option>
                        @foreach($teachers as $teacher)

                            <option {{old('teachers')== $teacher->id?"selected":""}} value='{{$teacher->id}}'>{{$teacher->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endif
                <div class="row">
                    <div class="col-xs-12 form-group">
                    <label for="form_control_1">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)

                            <option   {{old('category_id')== $category->id?"selected":""}} value='{{$category->id}}'>{{$category->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Course Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="{{old('title')}}" placeholder="Enter Course Title">

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="description">Description</label>
                    <textarea  class="form-control"  id="description" value="{{old('description')}}" name="description" ></textarea>

                  </div>
            </div>
                <label for="course_image">Image</label>
                <div class="custom-file">
                    <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control date" value="{{old('start_date')}}" id="start_date" name="start_date">

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

