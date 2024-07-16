<?php

namespace Database\Factories;

use App\Models\Kelas;
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
            'kelas_id' => Kelas::factory(),
            'tanggal_masuk' => now(),
            'keterangan' => fake()->sentence(15),
        ];
    }
}
