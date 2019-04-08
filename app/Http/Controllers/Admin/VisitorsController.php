<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitorsController extends Controller
{
    public function index()
    {
        $totalAccess = Visitor::count();
        return view('admin.visitors.index', compact('totalAccess'));
    }
}
