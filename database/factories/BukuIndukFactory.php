<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BukuInduk>
 */
class BukuIndukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_ddc' => fake()->numberBetween(100, 800),
            'tahun' => fake()->year(),
            'bahasa' => "Indonesia",
            'kategori' => fake()->word(2),
            'jml_eks' => fake()->randomNumber(2),
            'jml_jld' => fake()->randomNumber(2),
            'id_perolehan' => fake()->randomNumber(2),
            'harga' => fake()->numberBetween(5000, 50000)
        ];
    }
}
