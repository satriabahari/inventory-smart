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
        for($i = 0; $i < 5; $i++) {

            DB::table("customers")->insert([
                'name' => "satria",
                'email' => "satria@gmail.com",
                'address' => "Mendalo Asri",
                'phone' => "082183340920",
            ]);
            DB::table("customers")->insert([
                'name' => "nurman",
                'email' => "nurman@gmail.com",
                'address' => "Talang Banjar",
                'phone' => "082183659273",
            ]);
            DB::table("customers")->insert([
                'name' => "zidan",
                'email' => "zidan@gmail.com",
                'address' => "Mayang",
                'phone' => "082165593696",
            ]);
        }
    }
}
