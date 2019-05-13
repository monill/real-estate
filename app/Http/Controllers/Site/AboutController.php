<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;

class AboutController extends Controller
{
    /**
     * Página SOBRE do site
     */
    public function index()
    {
        $services = Service::all();
        return view('site.about.index', compact('services'));
    }
}
