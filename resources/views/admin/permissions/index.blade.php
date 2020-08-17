@extends('layouts.admin')
@section("title", "Manage Permissions")
@section('content')

    <form >
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your search" name="q"/></div>

        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>
        </div>
        @can('permission_create')
        <p>
            <a href="{{ route('permissions.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

        </p>
         @endcan



    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>


                    <th>@lang('global.permissions.fields.id')</th>
                    <th>@lang('global.permissions.fields.title')</th>
                    <th>@lang('global.permissions.fields.action')</th>


                </tr>
                </thead>

                <tbody>
                @if (count($permissions) > 0)
                    @foreach ($permissions as $item)
                        <tr >
                                <td>{{ $item->id }}</td>

                            <td>{{ $item->title }}</td>

                            <td width="300px">
                                @can('permission_view')
                                    <a href="{{ route('permissions.show',[$item->id]) }}" class="btn btn-sm btn-primary">@lang('global.app_view')</a>
                                @endcan
                                @can('permission_edit')
                                    <a href="{{ route('permissions.edit',[$item->id]) }}" class="btn btn-sm btn-info">@lang('global.app_edit')</a>
                                @endcan
                                @can('permission_delete')

                                        <form method="post" action="{{ route('permissions.destroy', $item->id) }}">
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
                        <td colspan="5">@lang('global.app_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        {{ $permissions->links() }}
    </div>
@endsection


