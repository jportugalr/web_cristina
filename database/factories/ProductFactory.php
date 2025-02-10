<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'          =>  $this->faker->unique()->word(),
            'code'          =>  $this->faker->randomNumber(6,false),
            'detail'        =>  $this->faker->paragraph(),
            'description'   =>  $this->faker->sentence(),
            'price'         =>  $this->faker->numberBetween(222,5699),
            'status'        =>  1,
            'category_id'   =>  $this->faker->numberBetween(1,4),
        ];
    }
}
