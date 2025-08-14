<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->name();
        return [
            'name' => $name,
            'type' => fake()->randomElement(['dog', 'cat', 'fish', 'bird']),
            'age' => fake()->numberBetween(1, 10),
            'color' => fake()->colorName(),
            'slug' => STR::slug($name),
        ];
    }
}
