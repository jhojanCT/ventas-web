<?php

namespace Database\Factories;

use App\Models\DetailEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailEntryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DetailEntry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'entry_id' => \App\Models\Entry::factory()->create()->id,
            'article_id' => \App\Models\Article::factory()->create()->id, 
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 999),
        ];
    }
}
