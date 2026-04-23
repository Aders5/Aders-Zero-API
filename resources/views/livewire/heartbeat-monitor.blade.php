<div wire:poll.5s>
    <h2 style="color: #4a5568;">Monitor de ENA-300</h2>
    <table border="1" style="width:100%; border-collapse: collapse; margin-top: 20px;">
        <thead style="background-color: #edf2f7;">
            <tr>
                <th>Dispositivo</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>Status</th>
                <th>Último Latido</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pulses as $pulse)
            <tr>
                <td>{{ $pulse->device_name }}</td>
                <td>{{ $pulse->cpu_usage }}%</td>
                <td>{{ $pulse->ram_usage }}%</td>
                <td>{{ $pulse->status }}</td>
                <td>{{ $pulse->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>