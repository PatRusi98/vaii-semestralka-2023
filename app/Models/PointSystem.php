<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointSystem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pole_position', 'fastest_lap', 'first', 'second',
        'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth',
        'eleventh', 'twelvth', 'thirteenth', 'fourteenth', 'fifteenth', 'leader_distance'];
}
