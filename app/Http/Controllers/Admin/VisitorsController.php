<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VisitorsController extends Controller
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
     * Página inicial Visitantes
     */
    public function index()
    {
        return view('admin.visitors.index');
    }
}
