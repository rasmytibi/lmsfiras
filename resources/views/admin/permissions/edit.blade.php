
@extends('layouts.admin')
@section("title", "Edit Permissions")

@section('content')
    <form method="post" action="{{ route('permissions.update',$permission->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title">Title</label>
                    <input value='{{old("title")??$permission->title}}' type="text" autofocus class="{{ $errors->has('title')?"is-invalid":""}} form-control" id="title" name="title" placeholder="Enter Permission Title">

                </div>
            </div>

        </div>
    </div>

        <button type="submit" class="btn btn-primary">@lang('global.app_edit')</button>
        <a class='btn btn-danger' href="{{route('permissions.index')}}">@lang('global.app_cancel')</a>
    </form>
@endsection

