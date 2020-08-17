@extends('layouts.admin')
@section('title','Create New Question')

@section('content')
    <form method="post" action="{{ route('questions.store') }}" role="form" enctype="multipart/form-data">
        @csrf
    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                    <div class="col-xs-12 form-group ">
                        <label for="question">Question</label>

                        <textarea type="text" class="form-control   "  id="question" name="question">{{old('question')}}</textarea>
                     </div>

            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="imageFile">Image</label>
                    <div class="custom-file">
                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="score">Score</label>
                    <input type="number" class="form-control " value="{{old('score',1)}}" id="score" name="score">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <select name="tests" class="form-control">
                        <option value="" >Select Test</option>
                        @foreach($tests as $test)

                            <option   {{old('tests')== $test->id?"selected":""}} value='{{$test->id}}'>{{$test->title}}</option>
                        @endforeach
                    </select>

                </div>
            </div>

        </div>
    </div>

    @for ($question=1; $question<=4; $question++)
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                    <div class="col-xs-12 form-group ">
                        <label for="option_text_">Option</label>
{{--                        {!! Form::textarea('option_text_' . $question, old('option_text'), ['class' => 'form-control ', 'rows' => 3]) !!}--}}

                        <textarea multiple type="text" class="form-control" rows="3"   id="option_text"  name="option_text[]">{{old('option_text')}}</textarea>
                    </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
{{--                    old('permission',[])== $permission->id?"selected":""--}}
                    <input name='correct[]' multiple  type='checkbox' value="1"{{old('correct',[])?"checked":"" }} />

{{--                    <input type="checkbox"   name='correct_' value="1" {{old('correct')?1:"checked"}}   class="form-check-input" id="correct_">--}}
{{--                    <input type="hidden" name='correct_' value="0" {{old('correct')}} class="form-check-input" id="correct_">--}}
                    <label class="form-check-label" name="correct" for='correct'>Correct</label>

                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 form-group">--}}
{{--                    {!! Form::label('correct_' . $question, 'Correct', ['class' => 'control-label']) !!}--}}
{{--                    {!! Form::hidden('correct_' . $question, 0) !!}--}}
{{--                    {!! Form::checkbox('correct_' . $question, 1, false, []) !!}--}}

        </div>
    </div>


    @endfor

        <button type="submit" class="btn btn-danger">@lang('global.app_save')</button>
        <a class='btn btn-danger' href='{{ asset("admin/questions") }}'>@lang('global.app_cancel')</a>
    </form>
@endsection

