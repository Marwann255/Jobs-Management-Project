<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->company(),
            "address" => fake()->address(),
            "logo" => fake()->randomElement(["images/img (1).png", "images/img (2).png", "images/img (3).png"]),
            "phone_number" => fake()->phoneNumber(),
            "opening_date" => fake()->date(),
            "category" => fake()->randomElement(["Programming", "Networking", "business"])
        ];
    }
}