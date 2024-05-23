<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => \App\Models\Role::factory(), 
            'name' => $this->faker->name,
            'document_type' => $this->faker->randomElement(['passport', 'national_id', 'driver_license']),
            'document_number' => $this->faker->unique()->numerify('##########'),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), 
            'status' => 'active', 
        ];
    }
}
