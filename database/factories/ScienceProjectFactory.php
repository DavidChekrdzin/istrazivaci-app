<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScienceProject>
 */
class ScienceProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //returns random project name
            'name' => fake()->words(2, true),
            'description' => fake()->paragraphs(1, true),
        ];
    }
}
