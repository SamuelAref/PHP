<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $table ='transports';
    protected $primarykey ='id';
    protected $fillable =[
        'requested_by',
        'Approved_by',
        'travelers_name',
        'destination',
        'reason',
        'starting_time',
        'ending_time',
        'initial_kilo_meter',
        'final_kilo_meter'

    ];
   
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function  Car()
    {
        return $this->hasOne(Cars::class);
    }
    public function  driver()
    {
        return $this->hasOne(driver::class);
    }
   
}
