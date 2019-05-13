<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\MessagesRequest;
use App\Models\Message;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Página CONTATO do site
     */
    public function index()
    {
        return view('site.contact.index');
    }

    /**
     * Salva no banco os dados passado por formulário na página de CONTATO
     * Valida os campos com MessagesRequest, se tiver tudo OK salva no banco,
     * caso contrário retorna uma mensagem com erro
     */
    public function store(MessagesRequest $request)
    {
        $message = new Message();
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->phone = $request->get('phone');
        $message->subject = $request->get('subject');
        $message->message = $request->get('message');
        $message->ip = $request->ip();
        $message->save();

        //flash('Mensagem enviada com sucesso, aguarde nosso retorno')->success();
        return redirect()->to('contato');
    }
}
