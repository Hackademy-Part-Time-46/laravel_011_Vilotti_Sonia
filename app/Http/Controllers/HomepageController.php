<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $cars = Car::all();
        return view('homepage', compact('cars'));
    }
    public function detail(Car $car)
    {
        return view('detail', compact('car'));
    }
}
