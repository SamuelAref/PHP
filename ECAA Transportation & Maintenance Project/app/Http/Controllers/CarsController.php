<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $cars= Cars::all();
        return view('cars.index',[
            'cars'=> $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Cars::create([
            'model'=> $request->input('model'),
            'license_plate_number'=> $request->input('license_plate_number'),
            'kilo_meter'=> $request->input('kilo_meter'),
            'passenger_capacity'=> $request->input('passenger_capacity'),
            'car_status'=> $request->input('car_status'),
            'service_type'=> $request->input('service_type'),
            'description'=> $request->input('description')
        ]);
        return redirect('/vehicleList')->withMessage(' New Vehicle has been added to the list');
         
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
        $car= Cars::find($id);
        return view('cars.edit')->with('car',$car);
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
        $car = Cars::where('id',$id)
        ->update([
            'model'=> $request->input('model'),
            'license_plate_number'=> $request->input('license_plate_number'),
            'kilo_meter'=> $request->input('kilo_meter'),
            'passenger_capacity'=> $request->input('passenger_capacity'),
            'car_status'=> $request->input('car_status'),
            'service_type'=> $request->input('service_type'),
            'description'=> $request->input('description')
        ]);
        return redirect('/vehicleList')->withMessage('Vehicle info has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    { 
        $car = Cars::find($id);
        $car->delete();

        return redirect('/vehicleList')->withMessage('Vehicle  has been deleted from the kst');
    }
}
