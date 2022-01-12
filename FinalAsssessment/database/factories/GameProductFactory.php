<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GameProduct;
use App\Models\Product;

class GameProductFactory extends Factory
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
            'rating'=>'3'
            //
        ];
    }
}
