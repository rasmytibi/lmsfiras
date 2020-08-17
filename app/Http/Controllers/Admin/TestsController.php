<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTestsRequest;
use App\Http\Requests\Admin\UpdateTestsRequest;

class TestsController extends Controller
{

    public function index()
    {
        if (! Gate::allows('test_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('test_delete')) {
                return abort(401);
            }
            $tests = Test::onlyTrashed()->get();
        } else {
            $tests = Test::all();
        }

        return view('admin.tests.index', compact('tests'));
    }

    public function create()
    {
        if (! Gate::allows('test_create')) {
            return abort(401);
        }
        $courses = Course::ofTeacher()->get();
        $courses_ids = $courses->pluck('id');
        $lessons = Lesson::whereIn('course_id', $courses_ids)->get();

        return view('admin.tests.create', compact('courses', 'lessons'));
    }

    public function store(StoreTestsRequest $request)
    {
        if (! Gate::allows('test_create')) {
            return abort(401);
        }
        if(!$request->published){
            $request['published']=0;
        }

        $test = Test::create($request->all());

        return redirect()->route('tests.index');
    }

    public function status($id){
        $test=Test::find($id);
        $test->update(['published'=>!$test->published]);
        session()->flash('msg','w: Test status updated');
        return redirect()->back();
    }

    public function edit($id)
    {
        if (! Gate::allows('test_edit')) {
            return abort(401);
        }
        $courses = Course::ofTeacher()->get();
        $courses_ids = $courses->pluck('id');
        $lessons = Lesson::whereIn('course_id', $courses_ids)->get();

        $test = Test::find($id);

        return view('admin.tests.edit', compact('test', 'courses', 'lessons'));
    }


    public function update(UpdateTestsRequest $request, $id)
    {
        if (! Gate::allows('test_edit')) {
            return abort(401);
        }
        $test = Test::find($id);
        $test->update($request->all());

        return redirect()->route('tests.index');
    }

    public function show($id)
    {
        if (! Gate::allows('test_view')) {
            return abort(401);
        }
        $test = Test::find($id);

        return view('admin.tests.show', compact('test'));
    }


    public function destroy($id)
    {
        if (! Gate::allows('test_delete')) {
            return abort(401);
        }
        $test = Test::find($id);
        $test->delete();

        return redirect()->route('tests.index');
    }

    public function massDestroy(Request $request)
    {
        if (! Gate::allows('test_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Test::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

    public function restore($id)
    {
        if (! Gate::allows('test_delete')) {
            return abort(401);
        }
        $test = Test::onlyTrashed()->find($id);
        $test->restore();

        return redirect()->route('tests.index');
    }


    public function perma_del($id)
    {
        if (! Gate::allows('test_delete')) {
            return abort(401);
        }
        $test = Test::onlyTrashed()->find($id);
        $test->forceDelete();

        return redirect()->back();
    }
}
