<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::all();
        return view('team.index', compact('teams'));
    }

    public function show()
    {
        $team = Teams::all();
        return view('team.show', compact('team'));
    }
}
