<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function dedicatedArea()
    {
        return view('dedicated-area');
    }
    public function index()
    {
        $cars = Car::all();
        return view('index', compact('cars'));
    }
    public function create()
    {

        return view('create');
    }
    public function store(StoreCarRequest $request)
    {
        $path_image = '';
        if (request()->hasFile('path')) {
            $path_image = $request->file('path')->storePublicly('images', 'public');
        }
        Car::create([
            'name' => $request->name,
            'price' => $request->price,
            'path' => $path_image
        ]);
        return to_route('index');
    }
    public function show(Car $car)
    {
        return view('show', compact('car'));
    }
}
