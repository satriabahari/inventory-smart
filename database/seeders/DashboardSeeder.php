<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10; $i++) {
            DB::table("dashboard")->insert([
                'name' => "Satria $i",
                'email' => "satria".$i."@gmail.com",
                'gender' => "laki-laki",
                'des' => "Ini berisi deskripsi satria dengan nomor ke-".$i
            ]);

            DB::table("dashboard")->insert([
                'name' => "Zidan $i",
                'email' => "zidan".$i."@gmail.com",
                'gender' => "laki-laki",
                'des' => "Ini berisi deskripsi zidan dengan nomor ke-".$i
            ]);

            DB::table("dashboard")->insert([
                'name' => "Nurman $i",
                'email' => "nurman".$i."@gmail.com",
                'gender' => "laki-laki",
                'des' => "Ini berisi deskripsi nurman dengan nomor ke-".$i
            ]);
        }
    }
}
