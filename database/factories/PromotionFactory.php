<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $price_var;

    public function definition(): array
    {
        return [
            'name'      =>  $this->faker->word(),
            'code'      =>  $this->faker->numberBetween(100000,999999),
            'price'     =>  $this->price_(),
            'discounted_price'=>  $this->discounted(),
            'status'    =>  1,
            'catalog_id'=>  $this->faker->numberBetween(1,3),    
        ];
    }

    public function price_()
    {   
        return $this->price_var = $this->faker->numberBetween(100000,999999);
    }

    public function discounted():int
    {
        return ($this->price_var * (1 - $this->faker->randomFloat(2,0.15,0.35)));
    }
}
