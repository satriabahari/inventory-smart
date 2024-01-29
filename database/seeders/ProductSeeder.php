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
        for($i = 0; $i < 3; $i++) {
            DB::table("product")->insert([
                'name' => "baju",
                'description' => "baju baru",
                'stock' => 1
            ]);
    
            DB::table("product")->insert([
                'name' => "celana",
                'description' => "celana baru",
                'stock' => 2
            ]);
    
            DB::table("product")->insert([
                'name' => "sepatu",
                'description' => "sepatu baru",
                'stock' => 3
            ]);
        } 
    }
}
