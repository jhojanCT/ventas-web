<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entry;
use Carbon\Carbon;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entry::create([
            'supplier_id' => 1, // Asegúrate de que este proveedor exista
            'user_id' => 1, // Asegúrate de que este usuario exista
            'voucher_type' => 'Receipt',
            'voucher_series' => 'B002',
            'voucher_number' => '00012345',
            'date_time' => Carbon::now(),
            'tax' => 18.00,
            'total' => 100.00,
            'status' => 'completed',
        ]);

        Entry::create([
            'supplier_id' => 2, // Asegúrate de que este proveedor exista
            'user_id' => 1, // Asegúrate de que este usuario exista
            'voucher_type' => 'Invoice',
            'voucher_series' => 'A001',
            'voucher_number' => '00067890',
            'date_time' => Carbon::now(),
            'tax' => 18.00,
            'total' => 200.00,
            'status' => 'pending',
        ]);

        // Puedes añadir más entradas si es necesario
    }
}
