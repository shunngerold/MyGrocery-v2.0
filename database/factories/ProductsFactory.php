<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->name(),
            'uom' => fake()->name(),
            'category' => fake()->name(),
            'price' => fake()->numberBetween(18, 65),
            'stock' => fake()->numberBetween(18, 65),
            'description' => fake()->paragraph(3),
            'date_in_wh' => fake()->date(),
            'date_expiry' => fake()->date(),
        ];
    }
}
