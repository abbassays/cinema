<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ticket_id'=> $this->faker->unique()->numberBetween(1,100),
            'payment_method' => $this->faker->randomElement(['Cash on Arrival', 'Card Charge']),
            'price' =>$this->faker->randomElement([600,1000]) ,
            'member_ticket' => $this->faker->boolean(),
        ];
    }
}
