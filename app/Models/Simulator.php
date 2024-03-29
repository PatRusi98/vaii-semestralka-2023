<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulator extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'cars_simulator');
    }
}
