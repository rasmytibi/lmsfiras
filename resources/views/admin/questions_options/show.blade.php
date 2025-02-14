@extends('layouts.admin')
@section('title','Question Option Details')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.questions-options.fields.question')</th>
                            <td>{{ $questions_option->question->question or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.questions-options.fields.option-text')</th>
                            <td>{!! $questions_option->option_text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.questions-options.fields.correct')</th>
                            <td>
                                <input type="checkbox" name='correct' {{$questions_option->correct == 1 ? true : false}} value="1" disabled class="form-check-input" id="correct">


{{--                                {{ Form::checkbox("correct", 1, $questions_option->correct == 1 ? true : false, ["disabled"]) }}</td>--}}
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions_options.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@endsection
