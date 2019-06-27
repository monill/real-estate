<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Message;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    protected $log;

    /**
     * MessagesController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     * Página inicial Mensagens
     * mensagens recebidas pelo formulário da página Contato
     */
    public function index()
    {
        $messages = Message::paginate(25);
        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.index', compact('messages', 'unread'));
    }

    /**
     * Exibe a mensagem seleciona
     * Marca mensagem como lida
     */
    public function show($message_id)
    {
        $message = Message::findOrFail($message_id);
        $message->unread = true;
        $message->update();

        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.message', compact('message', 'unread'));
    }

    /**
     * Deleta mensagem do banco
     */
    public function destroy($message_id)
    {
        Message::findOrFail($message_id)->delete();
        $this->log->log('Usuario(a) deletou uma mensagem');
        return redirect()->to('messages');
    }
}
