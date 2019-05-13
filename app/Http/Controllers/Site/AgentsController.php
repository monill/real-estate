<?php

namespace App\Http\Controllers\Site;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentsController extends Controller
{
    /**
     * Página CORRETORES do site
     */
    public function index()
    {
        $agents = User::where('admin', '==', false)->inRandomOrder()->get();
        return view('site.agents.index', compact('agents'));
    }
}
