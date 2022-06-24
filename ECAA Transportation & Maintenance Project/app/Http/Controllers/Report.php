<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\driver;
use App\Models\Cars;
use App\Models\Transport;
use App\Models\Maintenance;

class Report extends Controller
{
    public function Completed()
    {
        $transports=Transport::where('request_status','=','Completed')
                                ->whereMonth('created_at',Carbon::now()->month)
                                ->get();
        $maintenances=Maintenance::where('maintenance_status','=','completed')
                                ->whereMonth('created_at',Carbon::now()->month)
                                ->get();
        $getMonth = [];
        foreach (range(1,12) as $m) {
           $getMonth[]=date('m-F',mktime(0,0,0,$m,1));
        }
        return view('Leader.CompletedReq',[
            'transports' => $transports,
            'maintenances' => $maintenances,
            'getMonth' => $getMonth
            ]);
    }
    public function month(Request $request){
        
        $input_month=$request->month;
        if($input_month == '01-January'){
            $month='1';
        }
        elseif($input_month == '02-February'){
            $month='2';
        }
        elseif($input_month == '03-March'){
            $month='3';
        }
        elseif($input_month == '04-April'){
            $month='4';
        }
        elseif($input_month == '05-May'){
            $month='5';
        }
        elseif($input_month == '06-June'){
            $month='6';
        }
        elseif($input_month == '07-July'){
            $month='7';
        }
        elseif($input_month == '08-August'){
            $month='8';
        }
        elseif($input_month == '09-September'){
            $month='9';
        }
        elseif($input_month == '10-October'){
            $month='10';
        }
        elseif($input_month == '11-November'){
            $month='11';
        } 
        elseif($input_month == '12-December'){
            $month='12';
        }
        $transports=Transport::where('request_status','=','Completed')
                            ->whereMonth('created_at',$month)
                            ->get();
        $maintenances=Maintenance::where('maintenance_status','=','completed')
                                ->whereMonth('created_at',$month)
                                ->get();
        return view('Leader.monthly',[
            'transports' => $transports,
            'maintenances' => $maintenances,
            'input_month' => $input_month
            ]);
    }
    public function Report(){
           //return view('Leader.monthly');
    }
}
