<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => \App\Models\Category::factory(), 
            'code' => $this->faker->unique()->numerify('######'),
            'name' => $this->faker->word,
            'sale_price' => $this->faker->randomFloat(2, 0, 9999),
            'stock' => $this->faker->numberBetween(0, 1000),
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(), 
            'status' => 'active', 
        ];
    }
}
