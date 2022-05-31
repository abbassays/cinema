<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MovieShowTime>
 */
class MovieShowTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'movie_show_time_id'=> $this->faker->unique()->numberBetween(1,100),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            '3d' => $this->faker->boolean(),
        ];
    }
}
