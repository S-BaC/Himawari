<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(5),
            'details' => fake()->sentence(25),
            'manufacturer' => fake()->company(),
            'average_price' => fake()->numberBetween(100, 500000)
        ];
    }
}
