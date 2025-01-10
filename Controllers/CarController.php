<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('carType')->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $carTypes = CarType::all();
        return view('cars.create', compact('carTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'year' => 'required|digits:4',
            'car_type_id' => 'required|uuid',
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Car created successfully.');
    }
}
