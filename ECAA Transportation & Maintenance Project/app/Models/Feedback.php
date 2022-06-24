<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table ='feedback';
    protected $primarykey ='id';
    protected $fillable =[
        'feedback_rate',
        'feedback_text',
        'feedback_By',
    ];
}
