<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Question;

class QuestionsController extends Controller
{
    protected $log;

    /**
     * QuestionsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     * Página inicial Dúvidas sobre as propriedades
     * Retorna em ordem decrescente, paginando 25 por página
     * Conta total de mensagens não lidas
     */
    public function index()
    {
        $questions = Question::orderBy('id', 'DESC')->paginate(25);
        $unread = Question::where('unread', '=', false)->count();
        return view('admin.questions.index', compact('questions', 'unread'));
    }

    /**
     * Exibe dúvida seleciona
     * Marca dúvida como lida
     */
    public function show($question_id)
    {
        $question = Question::findOrFail($question_id);
        $question->unread = true;
        $question->update();

        $unread = Question::where('unread', '=', false)->count();
        return view('admin.questions.question', compact('question', 'unread'));
    }

    /**
     * Deleta Dúvida do banco
     */
    public function destroy($question_id)
    {
        Question::findOrFail($question_id)->delete();
        $this->log->log('Usuario(a) deletou uma pergunta');
        return redirect()->to('questions');
    }
}
