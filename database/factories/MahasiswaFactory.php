<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,   // Menghasilkan nama acak
            'nim' => $this->faker->numerify('########'),  // Menghasilkan angka acak 8 digit sebagai NIM
            'created_at' => now(),  // Mengisi waktu sekarang untuk created_at
            'updated_at' => now(),  // Mengisi waktu sekarang untuk updated_at
        ];
    }
}
