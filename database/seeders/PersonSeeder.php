<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'person_type' => 'Supplier',
            'name' => 'Supplier Company',
            'document_type' => 'RUC',
            'document_number' => '12345678901',
            'address' => 'Supplier Address',
            'phone' => '555-555-5555',
            'email' => 'supplier@example.com',
        ]);

        Person::create([
            'person_type' => 'Client',
            'name' => 'Client Company',
            'document_type' => 'RUC',
            'document_number' => '98765432109',
            'address' => 'Client Address',
            'phone' => '555-555-5556',
            'email' => 'client@example.com',
        ]);

        // Puedes añadir más personas si es necesario
    }
}
