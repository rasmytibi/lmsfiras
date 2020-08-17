@extends('layouts.admin')
@section("title", "Edit Course")
@section('content')
    <form method="post" action="{{ route('courses.update',$course->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
                        @foreach($teachers as  $id => $teacher)

                            <option {{(in_array($id,old('teachers',[])) || isset($course) && $course->teachers->contains($id)) ? 'selected' : '' }} value="{{ $id }}">{{$teacher}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)

                        <option   {{old('category_id')??$category->id == $category->id?"selected":""}} value='{{$category->id}}'>{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="title">Course Title</label>
                        <input type="text" class="form-control" id="form_control_1" name="title"
                               value="{{old('title')??$course->title}}" placeholder="Enter Course Title">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control"  id="description" value="{{old('description')}}" name="description" >{{$course->description}}</textarea>

                    </div>
                </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="col-xs-12 form-group">
                    @if ($course->course_image)
                        <a href="{{ asset('storage/'.$course->course_image) }}" target="_blank"><img src="{{ asset('storage/'.$course->course_image) }}" style="width: 300px;height: 200px"></a>
                    @endif
                    </div>
                        <div class="col-xs-12 form-group">
                        <div class="custom-file">
                            <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                        </div></div>

                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control date" value="{{old('start_date')??$course->start_date}}" id="start_date" name="start_date">

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">

                    <input {{ (old('published')??$course->published)?"checked":"" }} value='1' type="checkbox" name='published' class="form-check-input" id="status">
                    <label class="form-check-label" for='published'>Active</label>


            </div>
        </div>

        </div>
    </div>
        <button type="submit" class="btn btn-primary">@lang('global.app_edit')</button>
        <a class='btn btn-danger' href='{{ asset("admin/categories") }}'>@lang('global.app_cancel')</a>
    </form>

@endsection

