<?php

namespace Database\Factories;

use App\Models\Klasifikasi;
use App\Models\Penerbit;
use App\Models\Perolehan;
use App\Models\User;
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
        $total = fake()->randomNumber(2);
        return [
            'pengarang' =>  fake()->name(),
            'judul_buku' =>  fake()->word(4),
            'kode_ddc' =>  Klasifikasi::factory(),
            'tahun' => fake()->year(),
            'kota_terbit' => fake()->city(),
            'bahasa' => "Indonesia",
            'id_penerbit' =>  Penerbit::factory(),
            'isbn' => fake()->numberBetween($a = 1001110011011, $b = 1199002199199),
            'jum_hlm' => fake()->randomNumber(3),
            'dimensi' => fake()->randomNumber(2),
            'edisi' => "Pertama",
            'jumlah_total' => $total,
            'satuan' => 'Eksemplar',
            'stok_tersedia' => $total,
            'harga' => fake()->numberBetween(5000, 250000),
            'tipe_harga' => 'Eksemplar',
            'id_perolehan' =>  Perolehan::factory(),
            'ketersediaan' => 'Tersedia',
            'cover' => fake()->image(),
            'created_by' => 1
        ];
    }
}
