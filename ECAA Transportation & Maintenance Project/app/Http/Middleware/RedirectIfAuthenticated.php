<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null) {
      
      
          if (Auth::guard($guard)->check()) {
              if (Auth::user()->role == 'driver') {
                
                  return redirect('driver');
              } 
              elseif (Auth::user()->role == 'client') {
                return redirect('client');
              }
              elseif (Auth::user()->role == 'Leader'){
                return redirect('Leader');
              }
              elseif (Auth::user()->role == 'maintenanceHead'){
                return redirect('maintenanceHead');
              }
              elseif (Auth::user()->role == 'admin'){
                return redirect('admin');
              }
              
          }  
          return $next($request);
    }
}