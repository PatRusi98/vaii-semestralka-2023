<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(9);
        return view('car.index', compact('cars'));
    }

    public function paginationAjax(Request $request)
    {
        if ($request->ajax())
        {
            $cars = Car::paginate(9);
            return view('car.pagination_data', compact('cars'))->render();
        }
    }
}
