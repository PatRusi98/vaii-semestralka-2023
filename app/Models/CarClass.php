<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarClass extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'cars_car_class');
    }
}
