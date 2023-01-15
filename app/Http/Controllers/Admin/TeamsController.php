<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamStoreRequest;
use App\Models\Country;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::all();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.teams.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamStoreRequest $request)
    {
        Teams::create([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'manager' => $request->manager,
            'nationality' => $request->nationality
        ]);

        return to_route('admin.teams.index')->with('success', 'Team created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $team)
    {
        $countries = Country::all();
        return view('admin.teams.edit', compact('team', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teams $team)
    {
        $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'manager' => 'required',
            'nationality' => 'required'
        ]);

        $team->update([
            'name' => $request->name,
            'short_name' => $request->short_name,
            'manager' => $request->manager,
            'nationality' => $request->nationality
        ]);

        return to_route('admin.teams.index')->with('success', 'Team edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $team)
    {
        $team->delete();
        return to_route('admin.teams.index')->with('success', 'Team deleted successfully.');
    }
}
