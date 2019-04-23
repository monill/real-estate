<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard.index');
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
        //Clear Cache facade value:
        Artisan::call('cache:clear');

        //Reoptimized class loader:
        Artisan::call('optimize');

        //Clear Route cache:
        Artisan::call('route:cache');

        //Clear View cache:
        Artisan::call('view:clear');

        //Clear Config cache:
        Artisan::call('config:cache');
    }
}
