<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('site.about.index');
    }
}
