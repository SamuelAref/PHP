<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;
use App\Models\User;

class driverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $drivers=driver::all();
        return view('driverList.index',[
            'drivers'=>$drivers,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driverList.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $driver = driver::create([
            'first_name'=> $request->input('first_name'),
            'last_name'=> $request->input('last_name'),
            'created_at'=> $request->input('created_at'),
            'driver_status'=> $request->input('driver_status')
        ]);
       return redirect('/driverList')->with('success','New driver info added to the list');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $driver=driver::find($id);
        return view('driverList.edit')->with('driver',$driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       
        $driver = driver::where('id',$id)
        ->update([
            'first_name'=> $request->input('first_name'),
            'last_name'=> $request->input('last_name'),
            'driver_status'=> $request->input('driver_status'),
        ]);
        $drivers=driver::find($id);
        $users=User::where('role','=','driver')->get();
        foreach ($users as $user) {
            if ($user->fullName() ==$drivers->driverFullName()) {
                $drivers->update(['username'=> $user->username]);
                
            }
        }
        return redirect('/driverList')->with('success','Driver info has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = driver::find($id);
        $driver->delete();
        return redirect('/driverList')->withMessage('A driver deleted from the list');
    }
}
