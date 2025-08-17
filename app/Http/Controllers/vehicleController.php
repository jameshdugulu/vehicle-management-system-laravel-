<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    //
     public function vehicle_form(){
        return view('vehicle.add_vehicle');
    }
    public function add_vehicle(Request $request){
        // Handle the form submission logic here
        // For example, you can validate the request and save the vehicle data to the database

        // Example validation
        $request->validate([
            'vehicleName' => 'required|string',
            'vehiclePrice' => 'required|integer',
            'modelNumber' => 'required|string',
            'image' => 'nullable',
        ]);

        $vehicleName = $request->input('vehicleName');

        // Save vehicle data logic here

        return redirect()->route('vehicle_form')->with('message', `Vehicle added successfully! $vehicleName`); 
    }


}
