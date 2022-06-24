<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transport;
use App\Models\Maintenance;


class RoleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function client() {
        $transports= Transport::where('requested_by','=',\Auth::user()->username)->get();
        return view('client.dashboard',[
            'transports'=>$transports
        ]);
    }  
    public function driver() {
        $transports= Transport::where('driver_name','=',\Auth::user()->fullName())->get();
       
        return view('driver.dashboard',[
            'transports'=>$transports
        ]);
        
      }
    public function Leader() {
        $transport=Transport::where('request_status','=','pending')->count();
        $new = Maintenance::where('maintenance_status','=','pending')->count();
        return view('Leader.dashboard',[
            'transport'=> $transport,
            'new'=> $new
        ]);
    }
    public function maintenHead() 
    {
        
        $maintenances =Maintenance::where('maintenance_status','=','Approved')
                                        ->orWhere('maintenance_status','=','Mechanic_Completed')
                                        ->orWhere('maintenance_status','=','completed')
                                        ->get();
        return view('maintenHead.dashboard',[
            'maintenances'=> $maintenances,
        ]);
      }
    public function admin() {
        $count= User::where('isApproved','=','0')->count();
            return view('admin.dashboard',[
                'count' => $count
            ]);
    }  
    public function approval()
    {
        return view('approval');
    }
    public function unapprovedList(){
        $users= User::where('isApproved','=','0')
                            ->get();
                return view('admin.users',compact('users'));
    }
    public function approve($user_id){
        $user = User::findOrFail($user_id);
        $user->update(['isApproved'=> '1']);
        return redirect()->route('admin.users')->withMessage('User Approved Successfully');

    }
    
}
