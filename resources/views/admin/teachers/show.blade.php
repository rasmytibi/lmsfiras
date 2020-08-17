@extends('layouts.admin')

@section('title', 'Teacher Details')
@push('after-styles')
<style>
    table th {
        width: 20%;
    }
</style>
@endpush
@section('content')

    <div class="card">

        <div class="card-header">
            <div class="float-right">
                <a href="{{ route('teachers.index') }}"
                   class="btn btn-success">Back Teachers List</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Image Teacher</th>
                            <td><img width="200" src="{{asset("storage/".$teacher->image)}}" class="user-profile-image" /></td>
                        </tr>

                        <tr>
                            <th>Teacher Name</th>
                            <td>{{ $teacher->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $teacher->email }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if($teacher->active)
                                    <a href="{{route('teacher.status',$teacher->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                @else
                                    <a href="{{route('teacher.status',$teacher->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th>FaceBook Link</th>
                            <td>{!! $teacher->facebook !!}</td>
                        </tr>
                        <tr>
                            <th>Mobile NO</th>
                            <td>{!! $teacher->mobile !!}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $teacher->created_at->diffForHumans() }}</td>

                        </tr>



                    </table>
                </div>
            </div><!-- Nav tabs -->
        </div>
    </div>
@stop
