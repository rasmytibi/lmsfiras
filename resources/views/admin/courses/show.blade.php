@extends('layouts.admin')
@section('title','Course Details')
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
                            <td>@if($blogs->blog_image)<a href="{{ asset('uploads/' . $blogs->blog_image) }}" target="_blank"><img src="{{ asset('uploads/thumb/' . $blogs->blog_image) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.published')</th>
                            <td>{{ Form::checkbox("published", 1, $blogs->published == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.blogs.fields.slider_show')</th>
                            <td>{{ Form::checkbox("slider_show", 1, $blogs->slider_show == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#lessons" aria-controls="lessons" role="tab" data-toggle="tab">Lessons</a></li>
<li role="presentation" class=""><a href="#tests" aria-controls="tests" role="tab" data-toggle="tab">Tests</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="lessons">
<table class="table table-bordered table-striped {{ count($lessons) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.lessons.fields.course')</th>
                        <th>@lang('global.lessons.fields.title')</th>
                        <th>@lang('global.lessons.fields.slug')</th>
                        <th>@lang('global.lessons.fields.lesson-image')</th>
                        <th>@lang('global.lessons.fields.short-text')</th>
                        <th>@lang('global.lessons.fields.full-text')</th>
                        <th>@lang('global.lessons.fields.position')</th>
                        <th>@lang('global.lessons.fields.downloadable-files')</th>
                        <th>@lang('global.lessons.fields.free-lesson')</th>
                        <th>@lang('global.lessons.fields.published')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

</table>
</div>
</div>


            <a href="{{ route('admin.blogs.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
