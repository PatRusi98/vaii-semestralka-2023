<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PointSystemStoreRequest;
use App\Models\PointSystem;
use Illuminate\Http\Request;

class PointSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pointSystems = PointSystem::all();
        return view('admin.point-systems.index', compact('pointSystems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.point-systems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PointSystemStoreRequest $request)
    {
        PointSystem::create([
            'name' => $request->name,
            'pole_position' => $request->pole_position,
            'fastest_lap' => $request->fastest_lap,
            'first' => $request->first,
            'second' => $request->second,
            'third' => $request->third,
            'fourth' => $request->fourth,
            'fifth' => $request->fifth,
            'sixth' => $request->sixth,
            'seventh' => $request->seventh,
            'eighth' => $request->eighth,
            'ninth' => $request->ninth,
            'tenth' => $request->tenth,
            'eleventh' => $request->eleventh,
            'twelvth' => $request->twelvth,
            'thirteenth' => $request->thirteenth,
            'fourteenth' => $request->fourteenth,
            'fifteenth' => $request->fifteenth,
            'leader_distance' => $request->leader_distance
        ]);

        return to_route('admin.point-systems.index')->with('success', 'Point system created successfully.');
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
    public function edit(PointSystem $pointSystem)
    {
        return view('admin.point-systems.edit', compact('pointSystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PointSystemStoreRequest $request, PointSystem $pointSystem)
    {
        $request->validate([
            'name' => 'required',
            'pole_position' => 'required',
            'fastest_lap' => 'required',
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'fourth' => 'required',
            'fifth' => 'required',
            'sixth' => 'required',
            'seventh' => 'required',
            'eighth' => 'required',
            'ninth' => 'required',
            'tenth' => 'required',
            'eleventh' => 'required',
            'twelvth' => 'required',
            'thirteenth' => 'required',
            'fourteenth' => 'required',
            'fifteenth' => 'required',
            'leader_distance' => 'required',
        ]);

        $pointSystem->update([
            'name' => $request->name,
            'pole_position' => $request->pole_position,
            'fastest_lap' => $request->fastest_lap,
            'first' => $request->first,
            'second' => $request->second,
            'third' => $request->third,
            'fourth' => $request->fourth,
            'fifth' => $request->fifth,
            'sixth' => $request->sixth,
            'seventh' => $request->seventh,
            'eighth' => $request->eighth,
            'ninth' => $request->ninth,
            'tenth' => $request->tenth,
            'eleventh' => $request->eleventh,
            'twelvth' => $request->twelvth,
            'thirteenth' => $request->thirteenth,
            'fourteenth' => $request->fourteenth,
            'fifteenth' => $request->fifteenth,
            'leader_distance' => $request->leader_distance
        ]);

        return to_route('admin.point-systems.index')->with('success', 'Point system edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointSystem $pointSystem)
    {
        $pointSystem->delete();
        return to_route('admin.point-systems.index')->with('success', 'Point system deleted successfully.');
    }
}
