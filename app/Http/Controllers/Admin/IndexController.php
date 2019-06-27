<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Property;
use App\Models\Visitor;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * IndexController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Página inicial Dashboard
     */
    public function index()
    {
        $totalProperties = Property::count(); //conta total propriedades estão cadastrada no banco
        $forRent = Property::where('purpose', '=', 1)->count(); //conta quantas propriedades são para Locação
        $forSale = Property::where('purpose', '=', 2)->count(); //conta quantas propriedades são para Venda
        $totalVisitors = Visitor::count(); //conta total de visitantes

        $topFiveProperties = Property::orderBy('views', 'DESC')->take(5)->get(); //Top 5 propriedades mais visualizadas

        $topThreeBlogs = Blog::orderBy('views', 'DESC')->take(3)->get(); //Top 3 blogs mais visualizadas
        $lastThreeBlogs = Blog::orderBy('id', 'DESC')->take(3)->get(); //Ultimos 3 blogs cadastrados

        $totalForRent = DB::table('properties')->where('purpose', '=', 1)->sum('price'); //Soma o preço de todas as propriedades para Locação
        $totalForSale = DB::table('properties')->where('purpose', '=', 2)->sum('price'); //soma o preço de todas as propriedades para Venda

        $compact = [
            'totalProperties' => $totalProperties,
            'forRent' => $forRent,
            'forSale' => $forSale,
            'totalVisitors' => $totalVisitors,
            'topFiveProperties' => $topFiveProperties,
            'topThreeBlogs' => $topThreeBlogs,
            'lastThreeBlogs' => $lastThreeBlogs,
            'totalForRent' => $totalForRent,
            'totalForSale' => $totalForSale
        ];
        return view('admin.dashboard.index', compact($compact));
    }

    /**
     * Limpa o cache, desloga o usuário e no final redireciona para a página Inicial
     */
    public function cleanCache()
    {
        //Clear Cache facade value
        Artisan::call('cache:clear');

        //Reoptimized class loader
        Artisan::call('optimize');

        //Clear Route cache
        Artisan::call('route:cache');

        //Clear View cache
        Artisan::call('view:clear');

        //Clear Config cache
        Artisan::call('config:cache');

        return redirect()->route('index');
    }
}
