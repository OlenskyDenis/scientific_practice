<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'caloric_content' => $this->faker->numberBetween(200, 2000),
            'intensity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(150, 1000),
        ];
    }
}
