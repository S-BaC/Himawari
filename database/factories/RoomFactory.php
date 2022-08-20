<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "R" . fake()->numerify("###"),
            'beds' => fake()->numberBetween(1,10),
            'width' => fake() -> randomElement([100,150,200]),
            'length' => fake() -> randomElement([100,150,200]),
            'condition' => fake() -> numberBetween(1,5),
            'is_vacant' => true,
            'staff' => fake() -> numberBetween(1,30)
        ];
    }
}
