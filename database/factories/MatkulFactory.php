<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatkulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode' => $this->faker->numberBetween(1, 3),           
            'matkul' => $this->faker->sentence(3),
            'sks' => $this->faker->numberBetween(1, 3),
            'semester' => $this->faker->numberBetween(1, 8),
            
        ];

    }
}
