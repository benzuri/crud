<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $name = $faker->name;
        return [
            'name' => $name,
            'description' => $faker->text(30),
            'image' => 'https://dummyimage.com/300x300&text=' . $name,
        ];
    }
}
