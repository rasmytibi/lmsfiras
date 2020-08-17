@extends('layouts.admin')
@section("title", "Manage Role")

@section('content')


    <form >
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your search" name="q"/></div>

        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>
        </div>
    @can('role_create')
    <p>
        <a href="{{ route('roles.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

    </p>
    @endcan



    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th>@lang('global.roles.fields.title')</th>
                        <th>@lang('global.roles.fields.permission')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>

                        @foreach ($roles as $role)
                            <tr data-entry-id="{{ $role->id }}">
                                    <td>{{$role->id}}</td>

                                <td>{{ $role->title }}</td>
                                <td>
                                    @foreach ($role->permission as $singlePermission)
                                        <span class="label label-danger label-many">{{ $singlePermission->title }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('role_view')
                                    <a href="{{ route('roles.show',[$role->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('role_edit')
                                    <a href="{{ route('roles.edit',[$role->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('role_delete')
                                            <form method="post" action="{{ route('roles.destroy', $role->id) }}">
                                                @csrf
                                                @method("DELETE")

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                            </form>

                                    @endcan
                                </td>

                            </tr>
                        @endforeach


                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('role_delete')
            window.route_mass_crud_entries_destroy = '{{ route('roles.mass_destroy') }}';
        @endcan

    </script>
@endsection
