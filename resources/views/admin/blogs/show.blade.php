@extends('layouts.admin')
@section('title','Blog Details')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">

                        <tr>
                            <th>@lang('global.blogs.fields.title')</th>
                            <td>{{ $blogs->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.description')</th>
                            <td>{{ $blogs->description }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.details')</th>
                            <td>{{ $blogs->details }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.blog_image')</th>
                            <td>@if($blogs->blog_image)<a href="{{ asset('storage/' . $blogs->blog_image) }}" target="_blank"><img width="200" src="{{ asset('storage/' . $blogs->blog_image) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.published')</th>
                            <td><input disabled {{$blogs->published?"checked":"" }} value='1' type="checkbox" name='published' class="form-check-input" id="published"></td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.slider_show')</th>
                            <td><input disabled {{$blogs->slider_show?"checked":"" }} value='1' type="checkbox" name='slider_show' class="form-check-input" id="slider_show"></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <!-- Tab panes -->


            <a href="{{ route('blogs.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
