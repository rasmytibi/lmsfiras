@extends("layouts.admin")

@section("title","Edit Category")


@section("content")

    <div class="portlet light ">
        <div class="portlet-body form">
<form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data" role="form">
@csrf
@method("PATCH")
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input value='{{old('name')??$category->name}}' type="text" autofocus class="{{ $errors->has('name')?"is-invalid":""}} form-control" id="title" name="name" placeholder="Enter Category Name">
                  </div>
                    <div class="form-group row">
                        <div class='col-sm-6'>
                            <label for="imageFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                            </div>
                            <div>
{{--                                @if($category->image)--}}
                                    <img src="{{asset("storage/".$category->image)}}" width='240' class='img-thumbnail'>
{{--                                @endif--}}
                            </div>
                        </div>
                    </div>


                  <div class="form-check">
                    <input {{ (old('status')??$category->status)?"checked":"" }} value='1' type="checkbox" name='status' class="form-check-input" id="status">
                    <label class="form-check-label" for='published'>Published</label>
                  </div>



                <!-- /.card-body -->

                <div >
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class='btn btn-danger' href='{{ asset("admin/categories") }}'>Cancel</a>
                </div>
                </div>
              </form>
        </div>
    </div>
@endsection
