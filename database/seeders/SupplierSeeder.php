<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 35; $i++) {
            DB::table("suppliers")->insert([
                'name' => "Supplier " . $i,
                'address' => "Address " . $i,
                'email' => "supplier" . $i . "@gmail.com",
                'phone' => "0821" . rand(100000000, 999999999),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
