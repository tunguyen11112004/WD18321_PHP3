<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_1>
 */
class User_1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => $this->faker->dateTime,
            'password' => Hash::make('123456'), // password
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'remember_token' => str::random(10),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
