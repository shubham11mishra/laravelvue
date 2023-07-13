<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => category::factory()->create()->id,
            'name' => $this->faker->sentence(2),
            'price' => rand(1,199)
        ];
    }
}
