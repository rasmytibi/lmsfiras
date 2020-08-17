@extends('layouts.admin')
@section("title", "Show Permissions")

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.permissions.fields.title')</th>
                            <td>{{ $permission->title }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#roles" aria-controls="roles" role="tab" data-toggle="tab">Roles</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="roles">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>@lang('global.roles.fields.title')</th>
                        <th>@lang('global.roles.fields.permission')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($roles) > 0)
            @foreach ($roles as $role)
                <tr data-entry-id="{{ $role->id }}">
                    <td>{{ $role->title }}</td>
                                <td>
                                    @foreach ($role->permission as $singlePermission)
                                        <span class="label label-info label-many">{{ $singlePermission->title }}</span>
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
                                            <form method="post" action="{{ route('roles.destroy',$role->id)}}">
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
                <td colspan="6">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('permissions.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@endsection
