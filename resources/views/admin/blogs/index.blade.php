@extends('layouts.admin')
@section("title", "Manage Blogs")

@section('content')
    @can('blogs_create')
        <form class='row'>
            <div class='col-sm-2'>
                <input type='text'  name="q" value='{{ request()->get("title") }}' class="form-control" placeholder="enter title to search"/>
            </div>

            <div class="col-sm-3">
                <select name="published" class="form-control">
                    <option value=''>Any Status</option>
                    <option {{ request()->get("published") ?"selected":"" }} value='1'>Active</option>
                    <option {{ request()->get("published")=='0' ?"selected":"" }} value='0'>Inactive</option>
                </select>
            </div>

            <div class='col-sm-2'>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('global.app_search')</button>

            </div>
            <div class='col-sm-2'>
                <a href="{{ route('blogs.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

            </div>

        </form>

    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('blogs.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('blogs.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>


    <div class="panel panel-default">


        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>


                        <th>@lang('global.blogs.fields.title')</th>
                        <th>@lang('global.blogs.fields.blog_image')</th>
                        <th>@lang('global.blogs.fields.description')</th>
                        <th>@lang('global.blogs.fields.slider_show')</th>
                        <th>@lang('global.blogs.fields.published')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @if (count($blogs) > 0)
                        @foreach ($blogs as $blog)


                                <td>{{ substr($blog->title,0,20) }}</td>
                                <td><a href="{{ asset('storage/' . $blog->blog_image) }}" target="_blank"><img src="{{ asset('storage/' . $blog->blog_image) }} " style="width:100px;height: 90px"/></a></td>
{{--                                <td>{{ $blog->blog_image }}</td>--}}

                                <td>{{ substr($blog->description,0,50) }}</td>
                                <td>
                                    @if($blog->slider_show)
                                        <a href="{{route('blogs.statuss',$blog->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                    @else
                                        <a href="{{route('blogs.statuss',$blog->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                    @endif
                                </td>
                                <td>
                                    @if($blog->published)
                                        <a href="{{route('blogs.status',$blog->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                                    @else
                                        <a href="{{route('blogs.status',$blog->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">InActive</a>

                                    @endif
                                </td>

                                @if( request('show_deleted') == 1 )
                                <td>

                                    <form method="post" action="{{ route('delete_full_blogs', $blog->id) }}">
                                        @csrf
                                        @method('Delete')

                                        <button onclick='return confirm("Are you sure??")' type="submit"
                                                class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>

                                    </form>

                                    {{--<a href="{{ route("delete-blog",$blog->id}}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>--}}


                                </td>
                                @else
                                <td>
                                    @can('blogs_view')
                                    <a href="{{ route('blogs.show',[$blog->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('blogs_edit')
                                    <a href="{{ route('blogs.edit',[$blog->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('blogs_delete')
{{--                                            <form method="post" action="{{ route('lessons.destroy', $lesson->id) }}">--}}
{{--                                                @csrf--}}
{{--                                                @method("DELETE")--}}

{{--                                                <button onclick='return confirm("Are you sure??")' type="submit"--}}
{{--                                                        class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>--}}
{{--                                                </button>--}}

{{--                                            </form>--}}
                                           <a href="{{ route("delete-blogs", $blog->id) }}" onclick='return confirm("Are you sure delete?")' class="btn btn-warning btn-xs"><i class='fa fa-trash'></i></a>


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
        {{ $blogs->links() }}

    </div>
@stop

