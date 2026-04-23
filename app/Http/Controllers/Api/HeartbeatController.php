<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Heartbeat;
use Illuminate\Http\Request;

class HeartbeatController extends Controller
{
    public function store(Request $request)
    {
        // Validamos que los datos vengan correctos
        $validated = $request->validate([
            'device_name' => 'required|string',
            'cpu_usage'   => 'required|numeric',
            'ram_usage'   => 'required|numeric',
            'status'      => 'required|string',
        ]);

        // Creamos el registro
        $heartbeat = Heartbeat::create($validated);

        return response()->json([
            'message' => 'Latido recibido con éxito',
            'data' => $heartbeat
        ], 201);
    }
}