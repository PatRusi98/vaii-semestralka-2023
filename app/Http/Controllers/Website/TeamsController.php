<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Teams::paginate(9);
        return view('team.index', compact('teams'));
    }

    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    public function paginationAjax(Request $request)
    {
        if ($request->ajax())
        {
            $teams = Teams::paginate(9);
            return view('team.pagination_data', compact('teams'))->render();
        }
    }
}
