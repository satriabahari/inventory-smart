<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name' => "satria",
            'email' => "satria@gmail.com",
            'password' => "satria123",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
