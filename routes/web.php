<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehicleController;

Route::get('/', function () {
    return view('vehicle.add_vehicle');
});

Route::get('/vehicle_form', [vehicleController::class, 'vehicle_form'])->name('vehicle_form');

Route::post('/add_vehicle', [vehicleController::class, 'add_vehicle'])->name('add_vehicle');
