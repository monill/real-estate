<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class Visitors
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $agent = new Agent();
        $clientIP = getIP();
        $client = json_decode(@file_get_contents('http://ip-api.com/json/' . $clientIP), true);

        if (!$request->session()->has('visitor.' . $clientIP)) {
            $visitor = Visitor::where('ip', '=', $clientIP)->first();
            if (!$visitor) {
                $visit = new Visitor();
                $visit->ip = isset($clientIP) ? $clientIP : NULL;
                $visit->country = $client['country'] != '' ? $client['country'] : NULL;
                $visit->city = $client['city'] != '' ? $client['city'] : NULL;
                $visit->estate = $client['regionName'] != '' ? $client['regionName'] : NULL;
                $visit->browser = $agent->browser() ? $agent->browser() : NULL;
                $visit->system = $agent->platform() ? $agent->platform() : NULL;
                $visit->device = $agent->device() ? $agent->device() : NULL;
                $visit->mobile = $agent->isMobile();
                $visit->phone = $agent->isPhone();
                $visit->tablet = $agent->isTablet();
                $visit->desktop = $agent->isDesktop();
                $visit->bot = $agent->isRobot();
                $visit->referrer = $_SERVER['HTTP_REFERER'] != '' ? $_SERVER['HTTP_REFERER'] : NULL;
                $visit->loadtime = round((microtime(true) - LARAVEL_START), 8);
                $visit->save();
            } else {
                $visitor->browser = $agent->browser() ? $agent->browser() : NULL;
                $visitor->increment('numaccess');
            }
        } else {
            $request->session()->put('visitor.' . $clientIP);
        }
        return $next($request);
    }
}
