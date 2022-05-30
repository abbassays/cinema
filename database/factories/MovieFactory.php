<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;  

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movies>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // creating a dummy movies table
        return [
            'title' => $this->faker->name(),
            'movie_poster' => '/images/',/* image name will go after '/' */
            'description' => $this->faker->paragraph(3),
            'duration_min' => $this->faker->numberBetween(90,180),
            '3d' => $this->faker->boolean(),
            'release_date' => $this->faker->date(),
        ];
    }
}
