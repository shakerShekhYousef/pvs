<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class IpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        //$ip = $request->getClientIp();
        $ip = '103.244.134.0';
        $location = Location::get($ip)->countryCode;
        if ($location) {
            session()->put('location', $location);
        } else {
            session()->put('location', 'AE');
        }

        return $next($request);
    }
}
