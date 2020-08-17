@extends('layouts.admin')
@section('title','Question Details')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.questions.fields.question')</th>
                            <td>{!! $question->question !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.questions.fields.question-image')</th>
                            <td>@if($question->question_image)<a href="{{ asset('storage/' . $question->question_image) }}" target="_blank"><img width="100" src="{{ asset('storage/' . $question->question_image) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('global.questions.fields.score')</th>
                            <td>{{ $question->score }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#questionsoptions" aria-controls="questionsoptions" role="tab" data-toggle="tab">Questions options</a></li>
<li role="presentation" class=""><a href="#tests" aria-controls="tests" role="tab" data-toggle="tab">Tests</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="questionsoptions">
<table class="table table-bordered table-striped ">
    <thead>
        <tr>
            <th>@lang('global.questions-options.fields.question')</th>
                        <th>@lang('global.questions-options.fields.option-text')</th>
                        <th>@lang('global.questions-options.fields.correct')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($questions_options) > 0)
            @foreach ($questions_options as $questions_option)
                <tr data-entry-id="{{ $questions_option->id }}">
                    <td>{{ $questions_option->question->question or '' }}</td>
                                <td>{!! $questions_option->option_text !!}</td>
                    <td>
                        <input type="checkbox" name='correct' value="{{$questions_option->correct == 1 ? true : false}}" disabled class="form-check-input" id="correct">

                    </td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    <form method="post" action="{{ route('questions_options.restore', $questions_option->id) }}">
                                        @csrf


                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>

                                    <form method="post" action="{{ route('questions_options.perma_del', $questions_option->id) }}">
                                        @csrf
                                        @method('Delete')

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>

                                </td>
                                @else
                                <td>
                                    @can('questions_option_view')
                                    <a href="{{ route('questions_options.show',[$questions_option->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('questions_option_edit')
                                    <a href="{{ route('questions_options.edit',[$questions_option->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('questions_option_delete')

                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="tests">
<table class="table table-bordered table-striped ">
    <thead>
        <tr>
            <th>@lang('global.tests.fields.course')</th>
                        <th>@lang('global.tests.fields.lesson')</th>
                        <th>@lang('global.tests.fields.title')</th>
                        <th>@lang('global.tests.fields.description')</th>
                        <th>@lang('global.tests.fields.questions')</th>
                        <th>@lang('global.tests.fields.published')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($tests) > 0)
            @foreach ($tests as $test)
                <tr data-entry-id="{{ $test->id }}">
                    <td>{{ $test->course->title}}</td>
                                <td>{{ $test->lesson->title }}</td>
                                <td>{{ $test->title }}</td>
                                <td>{!! $test->description !!}</td>
                                <td>
                                    @foreach ($test->questions as $singleQuestions)
                                        <span class="label label-info label-many">{{ substr($singleQuestions->question,0,30)  }}</span>
                                    @endforeach
                                </td>
                    <td>
                        <input type="checkbox" name='published' value="{{$test->correct == 1 ? true : "" }}" disabled class="form-check-input" id="published">

                    </td>

                    @if( request('show_deleted') == 1 )
                        <form method="post" action="{{ route('tests.restore', $test->id)}}">
                            @csrf"

                            <button onclick='return confirm("Are you sure??")' type="submit"
                                    class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                        </form>
                        <form method="post" action="{{ route('tests.perma_del', $test->id)}}">
                            @csrf
                            @method("DELETE")

                            <button onclick='return confirm("Are you sure??")' type="submit"
                                    class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                        </form>
                                @else
                                <td>
                                    @can('test_view')
                                    <a href="{{ route('tests.show',[$test->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('test_edit')
                                    <a href="{{ route('tests.edit',[$test->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('test_delete')
                                            <form method="post" action="{{ route('tests.destroy',$test->id)}}">
                                                @csrf
                                                @method("DELETE")

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                            </form>

                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('questions.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
