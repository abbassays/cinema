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
            'movie_id' => $this->faker->unique()->numberBetween(1,100),
            'title' => $this->faker->name(),
            'movie_poster' => '/images/',
            /* image name will go after '/' */
            /* image is stored in image folder by admin by cut paste
                path is stored in 'movie_poster'
                path is displayed */
            'description' => $this->faker->paragraph(5),
            'duration_min' => $this->faker->numberBetween(90, 180),
            'release_date' => $this->faker->date(),
        ];
    }
}
