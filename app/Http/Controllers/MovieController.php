<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
use App\Models\MovieShowTime;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // this will be used on the home page
    function show()
    {
        $movie_list = Movie::all();
        return view('welcome', ['movies' => $movie_list]);
    }

    // this will be used to return the currently running movies
    function now_showing()
    {
        // only show the movies that have been released
        $movie_list = Movie::query()->where('release_date', '<=', date('Y-m-d'))->get();
        return response()->json([
            'movies' => ($movie_list),
        ]);
    }

    function show_times(Request $request)
    {
        $id = $request->query('movieid');
        $showtimes = MovieShowTime::query()->where('belongs_to', $id)->get();
        return response()->json([
            'showtimes' => $showtimes,
        ]);
    }

    function show_tickets(Request $request)
    {
        $id = $request->query('showtimeid');
        $tickets = Ticket::query()->where('show_time_id', $id)->count();
        return $tickets;
    }
}
