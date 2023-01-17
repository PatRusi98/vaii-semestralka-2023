<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Championship;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    public function index()
    {
        $championships = Championship::all();
        return view('car.index', compact('championships'));
    }
}
