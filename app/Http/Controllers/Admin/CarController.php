<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Models\Car;
use App\Models\CarClass;
use App\Models\Simulator;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carClasses = CarClass::all();
        $simulators = Simulator::all();
        return view('admin.cars.create', compact('carClasses', 'simulators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarStoreRequest $request)
    {
        Car::create([
            'name' => $request->name,
            'simulator' => $request->simulator,
            'class' => $request->class
        ]);

        return to_route('admin.cars.index')->with('success', 'Car created successfully.');
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
    public function edit(Car $car)
    {
        $carClasses = CarClass::all();
        $simulators = Simulator::all();
        return view('admin.cars.edit', compact('car', 'carClasses','simulators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required',
            'simulator' => 'required',
            'class' => 'required'
        ]);

        $car->update([
           'name' => $request->name,
           'simulator' => $request->simulator,
           'class' => $request->class
        ]);

        return to_route('admin.cars.index')->with('success', 'Car edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return to_route('admin.cars.index')->with('success', 'Car deleted successfully.');
    }
}
