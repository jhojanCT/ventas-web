<?php

namespace Database\Factories;

use App\Models\DetailSale;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailSaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailSale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sale_id' => \App\Models\Sale::factory()->create()->id, 
            'article_id' => \App\Models\Article::factory()->create()->id, 
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 999),
            'discount' => $this->faker->randomFloat(2, 0, 50), 
        ];
    }
}
