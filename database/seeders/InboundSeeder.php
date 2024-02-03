<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InboundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        $productsPerMonth = 10;

        for ($month = 1; $month <= 12; $month++) {
            for ($day = 1; $day <= $productsPerMonth; $day++) {
                $product_id = (($day - 1) % 5) + 1;

                $date = now()->startOfMonth()->addMonths($month - 1)->addDays($day - 1);

                DB::table("inbounds")->insert([
                    'product_id' => $product_id,
                    'supplier_id' => $product_id, // Assuming the supplier_id logic is the same as product_id, change if needed
                    'stock' => rand(5, 20),
                    'date' => $date->toDateString(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
