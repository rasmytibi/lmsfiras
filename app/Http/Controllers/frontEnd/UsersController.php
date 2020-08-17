<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\TeacherProfile;
use Pusher\Pusher;

class UsersController extends Controller
{

    public function teacherRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
         if($request->hasFile('image')){
             $image = basename($request->image->store("public"));

         }else{
             $image='';
         }


         $user = User::create(['name'=>$request->name,'email'=>$request->email,'password'=>Hash::make($request->password),'image'=>$image]);
        $user->role()->sync(array_filter((array)$request->input('role',2)));


        session()->flash("msg","Teacher Created Successfully");
        $user11 = User::first();



        $data =  ['message' => 'New Teacher Register', 'link' => asset('admin/teachers')];

        if ($user11) {
            $pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), ['cluster' => env('PUSHER_APP_CLUSTER'),'useTLS' => true]);
            $user11->notify(new \App\Notifications\NewNotification($data));
            $notification = $user11->unreadNotifications()->orderBy('created_at', 'DESC')->first();
            $pusher->trigger('notifications-' . $user11->id, 'NewNotification', $notification);

        }

        return redirect("/");
    }

    public function studentRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['active']=1;
        $request['role']=3;


        $student = User::create($request->all());
        $student->role()->sync(array_filter((array)$request->input('role',3)));
//        $student->role()->sync(array_filter((array)$request->input('active',1)));



        session()->flash("msg","Student Created Successfully");

        return redirect("/");
    }
}
