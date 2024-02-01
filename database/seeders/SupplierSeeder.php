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
        for($i = 0; $i < 5; $i++) {

            DB::table("suppliers")->insert([
                'name' => "satria",
                'address' => "Mendalo Asri",
                'email' => "satria@gmail.com",
                'phone' => "082183340920",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table("suppliers")->insert([
                'name' => "nurman",
                'address' => "Talang Banjar",
                'email' => "nurman@gmail.com",
                'phone' => "082183659273",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            DB::table("suppliers")->insert([
                'name' => "zidan",
                'address' => "Mayang",
                'email' => "zidan@gmail.com",
                'phone' => "082165593696",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
