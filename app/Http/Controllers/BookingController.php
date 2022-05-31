<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Booking;
 
 
class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
          'movie_title' => 'required',
          'date' => 'required',
          'time' => 'required',
          'n_tickets' => 'required'
        ]);
 
        $save = new Booking;
 
        $save->movie_title = $request->movie_title;
        $save->date = $request->date;
        $save->time = $request->time;
        $save->n_tickets = $request->n_tickets;
 
        $save ->save();
 
        return redirect('form')->with('status', 'Your ticket has been booked!!');
 
    }
}