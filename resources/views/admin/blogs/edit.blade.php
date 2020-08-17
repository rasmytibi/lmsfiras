@extends("layouts.admin")

@section("title", "Update Blog")

@section("css")
    <link href="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section("content")
    <div class="portlet light ">
        <div class="portlet-body form">
            <form method="post" enctype="multipart/form-data" action="{{ route('blogs.update' , $blogs->id) }}" role="form">

                @csrf
                @method('PUT')

                <div class="form-body">

                    <div class="form-group has-success"><label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title' , $blogs->title)}}" placeholder="Enter your Title">

                    </div>
                </div>

                <div class="form-group row">
                    <div class='col-sm-6'>
                        <label for="imageFile">Image</label>
                        <div class="custom-file">
                            <input type="file" name="imageFile" class="custom-file-input" id="imageFile">
                            <img src='{{ asset("storage/".$blogs->blog_image) }}' width='280' class='img-thumbnail' />

                        </div>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group has-success">
                        <label for="description">description</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description', $blogs->description )}}</textarea>
                    </div>

                </div>
                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea class="form-control" id="details" name="details">{{ old('details' , $blogs->details)}}</textarea>
                </div>

                <div class="form-check">
                    <input {{ old('published')?"checked":"" }} value='1' type="checkbox" name='published' class="form-check-input" id="published">
                    <label class="form-check-label" for='published'>Published</label>
                </div>

                <div class="form-check">
                    <input {{ old('slider_show')?"checked":"" }} value='1' type="checkbox" name='slider_show' class="form-check-input" id="slider_show">
                    <label class="form-check-label" for='slider_show'>slider_show</label>
                </div>


                <div class="card-footer mt-3">
                    <button type="submit" class="btn btn-primary">@lang('global.app_update')</button>
                    <a class='btn btn-default' href='{{ route("blogs.index") }}'>@lang('global.app_cancel')</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section("js")
    <!-- <script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script> -->
    <script type="text/javascript">
        /*$(document).ready(function () {
          bsCustomFileInput.init();
        });*/
    </script>

    <script src="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script>
        $("#details").summernote({height:300});
    </script>
@endsection
