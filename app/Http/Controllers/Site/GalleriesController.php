<?php

namespace App\Http\Controllers\Site;

use App\Models\PropertyImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleriesController extends Controller
{
    public function index()
    {
        $images = PropertyImage::paginate(9);
        return view('site.galleries.index', compact('images'));
    }
}
