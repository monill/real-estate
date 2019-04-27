<?php

namespace App\Http\Controllers\Api;

use App\Models\Visitor;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use stdClass;

class VisitorsController extends Controller
{
    /**
     * Sistemas Operacionais Utilizados
     * @return JsonResponse
     */
    public function os()
    {
        $all = Visitor::count();
        if (!Cache::has('os_usage')) {
            $os = DB::table('visitors')->select(DB::raw('count(*) as oss, system'))->groupBy('system')->get();
            $data = [];
            foreach ($os as $key => $item) {
                $percent = (Visitor::where('system', '=', $item->system)->count() / $all) * 100;
                $data[$key] = new stdClass();
                $data[$key]->label = $item->system;
                $data[$key]->value = round($percent);
            }
            Cache::put('os_usage', $data, 10);
        } else {
            $data = Cache::get('os_usage');
        }
        return response()->json($data, 200);
    }

    /**
     * Navegadores Utilizados
     * @return JsonResponse
     */
    public function browser()
    {
        $all = Visitor::count();
        if (!Cache::has('browsers')) {
            $os = DB::table('visitors')->select(DB::raw('count(*) as browsers, browser'))->groupBy('browser')->get();
            $data = [];
            foreach ($os as $key => $item) {
                $percent = (Visitor::where('browser', '=', $item->browser)->count() / $all) * 100;
                $data[$key] = new stdClass();
                $data[$key]->label = $item->browser;
                $data[$key]->value = round($percent);
            }
            Cache::put('browsers', $data, 10);
        } else {
            $data = Cache::get('browsers');
        }
        return response()->json($data, 200);
    }

    /**
     * Paises Que Mais Acessam Ao Site
     * @return JsonResponse
     */
    public function cities()
    {
        $all = Visitor::count();
        if (!Cache::has('cities')) {
            $os = DB::table('visitors')->select(DB::raw('count(*) as cities, city'))->groupBy('city')->get();
            $data = [];
            foreach ($os as $key => $item) {
                $percent = (Visitor::where('city', '=', $item->city)->count() / $all) * 100;
                $data[$key] = new stdClass();
                $data[$key]->label = $item->city;
                $data[$key]->value = round($percent);
            }
            Cache::put('cities', $data, 10);
        } else {
            $data = Cache::get('cities');
        }
        return response()->json($data, 200);
    }

    /**
     * Meses Mais Acessados
     * @return JsonResponse
     */
    public function months()
    {
        $month01 = DB::table('visitors')->whereMonth('created_at', '01')->count();
        $month02 = DB::table('visitors')->whereMonth('created_at', '02')->count();
        $month03 = DB::table('visitors')->whereMonth('created_at', '03')->count();
        $month04 = DB::table('visitors')->whereMonth('created_at', '04')->count();
        $month05 = DB::table('visitors')->whereMonth('created_at', '05')->count();
        $month06 = DB::table('visitors')->whereMonth('created_at', '06')->count();
        $month07 = DB::table('visitors')->whereMonth('created_at', '07')->count();
        $month08 = DB::table('visitors')->whereMonth('created_at', '08')->count();
        $month09 = DB::table('visitors')->whereMonth('created_at', '09')->count();
        $month10 = DB::table('visitors')->whereMonth('created_at', '10')->count();
        $month11 = DB::table('visitors')->whereMonth('created_at', '11')->count();
        $month12 = DB::table('visitors')->whereMonth('created_at', '12')->count();

        $data = [
            ['m' => 'Jan', 'v' => $month01],
            ['m' => 'Fev', 'v' => $month02],
            ['m' => 'Mar', 'v' => $month03],
            ['m' => 'Abr', 'v' => $month04],
            ['m' => 'Mai', 'v' => $month05],
            ['m' => 'Jun', 'v' => $month06],
            ['m' => 'Jul', 'v' => $month07],
            ['m' => 'Ago', 'v' => $month08],
            ['m' => 'Set', 'v' => $month09],
            ['m' => 'Out', 'v' => $month10],
            ['m' => 'Nov', 'v' => $month11],
            ['m' => 'Dez', 'v' => $month12]
        ];

        return response()->json($data, 200);
    }
}
