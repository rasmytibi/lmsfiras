@extends('layouts.admin')
@section('title','Tests Manage')
@section('content')
    @can('test_create')
    <p>
        <a href="{{ route('tests.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('tests.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('tests.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
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


                                <td>{{ $test->course->title  }}</td>
                                <td>{{ $test->lesson->title  }}</td>
                                <td>{{ $test->title }}</td>
                                <td>{!! $test->description !!}</td>
                                <td>{{ $test->questions->count() }}</td>
                                    <td>
                                        @if($test->published)
                                            <a href="{{route('test.status',$test->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                        @else
                                            <a href="{{route('test.status',$test->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                        @endif
                                    </td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    <form method="post" action="{{ route('tests.restore', $test->id) }}">
                                        @csrf


                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                    </form>

                                    <form method="post" action="{{ route('tests.perma_del', $test->id) }}">
                                        @csrf
                                        @method('Delete')

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>

                                </td>
                                @else
                                <td>
                                    @can('test_view')
                                    <a href="{{ route('tests.show',[$test->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('test_edit')
                                    <a href="{{ route('tests.edit',[$test->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('test_delete')
                                            <form method="post" action="{{ route('tests.destroy', $test->id) }}">
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
                            <td colspan="10">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

