<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.questions.index');
    }
}
