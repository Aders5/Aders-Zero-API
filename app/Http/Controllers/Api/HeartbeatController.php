<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Heartbeat;
use Illuminate\Http\Request;

class HeartbeatController extends Controller
{
    public function store(Request $request)
    {
  
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'status'     => 'required|string|max:255',
            'metrics'    => 'nullable|array' 
        ]);

        $heartbeat = Heartbeat::create([
            'service_id'         => $validated['service_id'],
            'status'             => $validated['status'],
            'additional_metrics' => $validated['metrics'],
        ]);

        return response()->json([
            'message' => 'Latido recibido con éxito',
            'data'    => $heartbeat
        ], 201);
    }
}