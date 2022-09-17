<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2,5)),
            'price' => $this->faker->randomNumber(6),
            'stock' => $this->faker->randomNumber(3),
            'variant' => ('Hot / Ice'),
            'remember_token' => Str::random(10),
        ];
    }
}
