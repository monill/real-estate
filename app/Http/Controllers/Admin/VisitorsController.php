<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VisitorsController extends Controller
{
    public function index()
    {
        return view('admin.visitors.index', compact('totalAccess'));
    }
}
