<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => \App\Models\Person::factory()->create()->id, 
            'user_id' => \App\Models\User::factory()->create()->id, 
            'voucher_type' => $this->faker->randomElement(['invoice', 'receipt']),
            'voucher_series' => $this->faker->optional()->lexify('???-???'),
            'voucher_number' => $this->faker->numerify('##########'),
            'date_time' => $this->faker->dateTime(),
            'tax' => $this->faker->randomFloat(2, 0, 99),
            'total' => $this->faker->randomFloat(2, 0, 9999),
            'status' => $this->faker->randomElement(['paid', 'pending', 'cancelled']),
        ];
    }
}
