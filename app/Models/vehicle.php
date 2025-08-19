<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    //
     protected $fillable = [
        'vehicleName',
        'vehiclePrice',
        'modelNumber',
        'description',
        'image',
    ];
}
