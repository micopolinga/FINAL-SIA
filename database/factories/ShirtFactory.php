<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shirt>
 */
class ShirtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $n = [
            'Carhart',
            'ChromeHearts',
            'Balenciaga',
            'Nascar',
            'Palm Angel',
            'Kappa'

        ];
        $v = [
            'Vintage',
            'Y2k',
            'Bohemiam'
        ];
        return [
            'name' => fake()->randomElement($n),
            'type' => fake()->randomElement($v),
            'price' => fake()->numberBetween(500,1500)
        ];
    }
}
