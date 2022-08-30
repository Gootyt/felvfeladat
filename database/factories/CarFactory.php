<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->sentence(),
            'type' => $this->faker->sentence(),
            'price' => $this->faker->randomDigit(),
            'active' => $this->faker->boolean(),
            'fuel' => $this->faker->sentence(),
            'seat' => $this->faker->randomDigit()
        ];
    }
}
