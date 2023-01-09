<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Login 
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
        if(Auth::check() || $request->url() == url("zone/$request->id") || $request->url() == url("zone/$request->id/volume") || $request->url() == url("zone/$request->id/this-zone")){
            return $next($request);
        }
        return redirect('');
    }
}
