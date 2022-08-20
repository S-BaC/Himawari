<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => fake()->unique()->numberBetween(1,30),
            'name' => fake()->name(),
            'gender' => fake()->numberBetween(1,3),
            'email' => fake()->unique()->email(),
            'phone' => fake()->unique()->phoneNumber(),
            'department_id' => fake()->numberBetween(1,5),
            'role_id' => fake()->numberBetween(1,5),
            'date_of_birth' => fake()->date(),
            'start_of_employment' => fake()->date(),
            'experience' => fake()->numberBetween(1,15),
            'age' => fake()->numberBetween(20,50),
            'cv' => fake()->unique()->numberBetween(00000,99999),
        ];
    }
}
