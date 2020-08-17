<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLessonsRequest;
use App\Http\Requests\Admin\UpdateLessonsRequest;



class LessonsController extends Controller
{

    public function index(Request $request)
    {
        if (! Gate::allows('lesson_access')) {
            return abort(401);
        }
        if(auth()->user()->active==0){
            return abort(401);
        }

        $lessons = Lesson::whereIn('course_id', Course::ofTeacher()->pluck('id'));
        if ($request->input('course_id')) {
            $lessons = $lessons->where('course_id', (int)$request->course_id)->orderBy('created_at', 'desc')->get();
        }
        if (request('show_deleted') == 1) {
            if (! Gate::allows('lesson_delete')) {
                return abort(401);
            }
            $lessons = Lesson::query()->with('course')->orderBy('created_at', 'desc')->onlyTrashed()->get();
        } else {
            $lessons = Lesson::whereRaw('true')->orderBy('id','desc');
        }

        $q=request()->get("q")??"";
        $published=request()->get("published");
        $course = request()->get("course");

        if($q){
            $lessons->where('title','like',"%{$q}%");
        }
        if($published!=null){
            $lessons->where('published',$published);
        }

        if($course){
            $lessons->where('course_id',$course);
        }

        $courses = Course::get();
        $lessons = $lessons->paginate(7)->appends(["q"=>$q,"published"=>$published,"course"=>$course]);

        return view('admin.lessons.index', compact(['courses','lessons']));
    }

    public function status($id){
        $lesson=Lesson::find($id);
        $lesson->update(['published'=>!$lesson->published]);
        session()->flash('msg','w: Course status updated');
        return redirect()->back();
    }

    public function create()
    {
        if (! Gate::allows('lesson_create')) {
            return abort(401);
        }
        $courses = Course::ofTeacher()->get();

        return view('admin.lessons.create', compact('courses'));
    }


    public function store(StoreLessonsRequest $request)
    {
        if (! Gate::allows('lesson_create')) {
            return abort(401);
        }
        $files = [];
        if($request->file){
            foreach($request->file as $file){
                $files[] = basename($file->store("public"));
            }
            $request['files'] = json_encode($files);
        }
//        dd($files);
        if(!$request->published){
            $request['published']=0;
        }


        $image = basename($request->imageFile->store("public"));
        $request['lesson_image'] = $image;


        Lesson::create($request->all());
//        dd($request->all());
        return redirect()->route('lessons.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('lesson_edit')) {
            return abort(401);
        }
        $courses = Course::ofTeacher()->get();

        $lesson = Lesson::find($id);

        return view('admin.lessons.edit', compact('lesson', 'courses'));
    }

    public function update(UpdateLessonsRequest $request, $id)
    {
        if (! Gate::allows('lesson_edit')) {
            return abort(401);
        }
        $files = [];
        if($request->file){
            foreach($request->file as $file){
                $files[] = basename($file->store("public"));
            }
            $request['files'] = json_encode($files);
        }

        if(!$request->published){
            $request['published']=0;
        }
        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['lesson_image'] = $imageName;
        }

        Lesson::find($id)->update($request->all());

        return redirect()->route('lessons.index', ['course_id' => $request->course_id]);
    }



    public function show($id)
    {
        if (! Gate::allows('lesson_view')) {
            return abort(401);
        }
        $courses = Course::get()->pluck('title', 'id')->prepend('Please select', '');$tests =Test::where('lesson_id', $id)->get();

        $lesson = Lesson::findOrFail($id);

        return view('admin.lessons.show', compact('lesson', 'tests'));
    }

    public function destroy($id)
    {
        if (! Gate::allows('lesson_delete')) {
            return abort(401);
        }
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        return redirect()->route('lessons.index');
    }

    public function restore($id)
    {
        if (! Gate::allows('lesson_delete')) {
            return abort(401);
        }
        $lesson = Lesson::onlyTrashed()->findOrFail($id);
        $lesson->restore();

        return redirect()->route('lessons.index');
    }

    public function full_del($id)
    {
        if (! Gate::allows('lesson_delete')) {
            return abort(401);
        }
        $lesson = Lesson::onlyTrashed()->findOrFail($id);
        $lesson->forceDelete();

        return redirect()->back();
    }
}
