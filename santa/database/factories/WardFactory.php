<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WardFactory extends Factory
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
                'santa_id' => $this->faker->unique()->numberBetween(1,10),
            
        ];
    }
}
