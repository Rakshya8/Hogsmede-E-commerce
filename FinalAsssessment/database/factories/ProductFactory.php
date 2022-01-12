<?php

namespace Database\Factories;

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
            'name' => $this->faker->text(5),
            'image'=>'https://image.shutterstock.com/image-vector/creative-book-cover-design-vintage-260nw-1115305040.jpg',
            'category'=>'book',
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'description'=>$this->faker->paragraph,
            'price'=>$this->faker->randomDigit



            //
        ];
    }
}
