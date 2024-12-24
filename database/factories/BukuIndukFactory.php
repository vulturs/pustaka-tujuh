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
            'no_barcode' => fake()->numberBetween($a = 000000, $b = 999999),
            'pengarang' =>  fake()->name(),
            'judul_buku' =>  fake()->word(4),
            'id_klasifikasi' =>  Klasifikasi::factory(),
            'tahun' => fake()->year(),
            'bahasa' => "Indonesia",
            'id_penerbit' =>  Penerbit::factory(),
            'id_perolehan' =>  Perolehan::factory(),
            'jumlah_total' => $total,
            'satuan' => 'Eksemplar',
            'stok_tersedia' => $total,
            'harga' => fake()->numberBetween(5000, 86000),
            'tipe_harga' => 'Eksemplar',
            'ketersediaan' => 'Tersedia',
            'cover' => fake()->image(),
            'created_by' => 1
        ];
    }
}
