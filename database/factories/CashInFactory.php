<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CashIn>
 */
class CashInFactory extends Factory
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
            'category' => fake()->randomElement(['appointment', 'hospitalization']),
            'amount' => fake()->numberBetween(100,10000)
        ];
    }
}
