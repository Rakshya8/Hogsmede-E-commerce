<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GameProduct;
use App\Models\Product;

class BookProductFactory extends Factory
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
            'pages'=>$this->faker->numerify('###')
        ];
    }
}
