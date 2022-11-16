<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SantaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'ward_id' => $this->faker->unique()->numberBetween(1,10),
               
        ];
    }
}
