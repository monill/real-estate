<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    public function years()
    {
        $year = date('Y');

        $totalProperties = DB::table('properties')->whereYear('created_at', '=', $year)->count();

        $forRent = DB::table('properties')->whereYear('created_at', '=', $year)
            ->where('purpose', '=', 1)->count();

        $forSale = DB::table('properties')->whereYear('created_at', '=', $year)
            ->where('purpose', '=', 2)->count();

        $data = [
            ['ano' => 2012, 'Venda' => 100, 'Locacao' => 90, 'all' => 190],
            ['ano' => 2013, 'Venda' => 75, 'Locacao' => 65, 'all' => 140],
            ['ano' => 2014, 'Venda' => 50, 'Locacao' => 40, 'all' => 90],
            ['ano' => 2015, 'Venda' => 75, 'Locacao' => 65, 'all' => 140],
            ['ano' => 2016, 'Venda' => 50, 'Locacao' => 40, 'all' => 90],
            ['ano' => 2017, 'Venda' => 75, 'Locacao' => 65, 'all' => 140],
            ['ano' => 2018, 'Venda' => 30, 'Locacao' => 70, 'all' => 100],
            ['ano' => $year, 'Venda' => $forSale, 'Locacao' => $forRent, 'all' => $totalProperties]
        ];

        return response()->json($data, 200);
    }
}
