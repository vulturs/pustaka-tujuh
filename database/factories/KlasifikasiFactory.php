<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klasifikasi>
 */
class KlasifikasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_ddc' => fake()->numberBetween(000, 800),
            'klasifikasi' => fake()->word(1),
            'keterangan' => fake()->word(30),
            'created_by' => 1
        ];
    }
}
