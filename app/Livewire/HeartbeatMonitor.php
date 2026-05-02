<?php

namespace App\Livewire;

use App\Models\Heartbeat;
use Livewire\Component;

class HeartbeatMonitor extends Component
{
    public function render()
    {
        return view('livewire.heartbeat-monitor', [
        'pulses' => \App\Models\Heartbeat::with('service')->latest()->get()
     ]);
       
    }
}