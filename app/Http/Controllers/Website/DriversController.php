<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index()
    {
        $drivers = Driver::paginate(9);
        return view('driver.index', compact('drivers'));
    }

    public function show(Driver $driver)
    {
        return view('driver.show', compact('driver'));
    }

    public function paginationAjax(Request $request)
    {
        if ($request->ajax())
        {
            $drivers = Driver::paginate(9);
            return view('driver.pagination_data', compact('drivers'))->render();
        }
    }
}
