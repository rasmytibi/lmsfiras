@extends("layouts.admin")

@section("title","Create New Category")


@section("content")

    <div class="portlet light ">
        <div class="portlet-body form">
            @can('category_create')
<form method="post" action="{{ route('categories.store') }}" role="form" enctype="multipart/form-data">
@csrf
                <div class="form-body">
                  <div class="form-group has-success">
                    <label for="name">Title</label>
                    <input value='{{old("name")}}' type="text" autofocus class="{{ $errors->has('name')?"is-invalid":""}} form-control" id="name" name="name" placeholder="Enter Category Name">
                  </div>
                    <div class="form-group row">
                        <div class='col-sm-6'>
                            <label for="imageFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                    <input {{ old('status')?"status":"" }} value='1' type="checkbox" name='status' class="form-check-input" id="show">
                    <label class="form-check-label" for='active'>Active</label>
                  </div>


<br>
                <!-- /.card-body -->

                <div class="card-footer mt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class='btn btn-danger' href='{{asset("admin/categories")}}'>Cancel</a>
                </div>
                </div>
              </form>
       @endcan
        </div>
    </div>
@endsection
