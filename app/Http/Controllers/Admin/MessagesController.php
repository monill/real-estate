<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Message;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
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
        $messages = Message::paginate(25);
        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.index', compact('messages', 'unread'));
    }

    /**
     *
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);
        $message->unread = true;
        $message->update();

        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.message', compact('message', 'unread'));
    }

    /**
     *
     */
    public function destroy($id)
    {
        Message::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou uma mensagem');
        return redirect()->to('messages');
    }
}
