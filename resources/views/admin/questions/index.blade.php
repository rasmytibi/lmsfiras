@extends('layouts.admin')
@section('title','Manage Questions')
@section('content')
        <form class='row'>
            <div class='col-sm-5'>
                <input type='text' class="form-control" placeholder="enter your question name" name="q"/></div>
            <div class='col-sm-5'>
                <input type='text' class="form-control" placeholder="enter your score" name="score"/></div>

            <div class='col-sm-2'>
                <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

            </div>
            <div class="col-sm-2">

                @can('question_create')
                    <p>
                        <a href="{{ route('questions.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

                    </p>
                @endcan
            </div>
        </form>

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('questions.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('questions.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th>@lang('global.questions.fields.question')</th>
                        <th>@lang('global.questions.fields.question-image')</th>
                        <th>@lang('global.questions.fields.score')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @if (count($questions) > 0)
                        @foreach ($questions as $question)


                                <td>{{ substr($question->question,0,50) }}</td>
                                <td>@if($question->question_image)<a href="{{ asset('storage/' . $question->question_image) }}" target="_blank"><img  width="100" style="align-items: center" src="{{ asset('storage/' . $question->question_image) }}"/></a>@endif</td>
                                <td>{{ $question->score }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    <form method="post" action="{{ route('questions.restore', $question->id) }}">
                                        @csrf


                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>

                                    <form method="post" action="{{ route('questions.perma_del', $question->id) }}">
                                        @csrf
                                        @method('Delete')

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>

                                @else
                                <td>
                                    @can('question_view')
                                    <a href="{{ route('questions.show',[$question->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('question_edit')
                                    <a href="{{ route('questions.edit',[$question->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('question_delete')
                                            <form method="post" action="{{ route('questions.destroy', $question->id) }}">
                                                @csrf
                                                @method("DELETE")

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>
                                                </button>

                                            </form>

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
    </div>
        {{ $questions->links() }}




@endsection
