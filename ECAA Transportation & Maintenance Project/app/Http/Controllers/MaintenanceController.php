<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transport;
use App\Models\driver;
use App\Models\Cars;
use App\Models\Maintenance;

class MaintenanceController extends Controller
{
    public function RequestMaintenance($id){
        
        $transports=Transport::find($id);
        return view('driver.request')->with(compact('transports'));
    }
    public function RequestMaintenancePost(Request $request,$id){
        $transports=Transport::find($id);
        $cars=Cars::where('license_plate_number',$transports->car_license_num)->first();
        $issues=$request->input('issues');
        foreach($issues as $issue){
            $data=implode(',',$issues);
        }
            $maintenance=Maintenance::create([
                'vehicle_type'=>$cars->service_type,
                'license_number'=>$transports->car_license_num,
                'kiloMeter_reading'=>$request->input('kiloMeter_reading'),
                'driver_name'=>$transports->driver_name,
                'issues'=> $data,
            ]);
        
            return redirect()->route('driver')->with('info',' Maintenance Request has been sent waiting for Approval...');
    }
    
    public function AuthtMaintenance(){
        $requests= Maintenance::all();
        
        return view('Leader.MaintRequests',[
            'requests'=> $requests
        ]);
    }
    public function MaintApprove($id)
    {
        $user=User::find(\Auth::user()->id);
        $maintenances=Maintenance::find($id);
        $cars=Cars::where('license_plate_number',$maintenances->license_number)->first();
        $maintenance = Maintenance::where('id',$id)->update([
            'maintenance_status' => 'Approved',
            'shift_leader'=>$user->fullName(),
        ]);
        $cars->update(['car_status'=> 'under maintenance']);
        return redirect()->route('maintenanceAuth')->with('success','The request has been approved ');
    }
    public function MaintDeny($id){
        $user=User::find(\Auth::user()->id);
        $maintenance = Maintenance::where('id',$id)->update([
            'maintenance_status' => 'denied',
            'shift_leader'=>$user->fullName(),
        ]);
        
       return redirect()->route('maintenanceAuth')->with('warning','A request has been denied');
    }
    //mechanic head

    public function MaintAssign($id){
        $maintenances= Maintenance::find($id);
       return view('maintenHead.assign',[
            'maintenances'=>$maintenances
        ]);
    }
    public function MaintUpdate(request $request, $id){ 
        $datas=$request->input('fixed_issues');
        $data=json_encode($datas);
        $maintenances = Maintenance::where('id',$id)->update([
            'assigned_mechanic'=> $request->input('assigned_mechanic'),
            'maintenance_type'=>$request->input('maintenance_type'),
            'starting_date'=>$request->input('starting_date'),
            'fixed_issues'=> $data,
            
            'material_expense'=> $request->input('material_expense'),
            'Labor_expense'=>$request->input('Labor_expense'),
            'finished_date'=>$request->input('finished_date'),
            'Total_time'=>$request->input('Total_time'),
            'mechanics_comment'=>$request->input('mechanics_comment'),
        ]);
            $mainten=Maintenance::find($id);
           $labor=$mainten->Labor_expense;
           $material=$mainten->material_expense;
           $total_cost=$labor + $material;
           $mainten->update([ 
                'Total_expense'=>$total_cost,
                ]);
                
                $data1=$mainten->fixed_issues; 
                $data=implode(',',$data1);
                   $mainten->fixed_issues=$data;
                    $mainten->save();
        return redirect()->route('maintenanceHead')->with('success','Data has been edited');
    }
    public function MechReqCompleted($id){

        $maintenances= Maintenance::find($id);
        $cars=Cars::where('license_plate_number','=',$maintenances->license_number)->first();
        $maintenance=Maintenance::where('id',$id)->update(['maintenance_status'=> 'Mechanic_Completed']);
        $cars->update(['car_status'=>'Available']);
        return redirect()->route('maintenanceHead')->with('success','Maintenance  has been completed...');
    }
    public function maintenancecomplete($id){
        $maintenance = Maintenance::where('id',$id)->update([
            'maintenance_status' => 'completed',
        ]);
        
       return redirect()->route('maintenanceAuth')->with('success','A Maintenance service has been completed');

    }
}
