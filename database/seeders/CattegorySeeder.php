<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CattegorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cattegories")->insert([
            'name' => "baju",
        ]);
        DB::table("cattegories")->insert([
            'name' => "celana",
        ]);
        DB::table("cattegories")->insert([
            'name' => "sepatu",
        ]);
        DB::table("cattegories")->insert([
            'name' => "topi",
        ]);
    }
}
