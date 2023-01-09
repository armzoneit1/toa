<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Backend\User;

class SessionLength 
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
        $member = User::find(Auth::guard()->id());
        if($member){
            if($member->role == 'U'){
                dd($member);
                config(['session.lifetime' => 1]);
            }            
        }
        return $next($request);
    }
}