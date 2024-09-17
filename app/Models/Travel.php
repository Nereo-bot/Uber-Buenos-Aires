<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    public $timestamps = false;

    protected $fillable = [
        'payment_id',
        'client_id',
        'driver_id',
        'start',
        'end',
        'amount'
    ];

    public function driver(): HasOne {
        return $this->hasOne(Driver::class, 'id', 'driver_id');
    }
}
