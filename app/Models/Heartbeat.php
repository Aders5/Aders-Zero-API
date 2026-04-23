<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heartbeat extends Model
{
    protected $fillable = [
        'device_name',
        'cpu_usage',
        'ram_usage',
        'status',
    ];
}
