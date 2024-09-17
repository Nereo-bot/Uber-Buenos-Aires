<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->randomElement(['Modelo Y', 'Modelo X', 'Modelo Z']),
            'brand' => fake()->randomElement(['Ford', 'Tesla', 'Toyota', 'Peugeot']),
            'condition' => fake()->randomElement(['used', 'new'])
        ];
    }
}
