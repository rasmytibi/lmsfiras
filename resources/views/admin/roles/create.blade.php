@extends('layouts.admin')
@section("title", "Create Role")
@section('content')
    <form method="post" action="{{ route('roles.store') }}" role="form" enctype="multipart/form-data">
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Title</label>
                    <input value='{{old("title")}}' type="text" autofocus class="{{ $errors->has('title')?"is-invalid":""}} form-control" id="title" name="title" placeholder="Enter Role Title">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="permission">Permission</label>
                    <select name="permission[]" class="form-control " multiple>
                        @foreach($permissions as $permission)
                            <option class="form-control select2 "
                                    {{old('permission',[])== $permission->id?"selected":""}} value='{{$permission->id}}'>{{$permission->title}}</option>
                        @endforeach
                    </select>


                </div>
            </div>

        </div>
    </div>
        <button type="submit" class="btn btn-primary">@lang('global.app_save')</button>


@endsection

