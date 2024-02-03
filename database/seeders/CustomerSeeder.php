<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table("customers")->insert([
                'name' => "Customer " . $i,
                'address' => "Address " . $i,
                'email' => "customer" . $i . "@gmail.com",
                'phone' => "0812" . rand(100000000, 999999999),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
