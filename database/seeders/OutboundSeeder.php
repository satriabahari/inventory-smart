<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutboundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {

            DB::table("outbounds")->insert([
                'product_id' => 1,
                'customer_id' => 1,
                'stock' => 50,
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table("outbounds")->insert([
                'product_id' => 2,
                'customer_id' => 2,
                'stock' => 75,
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table("outbounds")->insert([
                'product_id' => 3,
                'customer_id' => 3,
                'stock' => 60,
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
