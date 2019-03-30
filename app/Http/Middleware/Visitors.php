<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Jenssegers\Agent\Agent;

class Visitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $agent = new Agent();
        $clientIP = $request->ip();
        $client = json_decode(@file_get_contents('http://ip-api.com/json/' . $clientIP), true);

        if (!$request->session()->has('visitor.' . $clientIP)) {
            $visitor = Visitor::where('ip', '=', $clientIP)->first();
            if (!$visitor) {
                $visit = new Visitor();
                $visit->ip = isset($clientIP) ? $clientIP : '0';
                $visit->country = isset($client['country']) ? $client['country'] : '0';
                $visit->city = isset($client['city']) ? $client['city'] : '0';
                $visit->estate = isset($client['regionName']) ? $client['regionName'] : '0';
                $visit->browser = $agent->browser() ? $agent->browser() : '0';
                $visit->system = $agent->platform() ? $agent->platform() : '0';
                $visit->device = $agent->device() ? $agent->device() : '0';
                $visit->mobile = $agent->isMobile();
                $visit->phone = $agent->isPhone();
                $visit->tablet = $agent->isTablet();
                $visit->desktop = $agent->isDesktop();
                $visit->bot = $agent->isRobot();
                $visit->referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '0';
                $visit->loadtime = round((microtime(true) - LARAVEL_START), 8);
                $visit->save();
            } else {
                $visitor->browser = $agent->browser() ? $agent->browser() : '0';
                $visitor->increment('numaccess');
            }
        } else {
            $request->session()->put('visitor.' . $clientIP);
        }
        return $next($request);
    }
}
