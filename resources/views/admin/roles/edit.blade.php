@extends('layouts.admin')
@section("title", "Edit Role")
@section('content')
    <form method="post" action="{{ route('roles.update',$role->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="panel panel-default">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="title">Title</label>
                        <input value='{{old("title")??$role->title}}' type="text" autofocus class="{{ $errors->has('title')?"is-invalid":""}} form-control" id="title" name="title" placeholder="Enter Role Title">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="permission">Permission</label>
                        <select name="permissions[]" id="permissions" class="form-control " multiple>

                            @foreach($permissions as  $id=>$permissions)
                                <option value="{{ $id }}" {{ (in_array($id, old('permissions', [])) || isset($role) && $role->permission->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>

{{--                                <option value="{{ $permissions->id }}" {{ (old('permission', [])) ==  $role->permission->contains($role->id) ? 'selected' : '' }}>{{ $permissions->title }}</option>--}}
                            @endforeach

                        </select>


                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary">@lang('global.app_save')</button>


        @endsection





