<?php

namespace Database\Factories;

use App\Models\Heartbeat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Heartbeat>
 */
class HeartbeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => \App\Models\Service::factory(),
            'additional_metrics' => [
             'latency_ms' => $this->faker->numberBetween(10, 500),
             'load_cpu' => $this->faker->numberBetween(1, 100) . '%',
             'load_RAM' => $this->faker->numberBetween(1, 100) . '%',
             'temp_c' => $this->faker->numberBetween(1, 100) . 'C',
             'local_IP' => $this->faker->ipv4(),
            ],
            'status' => $this->faker->randomElement(['online', 'offline', 'error']),
        ];
    }
}
