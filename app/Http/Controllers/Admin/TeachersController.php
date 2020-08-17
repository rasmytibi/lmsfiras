<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\GeneralException;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\StoreTeachersRequest;
use App\Http\Requests\Admin\UpdateTeachersRequest;
use App\Models\Course;
use App\Notifications\NewTeacherAdd;
use App\User;
use App\Models\TeacherProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\DataTables;

class TeachersController extends Controller
{

    public function index(Request  $request)
    {
        if (! Gate::allows('lesson_access')) {
            return abort(401);
        }
        if (request('show_deleted') == 1) {
            $users = User::whereHas('role', function ($teacher) { $teacher->where('role_id',2); } )->onlyTrashed()->get();

        } else {
            $users = User::whereHas('role', function ($teacher) { $teacher->where('role_id',2); } )->get();
        }

        $course=Course::first();
//        dd($request->all());

        return view('admin.teachers.index', compact('users','course'));
    }

    public function getData(Request $request)
    {
        if (! Gate::allows('lesson_access')) {
            return abort(401);
        }

        if (request('show_deleted') == 1) {
            if (! Gate::allows('lesson_delete')) {
                return abort(401);
            }
            $teachers = User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->onlyTrashed()->orderBy('created_at', 'desc')->get();
        } else {
            $teachers = User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->orderBy('created_at', 'desc')->get();

        }
        if (request('show_deleted') == 1) {
            if (! Gate::allows('lesson_delete')) {
                return abort(401);
            }
        $teachers = $teachers->onlyTrashed()->get();
            } else {
        $teachers = $teachers->get();
        }

        $course = Course::all();
        return view('admin.teachers.index', compact('teachers','course'));

    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(StoreUsersRequest $request)
    {

        if (! Gate::allows('teacher_create')) {
            return abort(401);
        }
        if(!$request->active){
            $request['active']=0;
        }

            $image = basename($request->imageFile->store("public"));
            $request['image'] = $image;

        $user=  User::create($request->all());
        $user->role()->sync(array_filter((array)$request->input('role',2)));

//        $user->author->notify(new NewTeacherAdd($user));
        \Session::flash("msg","Teacher created succesfully");

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $teacher = User::find($id);
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(UpdateTeachersRequest $request, $id)
    {
        if (! Gate::allows('teacher_edit')) {
            return abort(401);
        }

        if (!$request->active) {
            $request['active'] = 0;
        }

        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['image'] = $imageName;
        }
        $teacher = User::find($id);
        $teacher->update($request->except('email'));
        session()->flash("msg", "The Teacher was updated");
        return redirect()->route('teachers.index');

    }

    public function show($id)
    {
        $teacher = User::find($id);

        return view('admin.teachers.show', compact('teacher'));
    }

    public function destroy($id)
    {

        $teacher = User::find($id);
        $teacher->delete();
        session()->flash("msg", "The Teacher was destroy");
        return redirect()->back();
    }

    public function restore($id)
    {
        $teacher = User::onlyTrashed()->findOrFail($id);
        $teacher->restore();

        return redirect()->route('teachers.index')->withFlashSuccess(trans('alerts.backend.general.restored'));
    }

    public function delete_full_teacher($id)
    {
        if (! Gate::allows('teacher_delete')) {
            return abort(401);
        }
        $teacher = User::onlyTrashed()->findOrFail($id);
        $teacher->forceDelete();

        return redirect()->back();

    }

    public function status($id)
    {
        $teacher=User::find($id);

        $teacher->update(['active'=>!$teacher->active]);

        session()->flash('msg','w: Teacher status updated');
        return redirect()->back();

    }
}
