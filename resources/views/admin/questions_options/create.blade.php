@extends('layouts.admin')
@section('title','Create New Question Option')

@section('content')
    <form method="post" action="{{ route('questions_options.store') }}" role="form" enctype="multipart/form-data">
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <select name="question_id" class="form-control">
                        <option value="" >Question</option>
                        @foreach($questions as $questions)
                            {!! Form::textarea('option_text', old('option_text'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}

                            <option   {{old('question_id')== $questions->id?"selected":""}} value='{{$questions->id}}'>{{$questions->question}}</option>
                        @endforeach
                    </select>

                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="col-xs-12 form-group ">
                        <label for="option_text">Option text</label>

                        <textarea type="text" class="form-control"  id="option_text" name="option_text">{{old('option_text')}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="correct">Correct</label>
                    <input type="hidden" name="correct" class="custom-file-input" id="correct" value="0">
                    <input type="checkbox" name='correct' value="1" {{old('correct')?"checked":"" }} class="form-check-input" id="correct">


                </div>
            </div>

        </div>
    </div>

        <button type="submit" class="btn btn-danger">@lang('global.app_save')</button>
        <a class='btn btn-danger' href='{{ asset("admin/questions_options") }}'>@lang('global.app_cancel')</a>
    </form>
@endsection
