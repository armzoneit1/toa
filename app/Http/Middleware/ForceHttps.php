<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceHttps
{
    protected $httpsRoutes = [
        'push-to-talk',
        'change_theme_push'
    ];

    public function handle(Request $request, Closure $next)
    {
        $isHttpsRoute = in_array($request->path(), $this->httpsRoutes, true);

        // dd($request->secure() , env('APP_ENV') , $isHttpsRoute);

        if (!$request->secure() && env('APP_ENV') === 'production' && $isHttpsRoute) {
            return redirect()->secure(str_replace('toa/', '', $request->getRequestUri()));
        } elseif ($request->secure() && !in_array($request->path(), $this->httpsRoutes, true)) {
            $http_url = preg_replace('/^https:/i', 'http:', $request->fullUrl());
            return redirect($http_url);
        }

        return $next($request);
    }
}
