<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->words(1, true),
            "singer" => $this->faker->name(),
            "length" => $this->faker->numberBetween(0, 1000),
        ];
    }
}
