@extends('layouts.admin')
@section("title", "Show Role ")

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.roles.fields.title')</th>
                            <td>{{ $role->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.roles.fields.permission')</th>
                            <td>
                                @foreach ($role->permission as $singlePermission)
                                    <span class="label label-info label-many">{{ $singlePermission->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="users">
<table class="table table-bordered table-striped ">
    <thead>
        <tr>
            <th>@lang('global.users.fields.name')</th>
                        <th>@lang('global.users.fields.email')</th>
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
                                <td>
                                    @foreach ($user->role as $singleRole)
                                        <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('user_view')
                                    <a href="{{ route('users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
{{--                                    @can('user_delete')--}}
{{--{!! Form::open(array(--}}
{{--                                        'style' => 'display: inline-block;',--}}
{{--                                        'method' => 'DELETE',--}}
{{--                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",--}}
{{--                                        'route' => ['admin.users.destroy', $user->id])) !!}--}}
{{--                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}--}}
{{--                                    {!! Form::close() !!}--}}
{{--                                    @endcan--}}
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

            <p>&nbsp;</p>

            <a href="{{ route('roles.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
