<?php

namespace Database\Seeders;

use App\Models\Matkul;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Mahasiswa::factory(20)->create();
        Matkul::factory(10)->create();        
        // \App\Models\User::factory(10)->create();
    }
}

