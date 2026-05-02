<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertDevicesTable extends Component
{
    public $pulses;

    
    public function __construct($pulses)
    {
        $this->pulses = $pulses;
    }

    public function isCritical($pulse)
    {
        // 3. Tu lógica de temperatura y error es correcta, mantenla
        return $pulse->status === 'error';
    }

    public function isOverheating($pulse): bool 
{
    return ($pulse->additional_metrics['temp_c'] ?? 0) >= 80; 
}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-devices-table');
    }
}
