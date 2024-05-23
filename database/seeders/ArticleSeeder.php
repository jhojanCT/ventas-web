<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'category_id' => 1, // Asegúrate de que esta categoría exista
            'code' => 'ART001',
            'name' => 'Smartphone',
            'sale_price' => 500.00,
            'stock' => 100,
            'description' => 'Smartphone description',
            'image' => 'smartphone.jpg',
            'status' => 'active',
        ]);

        Article::create([
            'category_id' => 2, // Asegúrate de que esta categoría exista
            'code' => 'ART002',
            'name' => 'T-shirt',
            'sale_price' => 20.00,
            'stock' => 200,
            'description' => 'T-shirt description',
            'image' => 'tshirt.jpg',
            'status' => 'active',
        ]);

        // Puedes añadir más artículos si es necesario
    }
}
