<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;

class RolesController extends Controller
{

    public function index()
    {
        if (! Gate::allows('role_access')) {
            return abort(401);
        }
        $roles = Role::whereRaw('true');
        $q=request()->get("q")??"";
        if($q){
            $roles->where('title','like',"%{$q}%");
        }



        $roles = $roles->paginate(5)->appends(["q"=>$q]);
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        if (! Gate::allows('role_create')) {
            return abort(401);
        }
        $permissions = Permission::get();

        return view('admin.roles.create', compact('permissions'));
    }

    public function store(StoreRolesRequest $request)
    {
        if (! Gate::allows('role_create')) {
            return abort(401);
        }
        $role = Role::create($request->all());
        $role->permission()->sync(array_filter((array)$request->input('permission')));



        return redirect()->route('roles.index');
    }

    public function edit(Role $role)
    {
        if (! Gate::allows('role_edit')) {
            return abort(401);
        }

        $permissions = Permission::all()->pluck('title', 'id');

        $role->load('permission');

        return view('admin.roles.edit', compact('role', 'permissions'));
    }


    public function update(UpdateRolesRequest $request, Role $role)
    {
        if (! Gate::allows('role_edit')) {
            return abort(401);
        }

        $role->update($request->all());
        $role->permission()->sync($request->input('permissions', []));

        return redirect()->route('roles.index');
    }


    public function show($id)
    {
        if (! Gate::allows('role_view')) {
            return abort(401);
        }
        $permissions = Permission::get()->pluck('title', 'id');$users = \App\User::whereHas('role',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $role = Role::find($id);

        return view('admin.roles.show', compact('role', 'users'));
    }


    public function destroy($id)
    {
        if (! Gate::allows('role_delete')) {
            return abort(401);
        }
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('roles.index');
    }


    public function massDestroy(Request $request)
    {
        if (! Gate::allows('role_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Role::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
