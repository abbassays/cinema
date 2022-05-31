<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'movie_id';


    public function showTimes(){
        return $this->hasMany(MovieShowTime::class);
    }
}
