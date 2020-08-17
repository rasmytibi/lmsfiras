<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Models\Course;
use App\Models\Lesson;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $course=Course::all();
        $last_teacher= User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->take(6)->get();
        $last_student= User::whereHas('role', function ($q) { $q->where('role_id', 3); } )->take(6)->get();

        $lesson=Lesson::all();
        $teachers = User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->get();
        $student = User::whereHas('role', function ($s) { $s->where('role_id', 3); } )->get();

        return view('admin.home.index')->with('course',$course)
            ->with('lesson',$lesson)->with('teachers',$teachers)
            ->with('student',$student)
            ->with('last_teacher',$last_teacher)
            ->with('last_student',$last_student)
            ;
    }
}
