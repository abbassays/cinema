<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function store_movies(){

        $movie_list = Movie::all();
        return view('welcome',['movies'=>$movie_list]);
    }
}
