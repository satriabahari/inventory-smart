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
                'cattegory' => "baju",
                'price' => 100000,
                'stock' => 10
            ]);
            DB::table("products")->insert([
                'name' => "celana",
                'description' => "celana baru",
                'cattegory' => "celana",
                'price' => 300000,
                'stock' => 20
            ]);
            DB::table("products")->insert([
                'name' => "sepatu",
                'description' => "sepatu baru",
                'cattegory' => "sepatu",
                'price' => 350000,
                'stock' => 25
            ]);
            DB::table("products")->insert([
                'name' => "topi",
                'description' => "topi baru",
                'cattegory' => "topi",
                'price' => 50000,
                'stock' => 15
            ]);
        } 
    }
}
