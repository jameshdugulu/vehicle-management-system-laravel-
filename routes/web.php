<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehicleController;

Route::get('/', function () {
    return view('vehicle.add_vehicle');
});

Route::get('/vehicle_form', [vehicleController::class, 'vehicle_form'])->name('vehicle_form');

Route::post('/add_vehicle', [vehicleController::class, 'add_vehicle'])->name('add_vehicle');

Route::get('/vehicle_list', [vehicleController::class, 'vehicle_list'])->name('vehicle_list');

Route::get('/delete_vehicle/{id}', [vehicleController::class, 'delete_vehicle'])->name('delete_vehicle');

Route::get('/edit_page/{id}', [vehicleController::class, 'edit_page'])->name('edit_page');

Route::post('/update_vehicle/{id}', [vehicleController::class, 'update_vehicle'])->name('update_vehicle');

Route::get('/vehicle_details/{id}', [vehicleController::class, 'vehicle_details'])->name('vehicle_details');

Route::get('/search_vehicle', [vehicleController::class, 'search_vehicle'])->name('search_vehicle');