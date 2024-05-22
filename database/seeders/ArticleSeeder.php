<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            ['category_id' => 1, 'code' => 'ELEC123', 'name' => 'Laptop', 'sale_price' => 1500.00, 'stock' => 10, 'description' => 'High performance laptop', 'image' => 'laptop.png', 'status' => true],
            ['category_id' => 2, 'code' => 'FURN123', 'name' => 'Office Chair', 'sale_price' => 200.00, 'stock' => 50, 'description' => 'Ergonomic office chair', 'image' => 'chair.png', 'status' => true],
        ]);
    }
}
