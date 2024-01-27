<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("stock")->insert([
            'name' => "baju",
            'description' => "baju baru",
            'stock' => 1
        ]);

        DB::table("stock")->insert([
            'name' => "celana",
            'description' => "celana baru",
            'stock' => 2
        ]);

        DB::table("stock")->insert([
            'name' => "sepatu",
            'description' => "sepatu baru",
            'stock' => 3
        ]);
    }
}
