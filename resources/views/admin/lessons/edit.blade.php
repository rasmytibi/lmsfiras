@extends('layouts.admin')
@section('title','Edit Lessons')

@section('content')
    <form method="post" action="{{ route('lessons.update',$lesson->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @method('put')


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="form_control_1">Course</label>
                    <select name="course_id" class="form-control select2">
                        <option value="">Select Course</option>
                        @foreach($courses as $course)

                            <option   {{old('course_id')??$course->id == $course->id?"selected":""}} value='{{$course->id}}'>{{$course->title}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Lesson Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="{{old('title')??$lesson->title}}" >


                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 form-group">



                    @if ($lesson->lesson_image)
                        <a href="{{ asset('storage/'.$lesson->lesson_image) }}" target="_blank"><img src="{{ asset('storage/'.$lesson->lesson_image) }}"style="width:300px;height: 200px"></a>
                    @endif
                        <div class="custom-file">
                            <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                        </div>
                </div>


                </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="lesson_image_image">Files</label>
                    <div class="custom-file">
                        <input type="file" multiple name="file[]" class="file-input" id="files">
                    </div>
                </div>
            </div>
            <div class="row">
                <td>
                    <?php $files = json_decode($lesson->files) ?>
                    @if(!empty($files))
                        <hr>
                        @foreach($files as $file)
                            <ul>
                                <li>
                                    <a width='100' href='{{asset("storage/".$file)}}' target="_blank">Download File {{substr($lesson->title,0,30)}}</a>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </td>

            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="url_vedio">URL Vedio</label>
                    <input type="text" class="form-control " value="{{old('url_vedio')??$lesson->url_vedio}}" id="url_vedio" name="url_vedio">

                </div>
            </div>
        <div class="row">
            <div class="col-xs-12 form-group ">
                <label for="short_text">Description</label>

                <textarea type="text" class="form-control   "  id="short_text" name="short_text">{{old('short_text')??$lesson->short_text}}</textarea>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group editor">
                <label for="full_text">Details</label>

                <textarea type="text" class="form-control editor"  id="editor" name="full_text">{{old('full_text')??$lesson->full_text}}</textarea>

            </div>
        </div>
        <div class="row">
        <div class="col-xs-12 form-group">

            <input type="checkbox" name='published' value="1" {{(old('published')??$lesson->published)?"checked":""}} class="form-check-input" id="Published">
            <label class="form-check-label" for='published'>Active</label>

        </div>
        </div>
    </div>
    </div>


        <button type="submit" class="btn btn-primary">@lang('global.app_edit')</button>
        <a class='btn btn-danger' href='{{ asset("admin/lessons") }}'>@lang('global.app_cancel')</a>
    </form>
@endsection

