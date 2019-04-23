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
        if (Feature::count() <= 0) {
            return redirect()->to('features')->withErrors(['Erro! Nenhuma Característica cadastrada, cadastre ao menos uma e tente novamente.']);
        }
        if (Category::count() <= 0) {
            return redirect()->to('categories')->withErrors(['Erro! Nenhuma Categoria cadastrada, cadastre ao menos uma e tente novamente.']);
        }

        $features = Feature::all();//->pluck('name', 'id');
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
