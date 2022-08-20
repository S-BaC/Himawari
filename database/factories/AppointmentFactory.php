<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
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
            'expected_minutes' => fake()->numberBetween(10,60),
            'duration_minutes' => fake()->numberBetween(10,60),
            'description' => fake() -> text(150),
            'doctor' => fake() ->  numberBetween(1,30),
            'patient' => fake() ->  numberBetween(1,30),
            'department' => fake() ->  numberBetween(1,5),
            'bill' => fake() -> numberBetween(1,10),
        ];
    }
}
