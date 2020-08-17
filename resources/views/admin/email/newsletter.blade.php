@extends('layouts.admin')
@section("title", "Manage Subscribe")

@section('content')
    <div class='col-sm-2'>
        <a href="{{ route('email.send.create') }}" class="btn btn-success">Send New Email</a>

    </div>
    <p>
        <ul class="list-inline">
<br>
    </ul>
    </p>


    <div class="panel panel-default">


        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th>#</th>
                        <th>Title Message</th>
                        <th>Subject Message</th>

                        <th>Actions</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($subscribe) > 0)
                        @foreach ($subscribe as $subscribe )


                                <td>{{ $subscribe->id }}</td>
                                <td>{{ $subscribe->title }}</td>
                                <td>{{ $subscribe->subject }}</td>


                                <td>


                                    <a href="{{ route("delete-email", $subscribe->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


                                </td>


                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="14">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
{{--        {{ $lessons->links() }}--}}

    </div>
@endsection

