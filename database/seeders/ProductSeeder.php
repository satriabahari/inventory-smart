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
        for($i = 0; $i < 5; $i++) {
            DB::table("products")->insert([
                'name' => "baju",
                'description' => "baju baru",
                'category_id' => 1,
                'price' => 100000,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table("products")->insert([
                'name' => "celana",
                'description' => "celana baru",
                'category_id' => 2,
                'price' => 300000,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table("products")->insert([
                'name' => "sepatu",
                'description' => "sepatu baru",
                'category_id' => 3,
                'price' => 350000,
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table("products")->insert([
                'name' => "topi",
                'description' => "topi baru",
                'category_id' => 4,
                'price' => 50000,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } 
    }
}
