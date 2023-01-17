<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Championship;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    public function index()
    {
        $championships = Championship::paginate(9);
        return view('championship.index', compact('championships'));
    }

    public function paginationAjax(Request $request)
    {
        if ($request->ajax())
        {
            $championships = Championship::paginate(9);
            return view('championship.pagination_data', compact('championships'))->render();
        }
    }
}
