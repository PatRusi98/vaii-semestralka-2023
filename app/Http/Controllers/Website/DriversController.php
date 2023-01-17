<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('driver.index', compact('drivers'));
    }

    public function show()
    {
        $driver = Driver::all();
        return view('driver.show', compact('driver'));
    }
}
