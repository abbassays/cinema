<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieShowTime;
use Illuminate\Http\Request;

class SelectTicketsController extends Controller
{
    public function fetchMovieDetails(){
        $movieDetails = Movie::all();
        return response()->json([
            'movieDetails'=>$movieDetails,
        ]);
    }

    public function fetchShowTimeDetails(){
        $showTimeDetails = MovieShowTime::all();
        return response()->json([
            'showTimeDetails'=>$showTimeDetails,
        ]);
    }
}
