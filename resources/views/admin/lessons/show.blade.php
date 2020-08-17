@extends('layouts.admin')
@section("title", " Lesson Details")

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="20%">@lang('global.lessons.fields.course')</th>
                            <td>{{ $lesson->course->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.lessons.fields.title')</th>
                            <td>{{ $lesson->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.lessons.fields.description')</th>
                            <td>{!! $lesson->short_text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.lessons.fields.details')</th>
                            <td>{!! $lesson->full_text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.tests.fields.published')</th>

                            <td>
                                @if($lesson->published)
                                    <a href="#" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                @else
                                    <a href="#" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('global.lessons.fields.lesson-image')</th>
                            <td>@if($lesson->lesson_image)<a href="{{ asset('storage/' . $lesson->lesson_image) }}" target="_blank"><img src="{{ asset('storage/' . $lesson->lesson_image) }}" style="width:100%;height: 250px"/></a>@endif</td>

                        </tr>

                        <tr>
                            <th>Lesson Vedio</th>
                            <td>
                                <video src="{{ $lesson->url_vedio }}" type="video/mp4"  data-plyr-provider="youtube"   width="100%" height="250px"    playsinline controls>
{{--                                    <source src="{{ $lesson->url_vedio }}" type="video/mp4"/>--}}
                                </video>



                            </td>
                        </tr>

                        <tr>
                            <th>Lesson Files</th>
                            <td>
                                <?php $files = json_decode($lesson->files) ?>
                                @if(!empty($files))
                                    <hr>
                                    @foreach($files as $file)
                                        <ul>
                                            <li>
                                                <a width='100' href='{{asset("storage/".$file)}}' target="_blank">Download File {{substr($lesson->title,0,30)}} </a>
                                            </li>
                                        </ul>
                                    @endforeach
                                @endif
                            </td>
                        </tr>


</table>
                </div>

            </div>
        </div>
    </div>



<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#tests" aria-controls="tests" role="tab" data-toggle="tab">Tests</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="tests">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>@lang('global.tests.fields.course')</th>
                        <th>@lang('global.tests.fields.lesson')</th>
                        <th>@lang('global.tests.fields.title')</th>
                        <th>@lang('global.tests.fields.description')</th>
                        <th>@lang('global.tests.fields.questions')</th>
                        <th>Actions</th>
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
                    <td>{{ $test->course->title }}</td>
                                <td>{{ $test->lesson->title }}</td>
                                <td>{{ $test->title }}</td>
                                <td>{{$test->description}} </td>
                                <td>
                                    @foreach ($test->questions as $singleQuestions)
                                        <span class="label label-info label-many">{{ substr($singleQuestions->question,0,50)  }}</span>
                                    @endforeach
                                </td>


                    @if( request('show_deleted') == 1 )
                          <form method="post" action="{{ route('tests.restore', $test->id)}}">
                             @csrf

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

            <a href="{{ route('lessons.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
