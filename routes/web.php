<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');
Route::get('detail/{car}', [HomepageController::class, 'detail'])->name('detail');
Route::get('dedicated-area', [CarController::class, 'dedicatedArea'])->middleware('auth')->name('dedicated-area');
Route::get('index', [CarController::class, 'index'])->name('index')->middleware('auth');
Route::get('create', [CarController::class, 'create'])->middleware('auth')->name('create');
Route::post('store', [CarController::class, 'store'])->middleware('auth')->name('store');
Route::get('show/{car}', [CarController::class, 'show'])->middleware('auth')->name('show');
