<?php

namespace Database\Factories;

use App\Models\ScienceProject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Scientist>
 */
class ScientistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(1, 100),
            'science_project_id' => ScienceProject::inRandomOrder()->first()->id,
        ];
    }
}
