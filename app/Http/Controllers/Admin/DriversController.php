<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Driver;
use App\Http\Requests\DriverStoreRequest;
use App\Models\Teams;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::paginate(10);
        return view('admin.drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $teams = Teams::all();
        return view('admin.drivers.create', compact('countries', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DriverStoreRequest $request)
    {
        Driver::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'steam_id' => $request->steam_id,
            'nationality' => $request->nationality,
            'team' => $request->team
        ]);

        return to_route('admin.drivers.index')->with('success', 'Driver created successfully.');
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
    public function edit(Driver $driver)
    {
        $countries = Country::all();
        $teams = Teams::all();
        return view('admin.drivers.edit', compact('driver', 'countries', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'steam_id' => 'required',
            'nationality' => 'required',
            'team' => 'required'
        ]);

        $driver->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'steam_id' => $request->steam_id,
            'nationality' => $request->nationality,
            'team' => $request->team
        ]);

        return to_route('admin.drivers.index')->with('success', 'Driver edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return to_route('admin.drivers.index')->with('success', 'Driver deleted successfully.');
    }

    public function paginationAjax(Request $request)
    {
        if ($request->ajax())
        {
            $drivers = Driver::paginate(10);
            return view('admin.drivers.pagination_data', compact('drivers'))->render();
        }
    }
}
