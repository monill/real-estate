<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Http\Controllers\Controller;

class LogsController extends Controller
{
    /**
     * BlogCommentsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Página dos Logs
     * Exibe em ordem decrescente
     */
    public function index()
    {
        $logs = Log::orderBy('id', 'DESC')->get();;
        return view('admin.logs.index', compact('logs'));
    }

    /**
     * Deleta o log do banco
     */
    public function destroy($id)
    {
        Log::findOrFail($id)->delete();
        return redirect()->to('logs');
    }
}
