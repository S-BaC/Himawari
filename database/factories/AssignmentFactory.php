<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_time' => now(),
            'cleaning_staff'=> fake()->numberBetween(1,30),
            'nurse_1'=> fake()->numberBetween(1,30),
            'nurse_2'=> fake()->numberBetween(1,30),
        ];
    }
}
