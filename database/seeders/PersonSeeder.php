<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PersonSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('persons')->insert([
            ['person_type' => 'Supplier', 'name' => 'John Doe', 'document_type' => 'DNI', 'document_number' => '12345678', 'address' => '123 Main St', 'phone' => '555-5555', 'email' => 'john@example.com'],
            ['person_type' => 'Client', 'name' => 'Jane Smith', 'document_type' => 'DNI', 'document_number' => '87654321', 'address' => '456 Secondary St', 'phone' => '555-1234', 'email' => 'jane@example.com'],
        ]);
    }
}

