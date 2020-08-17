<?php

namespace App\Http\Controllers\frontEnd;
use App\Http\Controllers\Controller;
use App\Http\Requests\subscribe\EmailRequest;
use App\Models\About;
use App\Models\Email;
use App\Models\Lesson;
use App\Models\Setting;
use App\Models\blogs;
use App\User;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\ContactMe;
use App\Models\Course;
use App\Models\CourseStudent;
use Illuminate\Support\Facades\Gate;



class HomeController extends Controller
{

    public function index()
    {

        $category = Category::take(8)->get();

        $courses = Course::where('published', 1)->orderBy('id', 'desc')->take(5)->get();
        $setting=Setting::get()->first();


        return view('frontEnd.index',compact('category','courses','setting'));
    }

    public function about(){
        $about=About::all();
        return view('frontEnd/about',compact('about'));
    }



    public function contactme(){
        $contactme=ContactMe::all();
        $setting=Setting::get()->first();
        return view('frontEnd/contact-me',compact('contactme','setting'));
    }
    public function postcontactme(Request $request){
        ContactMe::create($request->all());
        \Session::flash("msg","Succesfully Sent Your Message");
        return redirect()->back();

    }
    public function blogs(Request $request)
    {
        $blogs = blogs::all();
        $categories = Category::all();
        //$blogs=$blogs->paginate(3);
        $setting = Setting::get()->first();
        $q = request()->get("q");
        if ($q) {
            $blogs->where('name','q');
        }
        $blogs= blogs::get();
        return view('frontEnd/blog', compact('blogs', 'setting', 'categories'));

    }

    public function course_search(Request $request){
//dd($request->all());
        $categories = Category::all();
        //$blogs=$blogs->paginate(3);
        $setting = Setting::get()->first();
        $course =Course::whereRaw('true');
        $q = request()->get("q");
        $cati = request()->get("cat");

        if ($q) {
            $course->where('title',"like","%$q%");
        }
        if ($cati) {
            $course->where('category_id',$cati);
        }
        $course=$course->paginate(10)->appends(["q"=>$q,"cat"=>$cati]);
        return view('frontEnd/course-search', compact('course', 'setting', 'categories'));

    }

    public function StoreEmail(EmailRequest $request){
        Email::create($request->all());
        session()->flash("msg", "s: Subscribe Successfully");
        return redirect(route('front'));
    }

    public function coursess(){
        $category = Category::all();
        $course = Course::get();
        $setting = Setting::get()->first();
        return view('frontEnd.coursess',compact('category','course','setting'));

    }

    public function single_course($id){

        $setting = Setting::get()->first();
        $last = Course::where('published', 1)->orderBy('id', 'asc')->get();

        $category = Category::all();
        $course = Course::find($id);
        $is_joined = 0;
        if(auth()->check()){
            $user_id = auth()->user()->id;
            $check_if_joined = CourseStudent::where('course_id', $id)
                ->where('user_id', $user_id)->count();
            if($check_if_joined > 0)
                $is_joined = 1;
            session()->flash('msg','w: Course status updated');

        }



        return view('frontEnd/single-course', compact('setting' ,'last', 'course' , 'category', 'is_joined'));

    }


    public function single_blog($id){

        $setting = Setting::get()->first();
        $categories = Category::all();
        $blog = blogs::find($id);
        return view('frontEnd/single-blog', compact('setting' , 'blog' , 'categories'));

    }

    public function lesson($id){

        $setting = Setting::get()->first();
        $category = Category::all();
        $course = Course::all();
        $lesson = Lesson::find($id);
        $last = Course::where('published', 1)->orderBy('id', 'desc')->get();

        return view('frontEnd/lesson', compact('setting' ,'last', 'course' , 'category','lesson'));

    }


    public function join(Request $request){
        $check_if_joined = CourseStudent::where('course_id', $request->course_id)
            ->where('user_id', $request->user_id)->count();
        if($check_if_joined <= 0) {
            CourseStudent::create([
                'course_id' => $request->course_id,
                'user_id' => $request->user_id,
            ]);
        }
        return redirect()->back();
    }




}
