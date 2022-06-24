<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class driver
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
    
            if (\Auth::user()->role == 'client' ) {
                return redirect()->route('/client');
            }
           
            else if (\Auth::user()->role == 'driver') {
                return $next($request);
            }
    
            else if  (\Auth::user()->role == 'Leader') {
                return redirect()->route('/Leader');
            }
            else if  (\Auth::user()->role == 'admin') {
                return redirect()->route('/admin');
            }
            else if (\Auth::user()->role == 'maintenanceHead') {
                return redirect()->route('/maintenanceHead');
            }
    
    }
}
