<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CDProduct;
use App\Models\Product;

class CDProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=> Product::factory(),
            'play_length'=>$this->faker->numerify('###')
            
        ];
    }
}
