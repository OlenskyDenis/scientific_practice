<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'name' => $this->faker->name($gender),
            'gender' => $gender,
            'age' => $this->faker->numberBetween(16, 70),
            'experience' => $this->faker->randomFloat(1, 1, 15),
        ];
    }
}
