<?php

namespace App\Http\Controllers\Site;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentsController extends Controller
{
    public function index()
    {
        $agents = User::all();
        return view('site.agents.index', compact('agents'));
    }
}
