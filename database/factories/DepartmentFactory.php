<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->unique()->numberBetween(1,5),
            'name' => fake()->randomElement(['Neurology', 'Dermatology', 'General', 'Cardiology', 'Orthopedics']),
            'total_staff' => fake()->numberBetween(10,100)
        ];
    }
}
