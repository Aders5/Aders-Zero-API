<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heartbeat extends Model
{
    protected $fillable = ['service_id', 'status', 'additional_metrics'];

    protected $casts = ['additional_metrics' => 'array'];
  
}
