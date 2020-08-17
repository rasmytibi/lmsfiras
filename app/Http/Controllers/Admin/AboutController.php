<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingsRequest;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class AboutController extends Controller
{

    public function about()
    {
        $about = About::first();
        return view('admin.about.about')->with('about', $about);
    }

    public function postabout(Request $request)
    {
        if (! Gate::allows('about')) {
            return abort(401);
        }

        $about = About::first();
        if ($about) {
            $about->update($request->all());
            session()->flash('msg' , 's: About updated succesfully');
            return redirect(route('about'));
        } else {
            About::create($request->all());
            session()->flash('msg' , 's: About created succesfully');
            return redirect(route('about'));
        }
    }

}
