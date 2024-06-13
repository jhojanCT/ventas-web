<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use App\Models\Role;
use App\Models\Category;
use App\Models\DetailEntry;
use App\Models\DetailSale;
use App\Models\Entry;
use App\Models\Person;
use App\Models\Sale;
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

       User::factory(10)->create();
       Role::factory(10)->create();
       Category::factory(10)->create();
       Person::factory(10)->create();
       Article::factory(10)->create();
       Entry::factory(10)->create();
       DetailEntry::factory(10)->create();
       Sale::factory(10)->create();
       DetailSale::factory(10)->create();
        
        // User::factory(10)->create();
        //$this->call(UserSeeder::class);

        //User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
//
           // 'name' => 'Bruno',
           // 'email' => 'Jhojancoro1@gmail.com',

           
    
        //]);
    }
}
