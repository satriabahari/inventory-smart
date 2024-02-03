<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data untuk kategori baju
        for($i = 0; $i < 10; $i++) {
            DB::table("products")->insert([
                'name' => "Baju Model " . ($i + 1),
                'description' => "Deskripsi baju model " . ($i + 1),
                'category_id' => 1,
                'price' => 120000 + ($i * 20000),
                'stock' => rand(1, 15) + $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Data untuk kategori celana
        for($i = 0; $i < 10; $i++) {
            DB::table("products")->insert([
                'name' => "Celana Model " . ($i + 1),
                'description' => "Deskripsi celana model " . ($i + 1),
                'category_id' => 2,
                'price' => 280000 + ($i * 30000),
                'stock' => rand(1, 15) + $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Data untuk kategori sepatu
        for($i = 0; $i < 10; $i++) {
            DB::table("products")->insert([
                'name' => "Sepatu Model " . ($i + 1),
                'description' => "Deskripsi sepatu model " . ($i + 1),
                'category_id' => 3,
                'price' => 320000 + ($i * 40000),
                'stock' => rand(1, 15) + $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Data untuk kategori topi
        for($i = 0; $i < 10; $i++) {
            DB::table("products")->insert([
                'name' => "Topi Model " . ($i + 1),
                'description' => "Deskripsi topi model " . ($i + 1),
                'category_id' => 4,
                'price' => 40000 + ($i * 10000),
                'stock' => rand(1, 15) + $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
