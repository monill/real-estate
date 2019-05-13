<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Página INICIAL do site
     *
     * retorna sliders das propriedades
     * retorna 6 ultimas propriedades cadastradas em ordem decrescente
     */
    public function index()
    {
        $sliders = Property::where('slider', '=', true)->get();
        $properties = Property::orderBy('id', 'DESC')->take(6)->get();
        return view('site.index.index', compact('sliders', 'properties'));
    }

    /**
     * Newsletter
     *
     * salva nome, email e o IP de quem se registrou no site para receber a newsletter
     */
    public function store(NewsletterRequest $request)
    {
        if (Request::METHOD_POST) {

            Newsletter::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'ip' => getIP()
            ]);

            //flash('E-mail cadastrado com sucesso!')->success();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
