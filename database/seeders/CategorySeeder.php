<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            'name' => "baju",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("categories")->insert([
            'name' => "celana",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("categories")->insert([
            'name' => "sepatu",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table("categories")->insert([
            'name' => "topi",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
