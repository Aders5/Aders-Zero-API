<div>
   <h2 style="color: #67C23C;">Devices_Monitor</h2>
    <table border="1" style="width:100%; border-collapse: collapse; margin-top: 20px;">
        <thead style="background-color: #555751;">
            <tr>
                <th>ID</th>
                <th>Device</th>
                <th>Latency_ms</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>Temp</th>
                <th>Local_IP</th>
                <th>Status</th>
                <th>Last_Heartbeat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pulses as $pulse)
            <tr class="{{ $isCritical($pulse) ? 'bg-red-500' : '' }}">
                <td>{{ $pulse->service->id }}</td>
                <td>{{ $pulse->service->name }}</td>
                <td>{{ $pulse->additional_metrics['latency_ms'] ?? 'N/A' }}</td>
                <td>{{ $pulse->additional_metrics['load_cpu'] ?? 'N/A' }}</td>
                <td>{{ $pulse->additional_metrics['load_RAM'] ?? 'N/A' }}</td>
                <td class="{{ $isOverheating($pulse) ? 'bg-orange-500 text-black font-black animate-pulse' : '' }}"> {{ $pulse->additional_metrics['temp_c'] ?? 'N/A' }}</td>
                <td>{{ $pulse->additional_metrics['local_IP'] ?? 'N/A' }}</td>
                <td>{{ $pulse->status }}</td>
                <td>{{ $pulse->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>