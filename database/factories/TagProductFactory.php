<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TagProduct>
 */
class TagProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_id'    =>  $this->faker->numberBetween(1,10),
            'product_id'  =>  $this->faker->numberBetween(1,33),
        ];
    }
}
