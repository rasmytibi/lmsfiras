@extends('layouts.admin')
@section('title','Edit Teachers')
@section('content')
    <form method="post" action="{{ route('teachers.update',$teacher->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="panel panel-default">
            <div class="panel-heading">
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">UserName</label>
                        <input type="text" class="form-control" id="form_control_1" name="name"
                               value="{{old('name')??$teacher->name}}" placeholder="Enter Teachers Name ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="form_control_1" name="password"
                               value="{{old('password')}}" placeholder="Enter Password ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="email">Email</label>
                        <input type="email" disabled class="form-control" id="form_control_1" name="email"
                               value="{{old('email')??$teacher->email}}" placeholder="Enter Teachers Email ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="facebook">FaceBook URL</label>
                        <input type="url" class="form-control" id="form_control_1" name="facebook"
                               value="{{old('facebook')??$teacher->facebook}}" placeholder="Enter Teachers FaceBook Account ">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="mobile">Mobile NO.</label>
                        <input type="number" class="form-control" id="form_control_1" name="mobile"
                               value="{{old('mobile')??$teacher->mobile}}" placeholder="Enter Teachers Mobile Number ">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        @if ($teacher->image)
                            <a href="{{ asset('storage/'.$teacher->image) }}" target="_blank"><img src="{{ asset('storage/'.$teacher->image) }}"style="width:300px;height: 200px"></a>
                        @endif
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
                    <div class="col-xs-12 form-group ">
                        <label for="description">Details</label>

                        <textarea type="text" class="form-control   "  id="description" name="description">{{old('description')??$teacher->description}}</textarea>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">

                        <input type="checkbox" name='active' value="0" {{(old('active')??$teacher->active)?"checked":""}}" class="form-check-input" id="active">
                        <label class="form-check-label" for='active'>Active</label>

                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-danger">@lang('global.app_save')</button>

@endsection

