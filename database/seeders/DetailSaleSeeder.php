<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetailSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_sales')->insert([
            ['sale_id' => 1, 'article_id' => 1, 'quantity' => 1, 'price' => 1500.00, 'discount' => 0.00],
            ['sale_id' => 2, 'article_id' => 2, 'quantity' => 5, 'price' => 100.00, 'discount' => 50.00],
        ]);
    }
}
