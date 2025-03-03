<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PromotionDetail>
 */
class PromotionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id'    =>  $this->faker->numberBetween(1,50),
            'promotion_id'  =>  $this->faker->numberBetween(1,24),
        ];
    }
}
