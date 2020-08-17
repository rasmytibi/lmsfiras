@extends('layouts.admin')
@section("title", "Manege Users")
@section('content')

    <form class='row'>
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your name" name="q"/></div>
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your mobile" name="mobile"/></div>

        <div class='col-sm-2'>
                <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

            </div>
            <div class="col-sm-2">

                @can('user_create')
                    <p>
                        <a href="{{ route('users.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

                    </p>
                @endcan
            </div>
    </form>




    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ">
                <thead>
                <tr>


                    <th>@lang('global.users.fields.name')</th>
                    <th>@lang('global.users.fields.email')</th>
                    <th>@lang('global.users.fields.image')</th>
                    <th>@lang('global.users.fields.role')</th>
                    <th>&nbsp;</th>

                </tr>
                </thead>

                <tbody>
                @if (count($users) > 0)
                    @foreach ($users as $user)
                        <tr data-entry-id="{{ $user->id }}">


                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ asset('storage/' . $user->image) }}" target="_blank"><img src="{{ asset('storage/' .$user->image) }} " style="width:100px;height: 90px"/></a></td>

                            <td>
                                @foreach ($user->role as $singleRole)
                                    <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('user_view')
                                    <a href="{{ route('user_profile',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                @endcan
                                @can('user_edit')
                                    <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                @endcan
                                @can('user_delete')
                                        <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                            @csrf
                                            @method("DELETE")

                                            <button onclick='return confirm("Are you sure??")' type="submit"
                                                    class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                        </form>


                                @endcan
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('users.mass_destroy') }}';
        @endcan

    </script>
    {{ $users->links() }}

@endsection
