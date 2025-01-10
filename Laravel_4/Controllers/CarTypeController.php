<?php
namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    public function index()
    {
        $carTypes = CarType::all();
        return view('car_types.index', compact('carTypes'));
    }

    public function create()
    {
        return view('car_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        CarType::create($request->all());

        return redirect()->route('car_types.index')->with('success', 'Car type created successfully.');
    }
}
