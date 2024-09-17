<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Driver extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'driver_license_no',
        'rating',
        'availability',
        'vehicle_id'
    ];

    public function vehicle(): HasOne {
        return $this->hasOne(Vehicle::class, 'id', 'vehicle_id');
    }
}
