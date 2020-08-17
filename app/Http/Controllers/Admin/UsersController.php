<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;

class UsersController extends Controller
{

    public function profile($id){
        $profile=User::find($id);
        $roles = Role::get();$courses = \App\Models\Course::whereHas('teachers',
            function ($query) use ($id) {
                $query->where('id', $id);
            })->get();

        $user = User::find($id);
        return view('admin.users.profile')->with('profile',$profile)->with('user',$user);
    }
    public function index()
    {
        if (! Gate::allows('user_access')) {
            return abort(401);
        }
        $users = User::whereRaw('true')->orderBy('id','desc');
        $q=request()->get("q");
        $mobile=request()->get("mobile");
        if($q){
            $users->where('name','like',"%{$q}%");
        }
        if($mobile){
            $users->where('mobile','like',"%{$mobile}%");
        }

        $users = $users->paginate(10)->appends(["q"=>$q,"mobile"=>$mobile]);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        if (! Gate::allows('user_create')) {
            return abort(401);
        }
        $roles =Role::get();

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUsersRequest $request)
    {
        if (! Gate::allows('user_create')) {
            return abort(401);
        }
        $image = basename($request->imageFile->store("public"));
        $request['image'] = $image;
        $user = User::create($request->all());
        $user->role()->sync(array_filter((array)$request->input('role')));

        \Session::flash("msg","User created succesfully");


        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('user_edit')) {
            return abort(401);
        }
        $roles =Role::get();

        $user = User::find($id);

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUsersRequest $request, $id)
    {
        if (! Gate::allows('user_edit')) {
            return abort(401);
        }
        if (!$request->active) {
            $request['active'] = 0;
        }

        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['image'] = $imageName;
        }
        $user = User::find($id);
        $user->update($request->all());
        $user->role()->sync(array_filter((array)$request->input('role')));



        return redirect()->route('users.index');
    }

    public function show($id)
    {
        if (! Gate::allows('user_view')) {
            return abort(401);
        }
        $roles = Role::get();$courses = \App\Models\Course::whereHas('teachers',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $user = User::find($id);

        return view('admin.users.show', compact('user', 'courses'));
    }

    public function destroy($id)
    {
        if (! Gate::allows('user_delete')) {
            return abort(401);
        }
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('user_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
    public function notifications()
    {
        $notifications = auth()->user()->unreadNotifications;

        return response()->json(compact('notifications'));
    }


}
