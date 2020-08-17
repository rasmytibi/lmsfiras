@extends('layouts.admin')
@section('title' , 'change password')

@section('content')

    @if(session('success'))
        <!-- If password successfully show message -->
        <div class="row">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @else
        <form method="post" action="{{route('auth.change_password_')}}">
        @csrf
        @method("PATCH")
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('global.app_edit')
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label class="control-label">Current Password</label>
                        <input type="password" class="form-control" id="form_control_1" name="current_password" value="">

                        <p class="help-block"></p>
                        @if($errors->has('current_password'))
                            <p class="help-block">
                                {{ $errors->first('current_password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label class="control-label">New Password</label>

                        <input type="password" class="form-control" id="form_control_1" name="new_password" value="">

                        <p class="help-block"></p>
                        @if($errors->has('new_password'))
                            <p class="help-block">
                                {{ $errors->first('new_password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label class="control-label">New password confirmation</label>
                        <input type="password" class="form-control" id="form_control_1" name="new_password_confirmation" value="">

                        <p class="help-block"></p>
                        @if($errors->has('new_password_confirmation'))
                            <p class="help-block">
                                {{ $errors->first('new_password_confirmation') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-success">Change Password</button>
            <a type="reset" href="" class="btn default">Cancel</a>
        </form>
    @endif
@endsection

