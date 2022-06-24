<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\driver;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
      protected function redirectTo() {
        $roles = Auth()->user()->role; 
        if ($roles=='driver') {
            return '/driver';

        }
        elseif ($roles=='Leader') {
           return '/Leader';
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
        // if ($roles=='driver') {
        //     return '/driver';

        // }
        // elseif ($roles=='Leader') {
        //    return '/Leader';
        // }
        // else {
        //     return '/client';
        // }
        
      }
      

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:20','unique:users'],
            'phone' => ['required', 'string','min:10', 'max:13','unique:users'],
            
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
     {    
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
        
    }
}
