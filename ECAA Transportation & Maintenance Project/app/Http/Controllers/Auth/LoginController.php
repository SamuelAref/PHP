<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo() {
      $roles = Auth()->user()->role; 
        if ($roles=='driver') {
            return ('/driver');

        }
        elseif ($roles=='Leader') {
          return ('/Leader');
        }
        elseif ($roles=='maintenanceHead') {
          return ('/maintenanceHead');
        }
        elseif($roles=='client') {
          return '/client';
        }
        elseif($roles=='admin') {
          return '/admin';
        }
      }
    public function username() 
    {
      return 'username';
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
