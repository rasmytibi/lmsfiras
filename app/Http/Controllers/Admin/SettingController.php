<?php

namespace App\Http\Controllers\Admin;
use App\Mail\ELearningMail;
use Illuminate\Mail\Mailable;

use App\Http\Requests\SettingsRequest;
use App\Models\Email;
use App\Models\EmailCreate;
use App\Mail\LearningMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use function GuzzleHttp\Promise\all;


class SettingController extends Controller
{

    public function setting()
    {
        $settings = Setting::first();
        return view('admin.settings.settings')->with('settings', $settings);
    }

    public function postsetting(SettingsRequest $request)
    {
        if (! Gate::allows('setting')) {
            return abort(401);
        }
        if($request->logoFile){
            $imageName = basename($request->logoFile->store("public"));
            $request['logo'] = $imageName;
        }
        $settings = Setting::first();
        if ($settings) {
            $settings->update($request->all());
            session()->flash('msg' , 's: settings updated succesfully');
            return redirect(route('settings'));
        } else {
            Setting::create($request->all());
            session()->flash('msg' , 's: settings created succesfully');
            return redirect(route('settings'));
        }
    }
    public function viewEmail(Request $request){
//        dd($request->all());
        $email= Email::all();

        return view('admin/email/index',compact('email'));
    }
    public function sendEmailcreate(Request $request){


        return view('admin/email/view-emails');
    }
    public function sendEmail(Request $request){
        EmailCreate::create($request->all());
        $emails=Email::all();

        foreach ($emails as $email){
//            dd($request->all());
//            dd($emails->all());
            \Mail::to($email->email)->send(new ELearningMail($request->all()));

        }


        \Session::flash("msg","Send Emails Sucssefully");
//        dd("Email is Sent.");
        return redirect()->back();
    }

    public function subscribeShow (Request $request){

        $subscribe=EmailCreate::all();
        return view('admin/email/newsletter',compact('subscribe'));
    }

    public function destroyEmail($id)
    {
        if (! Gate::allows('emails')) {
            return abort(401);
        }
        $email = Email::find($id);
        $email->forceDelete();

        return redirect()->back();
    }

}
