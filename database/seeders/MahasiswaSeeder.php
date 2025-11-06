<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        $names = [
            'Ghean Anuno',
            'M Diki Fahriza',
            'Aby Abdilla Khas',
            'Ibnu Rizal',
            'Florentia Callista Billa'
        ];

        foreach ($names as $name) {
            Mahasiswa::create([
                'name' => $name,
                'email' => $faker->unique()->safeEmail,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now()
            ]);
        }
    }
}