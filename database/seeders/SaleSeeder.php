<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use Carbon\Carbon;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'client_id' => 1, // Asegúrate de que este cliente exista
            'user_id' => 1, // Asegúrate de que este usuario exista
            'voucher_type' => 'Invoice',
            'voucher_series' => 'A001',
            'voucher_number' => '00012345',
            'date_time' => Carbon::now(),
            'tax' => 18.00,
            'total' => 100.00,
            'status' => 'completed',
        ]);

        Sale::create([
            'client_id' => 2, // Asegúrate de que este cliente exista
            'user_id' => 1, // Asegúrate de que este usuario exista
            'voucher_type' => 'Receipt',
            'voucher_series' => 'B002',
            'voucher_number' => '00067890',
            'date_time' => Carbon::now(),
            'tax' => 18.00,
            'total' => 200.00,
            'status' => 'pending',
        ]);

        // Puedes añadir más ventas si es necesario
    }
}
