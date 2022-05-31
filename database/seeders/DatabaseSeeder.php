<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Ticket;
use App\Models\Seat;
use App\Models\MovieShowTime;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Movie::factory(10)->create();
        Ticket::factory(10)->create();
        Seat::factory(10)->create();
        MovieShowTime::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
