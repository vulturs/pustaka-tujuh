<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_anggota' => fake()->name(),
            'kelas' => fake()->word(3),
            'tanggal_masuk' => now(),
            'keterangan' => fake()->sentence(15),
        ];
    }
}
