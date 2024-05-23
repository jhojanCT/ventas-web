<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_type' => $this->faker->randomElement(['customer', 'employee', 'vendor']),
            'name' => $this->faker->name,
            'document_type' => $this->faker->randomElement(['passport', 'national_id', 'driver_license']),
            'document_number' => $this->faker->unique()->numerify('##########'),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
