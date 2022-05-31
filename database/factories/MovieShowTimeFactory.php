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
        $currentWeek = date('Y-m-d');
        return [
            'movie_show_time_id'=> $this->faker->unique()->numberBetween(1,100),
            'start_time' => $currentWeek,
            'time' => $this->faker->randomElement(['15:00:00','18:00:00','21:00:00']),
            // 'time' => $this->faker->time(),
            '3d' => $this->faker->boolean(),
        ];
    }
}
