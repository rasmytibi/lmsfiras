@extends('layouts.admin')
@section("title","Show User Profile")

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.users.fields.name')</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.email')</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.role')</th>
                            <td>
                                @foreach ($user->role as $singleRole)
                                    <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><a href="{{ asset('storage/' . $user->image) }}" target="_blank"><img src="{{ asset('storage/' .$user->image) }} " style="width:100px;height: 90px"/></a></td>

                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                    <tr>
                            <th>FaceBook Account</th>
                            <td>
                                {{ $user->facebook }}
                            </td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>
                                {{ $user->mobile }}
                            </td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>
                                {{ substr( $user->description,0,320)  }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->


            <!-- Tab panes -->


            <p>&nbsp;</p>

            <a href="{{ url('admin/users') }}" class="btn btn-default">Back Home</a>

            <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-primary">Update Profile</a>
        </div>
    </div>
@endsection
