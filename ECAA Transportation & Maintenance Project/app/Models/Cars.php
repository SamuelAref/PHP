<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    
    protected $table ='cars';
    protected $primarykey ='id';
     
    protected $fillable =['model',
                    'license_plate_number',
                    'kilo_meter',
                    'passenger_capacity',
                    'car_status',
                    'service_type',
                    'description'];
    public function TransportRequest()
    {
        return $this->belongsTo(Transport::class);
    }
}
