<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'simulator', 'class'];

    public function carClasses()
    {
        return $this->hasOne(CarClass::class, 'cars_car_class');
    }

    public function simulators()
    {
        return $this->hasOne(Simulator::class, 'cars_simulator');
    }
}
