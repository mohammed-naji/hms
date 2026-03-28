<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankAccount>
 */
class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial' => fake()->numberBetween(000000, 999999),
            'type' => fake()->randomElement(['saving', 'current', 'merchant']),
            'amount' => 0,
            'user_id' => fake()->unique()->randomElement(range(1, 10)),

        ];
    }
}
