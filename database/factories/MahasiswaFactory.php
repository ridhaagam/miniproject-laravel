<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
 
        return [
            
            'nim' => $this->faker->randomNumber(9),
            'nama_lengkap' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'alamat' => $this->faker->address(),
            'jenis_kelamin' => $this->faker->randomElement(['male', 'female']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'tanggal_lahir' => $this->faker->date(),
            'tempat_lahir' => $this->faker->city(),
            // 'photo' => $this->faker->image('public/storage/images', 640, 480, null, false),
            'matkul_id' => mt_rand(1,10)
        ];
        
    }
}
