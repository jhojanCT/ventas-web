<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entries')->insert([
            ['supplier_id' => 1, 'user_id' => 1, 'voucher_type' => 'Invoice', 'voucher_series' => '001', 'voucher_number' => '0001', 'date_time' => now(), 'tax' => 18.00, 'total' => 1500.00, 'status' => 'Completed'],
            ['supplier_id' => 1, 'user_id' => 1, 'voucher_type' => 'Invoice', 'voucher_series' => '001', 'voucher_number' => '0002', 'date_time' => now(), 'tax' => 18.00, 'total' => 1000.00, 'status' => 'Completed'],
        ]);
    }
}
