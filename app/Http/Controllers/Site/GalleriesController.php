<?php

namespace App\Http\Controllers\Site;

use App\Models\PropertyImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleriesController extends Controller
{
    /**
     * Página GALERIA do site
     *
     * Seleciona todas a imagens de todas as propriedades
     * Retorna fazendo a paginação de 9 imagens por vez
     */
    public function index()
    {
        $images = PropertyImage::paginate(12);
        return view('site.galleries.index', compact('images'));
    }
}
