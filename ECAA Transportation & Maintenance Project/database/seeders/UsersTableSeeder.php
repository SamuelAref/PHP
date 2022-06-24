<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
            'name' => 'the client user',
            'email' => 'client@gmail.com',
            'role' => 'client',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'the driver user',
            'email' => 'driver@gmail.com',
            'role' => 'driver',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'the Leader user',
            'email' => 'Leader@gmail.com',
            'role' => 'Leader',
            'password' => Hash::make('password'),
        ]);
        
    }
}
