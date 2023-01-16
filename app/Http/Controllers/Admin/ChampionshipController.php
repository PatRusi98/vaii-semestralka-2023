<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChampionsipStoreRequest;
use App\Models\CarClass;
use App\Models\Championship;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $championships = Championship::all();
        return view('admin.championships.index', compact('championships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carClasses = CarClass::all();
        return view('admin.championships.create', compact('carClasses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChampionsipStoreRequest $request)
    {
        if ($request->class2 == $request->class1 ||
            $request->class3 == $request->class1 ||
            $request->class3 == $request->class2)
        {
            return back()->with('warning', 'Please choose different classes.');
        }

        if (($request->class2.isNonEmptyString() && $request->class1.isEmptyOrNullString()) ||
            ($request->class3.isNonEmptyString() && $request->class2.isEmptyOrNullString()) ||
            ($request->class3.isNonEmptyString() && $request->class1.isEmptyOrNullString()))
        {
            return back()->with('warning', 'Please choose classes in right order.');
        }

        Championship::create([
            'name' => $request->name,
            'active' => $request->active,
            'multiclass' => $request->multiclass,
            'class1' => $request->class1,
            'class2' => $request->class2,
            'class3' => $request->class3
        ]);

        return to_route('admin.championships.index')->with('success', 'Championship created successfully.');
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
    public function edit(Championship $championship)
    {
        $carClasses = CarClass::all();
        return view('admin.championships.edit', compact('championship', 'carClasses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Championship $championship)
    {
        if ($request->class2 == $request->class1 ||
            $request->class3 == $request->class1 ||
            $request->class3 == $request->class2)
        {
            return back()->with('warning', 'Please choose different classes.');
        }

        if (($request->class2.isNonEmptyString() && $request->class1.isEmptyOrNullString()) ||
            ($request->class3.isNonEmptyString() && $request->class2.isEmptyOrNullString()) ||
            ($request->class3.isNonEmptyString() && $request->class1.isEmptyOrNullString()))
        {
            return back()->with('warning', 'Please choose classes in right order.');
        }

        $request->validate([
            'name' => 'required',
            'active' => 'required',
            'multiclass' => 'required',
            'class1' => 'required'
        ]);

        $championship->update([
            'name' => $request->name,
            'active' => $request->active,
            'multiclass' => $request->multiclass,
            'class1' => $request->class1,
            'class2' => $request->class2,
            'class3' => $request->class3
        ]);

        return to_route('admin.championships.index')->with('success', 'Championship edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Championship $championship)
    {
        $championship->delete();
        return to_route('admin.championships.index')->with('success', 'Championship deleted successfully.');
    }
}
