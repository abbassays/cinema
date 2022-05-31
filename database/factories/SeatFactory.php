<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $seat_no= $this->faker->randomLetter() . strval($this->faker->numberBetween(1,22));

        return [
            'seat_id'=> $this->faker->unique()->numberBetween(1,100),
            'seat_no'=> $this->faker->randomLetter() . strval($this->faker->numberBetween(1,22)),

        ];
    }
}
