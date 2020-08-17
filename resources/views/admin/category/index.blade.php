@extends("layouts.admin")
@section("title", "Manage Category")
@section("content")

    <div class="portlet light ">

    <form class='row'>
        <div class='col-sm-5'>
            <input type='text' class="form-control" placeholder="enter your search" name="q"/></div>
        <div class='col-sm-2'>
            <select name='published' class='form-control'>
                <option value=''>Any status</option>
                <option {{request()->get("published")?"selected":""}} value='1'>Active</option>
                <option {{request()->get("published")=='0'?"selected":""}} value='0'>InActive</option>
            </select></div>
        <div class='col-sm-2'>
            <button type='submit' class='btn btn-primary'><i class="fa fa-search"></i>search</button>

{{--            <button name="export" value='Export' type='submit' class='btn btn-success'><i class="fa fa-excel"></i>Export</button>--}}

        </div>
        <div class="col-sm-2">

            <a href="{{ route('categories.create') }}" class="btn btn-success">Create New Category</a>
        </div>
    </form>
    <br>
    @if($categories->count()>0)
        <table align="center" class="table mt-3 table-striped table-bordered">
            <thead>
            <tr>
                <th style="width: 400px"> Title</th>
                <th style="width: 200px">Image</th>
                <th>Status</th>
                <th width="20%"></th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td style="width: 200px"><img  src="{{asset("storage/".$category->image)}}" class="img-responsive" alt="No Image Found" style=" width:100px;height: 60px">
                    </td>
                   <td>
                       @if($category->status)
                           <a href="{{route('category.status',$category->id)}}" style="width: 80px" class="btn btn-success btn-sm" >Active</a>
                       @else
                           <a href="{{route('category.status',$category->id)}}" style="width: 80px"  class="btn btn-warning btn-sm">Pending</a>

                       @endif
                   </td>



                    <td width="20%">
                        <form method="post" action="{{ route('categories.destroy', $category->id) }}">

                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i
                                    class='fa fa-edit'></i></a>
                            <button onclick='return confirm("Are you sure??")' type="submit"
                                    class="btn btn-danger btn-sm"><i class='fa fa-trash'></i></button>
                            @csrf
                            @method("DELETE")
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class='alert alert-warning'>Sorry, there is no results to your search</div>

    @endif
    </div>
    {{ $categories->links() }}
@endsection
