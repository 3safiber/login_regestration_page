<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => 'Bau@' . fake()->numberBetween(0, 10000),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     */

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'activation' => true,
            'admin' => true,
        ]);
    }
    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'activation' => true,
        ]);
    }
}