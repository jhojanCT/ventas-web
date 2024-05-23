<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailSale;

class DetailSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailSale::create([
            'sale_id' => 1, // Asegúrate de que esta venta exista
            'article_id' => 1, // Asegúrate de que este artículo exista
            'quantity' => 2,
            'price' => 50.00,
            'discount' => 0.00,
        ]);

        DetailSale::create([
            'sale_id' => 2, // Asegúrate de que esta venta exista
            'article_id' => 2, // Asegúrate de que este artículo exista
            'quantity' => 1,
            'price' => 100.00,
            'discount' => 10.00,
        ]);

        // Puedes añadir más detalles de ventas si es necesario
    }
}
