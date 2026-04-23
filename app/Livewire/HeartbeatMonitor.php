<?php

namespace App\Livewire;

use App\Models\Heartbeat;
use Livewire\Component;

class HeartbeatMonitor extends Component
{
    public function render()
    {
        return view('livewire.heartbeat-monitor', [
            'pulses' => Heartbeat::latest()->take(10)->get()
        ]);
    }
}