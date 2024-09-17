<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vehicle;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vehicles = Vehicle::pluck('id')->toArray();

        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastName(),
            'driver_license_no' => fake()->randomNumber(7, strict:true),
            'rating' => fake()->numberBetween(2, 5),
            'availability' => fake()->randomElement(['available', 'occupied']),
            'vehicle_id' => fake()->randomElement($vehicles)
        ];
    }
}
