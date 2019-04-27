<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $questions = Question::paginate(25);
        $unread = Question::where('unread', '=', false)->count();
        return view('admin.questions.index', compact('questions', 'unread'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $question = Question::findOrFail($id);
        $question->unread = true;
        $question->update();

        $unread = Question::where('unread', '=', false)->count();
        return view('admin.questions.question', compact('question', 'unread'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Question::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou uma pergunta');
        return redirect()->to('questions');
    }
}
