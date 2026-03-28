<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4, true),
            'image' => fake()->imageUrl(),
            'instructor' => fake()->name(),
            'price' => fake()->numberBetween(10, 100),
            'sale_price' => fake()->numberBetween(10, 100),
            'hours' => fake()->numberBetween(10, 50),
            'content' => fake()->sentences(5, true),
            'category_id' => fake()->numberBetween(1, 10),
        ];
    }
}
