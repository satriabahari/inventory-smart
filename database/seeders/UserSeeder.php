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
        DB::table("user")->insert([
            'email' => "satria@gmail.com",
            'password' => "satria123",
        ]);

        DB::table("user")->insert([
            'email' => "zidan@gmail.com",
            'password' => "zidan123",
        ]);

        DB::table("user")->insert([
            'email' => "nurman@gmail.com",
            'password' => "nurman123",
        ]);
    }
}
