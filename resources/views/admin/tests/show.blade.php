@extends('layouts.admin')
@section('title','Test Details')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.tests.fields.course')</th>
                            <td>{{ $test->course->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.tests.fields.lesson')</th>
                            <td>{{ $test->lesson->title}}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.tests.fields.title')</th>
                            <td>{{ $test->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.tests.fields.description')</th>
                            <td>{!! $test->description !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.tests.fields.questions')</th>
                            <td>
                                @foreach ($test->questions as $singleQuestions)
                                    <span class="label label-info label-many">{{ $singleQuestions->question }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('global.tests.fields.published')</th>

                            <td>
                                @if($test->published)
                                    <a href="#" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                @else
                                    <a href="#" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('tests.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@endsection
