@extends('layouts.admin')
@section("title", "Create User")
@section('content')
    <form method="post" action="{{ route('users.store') }}" role="form" enctype="multipart/form-data">
        @csrf
    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="name">Name</label>
                    <input value='{{old("name")}}' type="text" autofocus class="{{ $errors->has('name')?"is-invalid":""}} form-control" id="title" name="name" placeholder="Enter UserName">

                  </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="email">email</label>
                    <input  type="email" value="{{old('email')}}" class="form-control"  id="email" name="email" placeholder="Enter email">
                </div>

             </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="password">password</label>
                    <input  type="password" value="{{old('password')}}" autofocus class="form-control" id="password" name="password" placeholder="Enter your password">


                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="lesson_image_image">Image</label>
                    <div class="custom-file">
                        <input type="file" name="imageFile" {{old('imageFile')}} class="custom-file-input" id="imageFile">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="facebook">FaceBook URL</label>
                    <input type="url" class="form-control" id="form_control_1" name="facebook"
                           value="{{old('facebook')}}" placeholder="Enter Teachers FaceBook Account ">

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group ">
                    <label for="description">Details</label>

                    <textarea type="text" class="form-control   "  id="description" name="description">{{old('description')}}</textarea>

                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="mobile">Mobile NO.</label>
                    <input type="number" class="form-control" id="form_control_1" name="mobile"
                           value="{{old('mobile')}}" placeholder="Enter Teachers Mobile Number ">

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                <label for="permission">Role</label>
                <select name="role[]" class="form-control " multiple>
                    @foreach($roles as $role)
                        <option class="form-control select2 "
                                {{old('role')== $role->id?"selected":""}} value='{{$role->id}}'>{{$role->title}}</option>
                    @endforeach
                </select>
                </div>

            </div>

        </div>
    </div>
        <button type="submit" class="btn btn-danger">@lang('global.app_save')</button>


@endsection

