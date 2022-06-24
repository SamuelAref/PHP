<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table ='maintenances';
    protected $primarykey ='id';
    protected $fillable =[
        'assigned_mechanic',
        'driver_name',
        'shift_leader',
        'vehicle_type',
        'license_number',
        'kiloMeter_reading',
        'issues',
        'starting_date',
        'finished_date',
        'fixed_issues',
        'material_expense',
        'Labor_expense',
        'Total_expense',
        'mechanics_comment',
        'maintenance_status',
        'maintenance_type',
        'Total_time'
    ];
   
    protected $casts=[
        'issues' =>'array',
        'fixed_issues' =>'array'
    ];
}
