<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class User 
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
        if($request->session()->get('role') == 'A'){
            return redirect('/webpanel');
        }
        else if(!Auth::check() && ($request->url() == url("zone/$request->id") || $request->url() == url("zone/$request->id/volume") || $request->url() == url("zone/$request->id/this-zone"))){
            Session::put('qrcode_zone', true);
            return $next($request);
        }
        
        Session::forget('qrcode_zone');
        return $next($request);
    }
}