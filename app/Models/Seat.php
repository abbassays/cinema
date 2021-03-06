<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'seat_id';

    public function ticketForSeat(){
        return $this->hasMany(Ticket::class);
    }
}
