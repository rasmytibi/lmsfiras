@extends('layouts.admin')
@section('title','Manage Teachers')

@section('content')
    <form class='row'>
        <div class='col-sm-3'>
            <input type='text' class="form-control" placeholder="Enter Name Teacher" name="q"/></div>
        <div class='col-sm-3'>
            <input type='text' class="form-control" placeholder="Enter Mobile" name="mobile"/></div>

        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

        </div>
        <div class="col-sm-2">

            @can('teacher_create')
                <p>
                    <a href="{{ route('teachers.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

                </p>
            @endcan
        </div>
    </form>


       <p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ route('teachers.index') }}"
                       style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a>
                </li>
                |
                <li class="list-inline-item">
                    <a href="{{ route('teachers.index') }}?show_deleted=1"
                       style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a>
                </li>
            </ul>
       </p>

            <div class="panel panel-default">


                <div class="panel-body table-responsive">
                        <table id="myTable"
                               class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Status</th>
                                @if( request('show_deleted') == 1 )
                                    <th>&nbsp; Actions</th>
                                @else
                                    <th>&nbsp; Actions</th>
                                @endif
                            </tr>
                            </thead>

                            @if (count($users) > 0)
                                @foreach ($users as $teacher)


                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    </td>
                                    <td><a href="{{ asset('storage/' . $teacher->image) }}" target="_blank"><img src="{{ asset('storage/' .$teacher->image) }} " style="width:100px;height: 90px"/></a></td>

                                    <td>
                                        @if($teacher->active)
                                            <a href="{{route('teacher.status',$teacher->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                        @else
                                            <a href="{{route('teacher.status',$teacher->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">Pending</a>

                                        @endif


                                    </td>

                                    @if( request('show_deleted') == 1 )
                                        <td>
                                            <form method="post" action="{{ route('teachers.restore', $teacher->id) }}">
                                                @csrf


                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-primary btn-sm"><i class='fa fa-backward'></i></button>

                                            </form>

                                            <form method="post" action="{{ route('delete_full_teacher', $teacher->id) }}">
                                                @csrf
                                                @method('Delete')

                                                <button onclick='return confirm("Are you sure??")' type="submit"
                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                            </form>

                                        </td>
                                    @else
                                        <td>
                                            @can('teacher_view')
                                                <a href="{{ route('teachers.show',[$teacher->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                            @endcan
                                            @can('teacher_edit')
                                                <a href="{{ route('teachers.edit',[$teacher->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                            @endcan


                                            @can('teacher_delete')
                                                <form method="post" action="{{ route('teachers.destroy', $teacher->id) }}">
                                                    @csrf
                                                    @method("DELETE")

                                                    <button onclick='return confirm("Are you sure??")' type="submit"
                                                            class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>
                                                    </button>

                                                </form>

                                            @endcan
                                        </td>
                                        @endif
                                        </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="14">@lang('global.app_no_entries_in_table')</td>
                                            </tr>
                                            @endif
                                            </tbody>
                        </table>
                    </div>
             {{-- {{ $users->links() }}--}}

            </div>

@endsection

