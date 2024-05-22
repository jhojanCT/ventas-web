<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            ['client_id' => 2, 'user_id' => 2, 'voucher_type' => 'Receipt', 'voucher_series' => '002', 'voucher_number' => '0001', 'date_time' => now(), 'tax' => 18.00, 'total' => 1700.00, 'status' => 'Completed'],
            ['client_id' => 2, 'user_id' => 2, 'voucher_type' => 'Receipt', 'voucher_series' => '002', 'voucher_number' => '0002', 'date_time' => now(), 'tax' => 18.00, 'total' => 800.00, 'status' => 'Completed'],
        ]);
    }
}
