<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            PersonSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
            EntrySeeder::class,
            DetailEntrySeeder::class,
            SaleSeeder::class,
            DetailSaleSeeder::class,
        ]);
        
        // User::factory(10)->create();
        //$this->call(UserSeeder::class);

        User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
//
           // 'name' => 'Bruno',
           // 'email' => 'Jhojancoro1@gmail.com',

           
    
        ]);
    }
}
