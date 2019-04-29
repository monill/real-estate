<?php

namespace App\Http\Controllers\Site;

use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyImage;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Property::orderBy('id', 'DESC')->paginate(12);
        return view('site.properties.index', compact('properties'));
    }

    public function store(Request $request)
    {
        $question = new Question();
        $question->property_id = $request->input('property_id');
        $question->name = $request->input('name');
        $question->email = $request->input('email');
        $question->message = $request->input('message');
        $question->ip = $request->ip();
        $question->save();

        //flash('Mensagem enviada com sucesso, aguarde nosso retorno')->success();
        return back();
    }

    public function show($id, $slug)
    {
        $property = Property::where('id', '=', $id)->whereSlug($slug)->firstOrFail();
        $property->increment('views');

        $images = PropertyImage::where('property_id', '=', $id)->get();
        $features = PropertyFeature::where('property_id', '=', $id)->get();
        return view('site.properties.property', compact('property', 'images', 'features'));
    }

    public function pesquisar(Request $request)
    {
        dd($request->all());
        exit();
    }
}
