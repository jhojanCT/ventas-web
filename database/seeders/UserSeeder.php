<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'Admin User',
            'document_type' => 'DNI',
            'document_number' => '12345678',
            'address' => '123 Admin St.',
            'phone' => '555-555-5555',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Regular User',
            'document_type' => 'DNI',
            'document_number' => '87654321',
            'address' => '456 User Ave.',
            'phone' => '555-555-5556',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'status' => 'active',
        ]);

        // Puedes añadir más usuarios si es necesario
    }
}
