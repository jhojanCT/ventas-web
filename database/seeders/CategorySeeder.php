<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Category for electronic devices',
            'status' => 'active',
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Category for clothing items',
            'status' => 'active',
        ]);

        // Puedes añadir más categorías si es necesario
    }
}
