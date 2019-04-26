<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        return redirect()->to('questions');
    }
}
