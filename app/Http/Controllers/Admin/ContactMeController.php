<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\CreateRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class ContactMeController extends Controller
{

    public function index(){
        if (! Gate::allows('contactme')) {
            return abort(401);
        }
        $contact=ContactMe::all();
        return view('admin.contactme.index',compact('contact'));
    }
    public function create(){
        if (! Gate::allows('contactme')) {
            return abort(401);
        }
        return view("frontend.home.contact");
    }
    public function destroy($id){
        if (! Gate::allows('contactme')) {
            return abort(401);
        }
        ContactMe::destroy($id);
        session()->flash("msg", "w: Deleted Successfully");
        return redirect(route("contact_me.index"));
    }

}
