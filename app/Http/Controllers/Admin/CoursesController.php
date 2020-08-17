<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Course;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCoursesRequest;
use App\Http\Requests\Admin\UpdateCoursesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class CoursesController extends Controller
{


    public function index()
    {

        if (! Gate::allows('course_access')) {
            return abort(401);
        }
        if(auth()->user()->active==0){
            return abort(401);
        }
        $courses = Course::query()->with('teachers');
        if (request('show_deleted') == 1) {
            if (! Gate::allows('course_delete')) {
                return abort(401);
            }
            $courses = $courses->onlyTrashed();
        }

        if (auth()->user()->isTeacher())
            $courses->where('teacher_id', auth()->user()->id);

        if (auth()->user()->isStudent()) {
            $courses->whereHas('students', function ($query) {
                $query->where('user_id', auth()->user()->id);
            });
        }

        $courses = $courses->whereRaw('true')->orderBy('id','desc');

        $q=request()->get("q")??"";
        $published=request()->get("published");
        $category = request()->get("category");

        if($q){
            $courses->where('title','like',"%{$q}%");
        }
        if($published!=null){
            $courses->where('published',$published);
       }

        if($category){
           $courses->where('category_id',$category);
        }

      //  $courses = $courses->get();
        $categories = Category::all();
//        dd($courses->get()[2]->teachers->name);
        $courses = $courses->paginate(7)->appends(["q"=>$q,"published"=>$published,"category"=>$category]);


        return view('admin.courses.index', compact(['courses','categories']));
    }

    public function create()
    {

        $teachers = User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->get();
        $categories = Category::all();
        return view('admin.courses.create')->with('teachers',$teachers)->with('categories',$categories);
    }


    public function store(StoreCoursesRequest $request)
    {
        if (! Gate::allows('course_create')) {
            return abort(401);
        }
        if (!$request->published) {
            $request['published'] = 0;
        }
        $image = basename($request->imageFile->store("public"));
        $request['course_image'] = $image;
        $data = $request->all();
        $data['teacher_id'] = $data['teachers'];

        if (!Auth::user()->isAdmin())
            $data['teacher_id'] = Auth::user()->id;

        $course = Course::create($request->all());

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('course_edit')) {
            return abort(401);
        }


        $teachers = \App\User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->get()->pluck('name', 'id');
        $categories =Category::all();
        $course = Course::find($id);

        return view('admin.courses.edit', compact('course', 'teachers','categories'));
    }

    public function update(UpdateCoursesRequest $request, $id)
    {
        if (! Gate::allows('course_edit')) {
            return abort(401);
        }
        if (!$request->published) {
            $request['published'] = 0;
        }

        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['course_image'] = $imageName;
        }
        $course = Course::find($id);
        $course->update($request->all());

        $teachers = \Auth::user()->isAdmin() ? array_filter((array)$request->input('teachers')) : [\Auth::user()->id];
        $course->teachers()->sync($teachers);

        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        if (! Gate::allows('course_view')) {
            return abort(401);
        }
        $teachers = \App\User::get()->pluck('name', 'id');$lessons = \App\Models\Lesson::where('course_id', $id)->get();$tests = \App\Models\Test::where('course_id', $id)->get();

        $course = Course::find($id);

        return view('admin.courses.show', compact('course', 'lessons', 'tests'));
    }

    public function destroy($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::find($id);
        $course->delete();
        \Session::flash("msg","Courses Destroy succesfully");

        return redirect()->route('courses.index');
    }

    public function restore($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->restore();

        return redirect()->route('courses.index');
    }

    public function full_del($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->forceDelete();

        return redirect()->back();
    }
    public function status($id){
        $course=Course::find($id);
        $course->update(['published'=>!$course->published]);
        session()->flash('msg','w: Course status updated');
        return redirect()->back();
    }

    public function auther()
    {

        if (! Gate::allows('course_access')) {
            return abort(401);
        }
        if(auth()->user()->active==0){
            return abort(401);
        }
        $courses = Course::query()->with('teachers');
        if (request('show_deleted') == 1) {
            if (! Gate::allows('course_delete')) {
                return abort(401);
            }
            $courses = $courses->onlyTrashed();
        }

        if (auth()->user()->isTeacher())
            $courses->where('teacher_id', auth()->user()->id);

        if (auth()->user()->isStudent()) {
            $courses->whereHas('students', function ($query) {
                $query->where('user_id', auth()->user()->id);
            });
        }

        $courses = $courses->whereRaw('true')->orderBy('id','desc');

        $q=request()->get("q")??"";
        $published=request()->get("published");
        $category = request()->get("category");

        if($q){
            $courses->where('title','like',"%{$q}%");
        }
        if($published!=null){
            $courses->where('published',$published);
        }

        if($category){
            $courses->where('category_id',$category);
        }

        $categories = Category::all();
        $courses = $courses->paginate(7)->appends(["q"=>$q,"published"=>$published,"category"=>$category]);


        return view('frontEnd.index', compact(['courses','categories']));
    }
}
