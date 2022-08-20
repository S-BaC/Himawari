<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CurrentStock>
 */
class CurrentStockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name'=>fake()->text(5),
            'product_category'=>fake()->randomElement(['pharmaceuticals', 'equipments', 'office_supplies', 'others']),
            'product_details'=>fake()->unique()->numberBetween(1,10),
            'quantities'=>fake()->numberBetween(1,1000),
            'unit'=> 'units',
            'near_expiration'=>fake()->boolean(),


        ];
    }
}
