<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Question;

class QuestionsController extends Controller
{
    protected $log;

    /**
     * BlogCommentsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     *
     */
    public function index()
    {
        $questions = Question::paginate(25);
        $unread = Question::where('unread', '=', false)->count();
        return view('admin.questions.index', compact('questions', 'unread'));
    }

    /**
     *
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);
        $question->unread = true;
        $question->update();

        $unread = Question::where('unread', '=', false)->count();
        return view('admin.questions.question', compact('question', 'unread'));
    }

    /**
     *
     */
    public function destroy($id)
    {
        Question::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou uma pergunta');
        return redirect()->to('questions');
    }
}
