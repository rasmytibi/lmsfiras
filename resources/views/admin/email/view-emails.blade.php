@extends('layouts.admin')
@section("title", "Send Emails")

@section('content')
    <form method="post" action="{{ route('email.send') }}" role="form" >
        @csrf

    <div class="panel panel-default">
        <div class="panel-heading">
        </div>

        <div class="panel-body">


            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="title"> Title</label>
                    <input type="text" class="form-control" id="form_control_1" name="title"
                           value="{{old('title')}}" placeholder="Enter Message Title">

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="subject">Subject</label>
                    <textarea  class="form-control"  id="subject" value="{{old('subject')}}" name="subject" rows="10" ></textarea>

                  </div>
            </div>
        </div>
    </div>

        <button type="submit" class="btn btn-danger">Send Emails</button>
    </form>
@endsection

