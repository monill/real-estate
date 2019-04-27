<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Property;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalProperties = Property::count();
        $forRent = Property::where('purpose', '=', 1)->count();
        $forSale = Property::where('purpose', '=', 2)->count();
        $totalVisitors = Visitor::count();

        $topFiveProperties = Property::orderBy('views')->take(5)->get();

        $topThreeBlogs = Blog::orderBy('views')->take(3)->get();
        $lastThreeBlogs = Blog::orderBy('id')->take(3)->get();


        $totalForRent = DB::table('properties')->where('purpose', '=', 1)->avg('price');
        $totalForSale = DB::table('properties')->where('purpose', '=', 2)->avg('price');

        $compact = [
            'totalProperties',
            'forRent',
            'forSale',
            'totalVisitors',
            'topFiveProperties',
            'topThreeBlogs',
            'lastThreeBlogs',
            'totalForRent',
            'totalForSale'
        ];
        return view('admin.dashboard.index', compact($compact));
    }

    public function create()
    {
        //
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
    }
}
