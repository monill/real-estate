<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $properties = Property::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.properties.index', compact('properties'));
    }

    public function create()
    {
        $features = Feature::all()->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.properties.add', compact('features', 'categories'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
