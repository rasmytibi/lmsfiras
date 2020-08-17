@extends('layouts.admin')
@section('title','Edit Question')

@section('content')
    <form method="post" action="{{ route('questions.update',$question->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @method('put')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group ">
                    <label for="question">Description</label>

                    <textarea type="text" class="form-control   "  id="question" name="question">{{old('question')??$question->question}}</textarea>
                    @if($errors->has('question'))
                        <p class="help-block">
                            {{ $errors->first('question') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 form-group">
                    @if ($question->question_image)
                        <a href="{{ asset('storage/'.$question->question_image) }}" target="_blank"><img src="{{ asset('storage/'.$question->question_image) }}"style="width:300px;height: 200px"></a>
                    @endif
                    <div class="custom-file">
                        <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="score">Score</label>
                    <input type="number" class="form-control " value="{{old('score')??$question->score}}" id="score" name="score">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <select name="tests" class="form-control">
                        <option value="" >Select Test</option>
                        @foreach($tests as $test)
                            <option   {{old('tests')??$test->id == $test->id?"selected":""}} value='{{$test->id}}'>{{$test->title}}</option>
{{--                            <option   {{old('course_id')??$course->id == $course->id?"selected":""}} value='{{$course->id}}'>{{$course->title}}</option>--}}

                        @endforeach
                    </select>

                </div>
            </div>


        </div>
    </div>

        <button type="submit" class="btn btn-primary">@lang('global.app_edit')</button>
        <a class='btn btn-danger' href='{{ asset("admin/questions") }}'>@lang('global.app_cancel')</a>
    </form>
@endsection
