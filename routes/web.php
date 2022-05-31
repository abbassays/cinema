<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SelectTicketsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing page route
Route::get('/', [MovieController::class , 'store_movies']);

Route::get('fetch-movie', [SelectTicketsController::class , 'fetchMovieDetails']);
Route::post('fetch-movie-showtime', [SelectTicketsController::class , 'fetchShowTimeDetails']);

// About page route
Route::get('/about', function () {
    return view('about');
});


// Booking page route
Route::get('/booking', function () {
    return view('booking');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('booking','booking');
require __DIR__.'/auth.php';
