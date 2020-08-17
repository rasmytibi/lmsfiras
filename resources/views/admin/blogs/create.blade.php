@extends('layouts.admin')
@section('title','Create blogs')
@section('content')
    <form method="post" action="{{ route('blogs.store') }}" role="form" enctype="multipart/form-data">
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Blog Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="{{old('title')}}" placeholder="Enter Blog Title">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="blog_image_image">Image</label>
                    <div class="custom-file">
                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group ">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control   "  id="description" name="description">{{old('description')}}</textarea>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group editor">
                    <label for="details">Details</label>

                    <textarea type="text" class="form-control editor"  id="editor" name="details">{{old('details')}}</textarea>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">

                <label for="published">Published</label>
                </div>

                <div class="col-xs-6 form-group">
                    <input type="checkbox" name='published' value="{{old('published')?? ""}}" class="form-check-input" id="Published">
                    <label class="form-check-label" for='published'>Active</label>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 form-group">

                    <label for="slide_show">Slider_show</label>
                </div>
                <div class="col-xs-6 form-group">

                    <input type="checkbox" name='slide_show' value="{{old('slide_show')?? ""}}" class="form-check-input" id="slide_show">
                    <label class="form-check-label" for='slide_show'>Active</label>

                </div>
            </div>

        </div>
    </div>
        <button type="submit" class="btn btn-danger">@lang('global.app_save')</button>

@endsection

