@extends('layouts.admin')
@section('title','Manage Questions Option')
@section('content')
    @can('questions_option_create')
    <p>
        <a href="{{ route('questions_options.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('questions_options.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('questions_options.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
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
                            <tr >


                                <td>{{ $questions_option->question->question or '' }}</td>
                                <td>{{ $questions_option->option_text }}</td>
                             <td>

                              <input type="checkbox" name='correct' value="" {{$questions_option->correct ?"checked":""}}  disabled class="form-check-input" id="correct">

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
                                            <form method="post" action="{{ route('questions_options.destroy', $questions_option->id) }}">
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
@endsection

@section('javascript')
    <script>
        @can('questions_option_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('questions_options.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection
