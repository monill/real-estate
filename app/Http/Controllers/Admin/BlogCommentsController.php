<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Log;

class BlogCommentsController extends Controller
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
     * Página inicial Comentários
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Aprova/Desaprova comentário feito sobre o blog postado
     */
    public function update($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $comment->allowed = !$comment->allowed;
        $comment->update();

        $this->log->log('Usuario(a) aprovou ou reprovou comentario.');
        return redirect()->to('comments');
    }

    /**
     * Deleta o comentário do banco
     */
    public function destroy($comment_id)
    {
        Comment::findOrFail($comment_id)->delete();
        $this->log->log('Usuario(a) deletou comentario');
        return redirect()->to('comments');
    }
}
