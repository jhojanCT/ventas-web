<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('users')->insert([
                ['role_id' => 1, 'name' => 'Admin User', 'document_type' => 'DNI', 'document_number' => '12345678', 'address' => '123 Admin St', 'phone' => '555-5555', 'email' => 'admin@example.com', 'password' => Hash::make('password'), 'status' => true],
                ['role_id' => 2, 'name' => 'Regular User', 'document_type' => 'DNI', 'document_number' => '87654321', 'address' => '456 User St', 'phone' => '555-1234', 'email' => 'user@example.com', 'password' => Hash::make('password'), 'status' => true],
            ]);
        
    }
}
