<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetailEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_entries')->insert([
            ['entry_id' => 1, 'article_id' => 1, 'quantity' => 5, 'price' => 1500.00],
            ['entry_id' => 2, 'article_id' => 2, 'quantity' => 10, 'price' => 100.00],
        ]);
    }
}
