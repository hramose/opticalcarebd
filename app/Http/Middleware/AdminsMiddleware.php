<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminsMiddleware
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
        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin') {
            return $next($request);
        }elseif(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'manager'){
            return $next($request);
        } else {
            return redirect()->route('login');
        }
        
    }
} 
