<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\Test;
use App\Models\QuestionsOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuestionsRequest;
use App\Http\Requests\Admin\UpdateQuestionsRequest;

class QuestionsController extends Controller
{

    public function index()
    {
        if (! Gate::allows('question_access')) {
            return abort(401);
        }

        if (request('show_deleted') == 1) {
            if (! Gate::allows('question_delete')) {
                return abort(401);
            }
            $questions = Question::onlyTrashed()->get();
        } else {
            $questions = Question::whereRaw('true')->orderBy('id','desc');
        }
        $q=request()->get("q");
        $score=request()->get("score");
        if($q){
            $questions->where('question','like',"%{$q}%");
        }
        if($score){
            $questions->where('score','like',"%{$score}%");
        }

        $questions = $questions->paginate(7)->appends(["q"=>$q,"score"=>$score]);

        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        if (! Gate::allows('question_create')) {
            return abort(401);
        }
        $tests = Test::get();
        return view('admin.questions.create', compact('tests'));
    }

    public function store(StoreQuestionsRequest $request)
    {
        if (! Gate::allows('question_create')) {
            return abort(401);
        }
        if (!$request->status) {
            $request['status'] = 0;
        }
        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['question_image'] = $imageName;
        }
        $question = Question::create($request->all());
        $question->tests()->sync(array_filter((array)$request->input('tests')));

        for ($q=1; $q <= 4; $q++) {
            $option = $request->input('option_text' . $q, '');
            if ($option != '') {
                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option_text' => $option,
                    'correct' => $request->input('correct' . $q)

                ]);

            }
        }
        dd($request->all());
        return redirect()->route('questions.index');
    }

    public function edit($id)
    {
        if (! Gate::allows('question_edit')) {
            return abort(401);
        }
        $question = Question::find($id);
        $tests = Test::get();

        return view('admin.questions.edit', compact('question', 'tests'));
    }


    public function update(UpdateQuestionsRequest $request, $id)
    {
        if (! Gate::allows('question_edit')) {
            return abort(401);
        }
        if($request->imageFile) {
            $imageName = basename($request->imageFile->store("public"));
            $request['question_image'] = $imageName;
        }
        $question = Question::find($id);
        $question->update($request->all());
        $question->tests()->sync(array_filter((array)$request->input('tests')));



        return redirect()->route('questions.index');
    }

    public function show($id)
    {
        if (! Gate::allows('question_view')) {
            return abort(401);
        }
        $questions_options = QuestionsOption::where('question_id', $id)->get();
        $tests =Test::whereHas('questions',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $question = Question::find($id);

        return view('admin.questions.show', compact('question', 'questions_options', 'tests'));
    }



    public function destroy($id)
    {
        if (! Gate::allows('question_delete')) {
            return abort(401);
        }
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index');
    }


    public function massDestroy(Request $request)
    {
        if (! Gate::allows('question_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Question::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

    public function restore($id)
    {
        if (! Gate::allows('question_delete')) {
            return abort(401);
        }
        $question = Question::onlyTrashed()->findOrFail($id);
        $question->restore();

        return redirect()->route('questions.index');
    }


    public function perma_del($id)
    {
        if (! Gate::allows('question_delete')) {
            return abort(401);
        }
        $question = Question::onlyTrashed()->findOrFail($id);
        $question->forceDelete();

        return redirect()->route('questions.index');
    }
}
