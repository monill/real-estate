<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('site.index.index');
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
