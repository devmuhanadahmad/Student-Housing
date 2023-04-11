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
    public function definition(): array
    {
        return [
            'name' =>  $this->faker->word(),
            'notes' => $this->faker->word(5),
            'price' => $this->faker->numberBetween(20,80),
            'space' => $this->faker->numberBetween(20,80),
            'image' => $this->faker->imageUrl(600, 400),

        ];
    }
}
