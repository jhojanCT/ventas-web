<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailEntry;

class DetailEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DetailEntry::create([
            'entry_id' => 1,
            'article_id' => 1,
            'quantity' => 5,
            'price' => 10.99,
        ]);

        DetailEntry::create([
            'entry_id' => 2,
            'article_id' => 2,
            'quantity' => 3,
            'price' => 15.99,
        ]);


    }
}
