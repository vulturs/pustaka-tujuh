<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'nama' => 'Bima Rizki',
                'username' => 'bimabima',
                // 'email' => 'bimabima@gmail.com',
                'password' => Hash::make('bima'),
                'remember_token' => Str::random(10),
                'created_at' => now()
            ]
        );
    }
}
