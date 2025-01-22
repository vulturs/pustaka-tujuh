<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\BukuInduk;
use App\Models\Kelas;
use App\Models\Klasifikasi;
use App\Models\Penerbit;
use App\Models\Perolehan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        User::factory()->create([
            'nama' => 'Administrator',
            'username' => 'admin',
            // 'email' => 'bimabima@gmail.com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'created_at' => now()
        ]);

        Kelas::factory(3)->create();
        Anggota::factory(10)->create();
        Klasifikasi::factory(4)->create();
        Penerbit::factory(5)->create();
        Perolehan::factory(5)->create();
        BukuInduk::factory(10)->create();

        // $petugas = User::create([
        //     'nama' => 'Bima Rizki',
        //     'username' => 'bimabima',
        //     // 'email' => 'bimabima@gmail.com',
        //     'password' => Hash::make('bima'),
        //     'remember_token' => Str::random(10),
        //     'created_at' => now()
        // ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
