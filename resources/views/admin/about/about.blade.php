@extends('layouts.admin')
@section('title','About')
@section("css")
    <link href="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-web font-blue-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">About</span>
                <span class="caption-helper">form to edit about</span>
            </div>

        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="{{ route('post-about') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-8">
                            <textarea type="text" required class="form-control" name="description" id="description"
                                   placeholder="Enter Site Title" value="">
                                @if(old('description')){{old('description')}} @elseif(isset($about->description)){{$about->description}}@else{{''}}@endif
                            </textarea>
                        </div>
                    </div>


                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-4">
                            <input type="submit" class="btn green"></input>
                            <a href="{{route('settings')}}">
                                <button type="button" class="btn default">Cancel</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
@endsection
@section("js")


    <script src="{{ asset('metronic/assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script>
        $("#description").summernote({height:300});
    </script>
@endsection
