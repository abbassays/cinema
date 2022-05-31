<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieShowTime extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'movie_show_time_id';
}
