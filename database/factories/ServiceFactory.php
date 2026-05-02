<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Rassberry PI 5', 'espressif esp32', 'Server_1', 'Server_2', 'Server_3']),
            'description' => $this->faker->sentence(),
        ];
    }
}
