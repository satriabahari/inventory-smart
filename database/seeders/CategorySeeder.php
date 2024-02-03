<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'baju', 
            'celana', 
            'sepatu', 
            'topi', 
            'jaket',
            'dress',
            'kaos',
            'rok',
            'sandal',
            'sweater',
            'jeans',
            'kemeja',
            'tas',
            'jam tangan',
            'legging',
            'blazer',
            'setelan',
            'piyama',
            'cardigan',
            'bikini',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name'       => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
