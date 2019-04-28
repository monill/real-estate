<?php

namespace App\Http\Controllers\Site;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Property::where('slider', '=', true)->get();
        $properties = Property::orderBy('id', 'DESC')->take(6)->get();
        return view('site.index.index', compact('sliders', 'properties'));
    }

    /**
     * salva newsletter
     */
    public function store(Request $request)
    {
        if (Request::METHOD_POST) {

            $validate = Validator::make($request->all(), [
                'email' => 'required|email|unique:newsletters,email'
            ]);

            if ($validate->fails()) {
                flash('Endereço de e-mail já cadastrado!')->warning();
                return back();
            } else {
                Newsletter::create([
                    'email' => $request->get('email')
                ]);

                //flash('E-mail cadastrado com sucesso!')->success();
                return back();
            }
        } else {
            return back();
        }
    }
}
