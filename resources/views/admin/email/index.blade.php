@extends('layouts.admin')
@section("title", "Manage Emails")

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
                        <th>Email</th>

                        <th width="5%">Actions</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($email) > 0)
                        @foreach ($email as $email)


                                <td>{{ $email->id }}</td>
                                <td>{{ $email->email }}</td>


                                <td>


                                    <a href="{{ route("delete-email", $email->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


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

