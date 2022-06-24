<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class maintenanceHead
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!\Auth::check()) {
            return redirect()->route('/login');
        }

        elseif (\Auth::user()->role == 'client' ) {
            return redirect()->route('/client');
        }
       
        elseif (\Auth::user()->role == 'driver') {
            return redirect()->route('/driver');
        }
        elseif (\Auth::user()->role == 'admin') {
            return redirect()->route('/admin');
        }
        elseif (\Auth::user()->role == 'maintenanceHead') {
            return $next($request);
        }
        elseif  (\Auth::user()->role == 'Leader') {
            return redirect()->route('/Leader');
        }
         
    }
}
