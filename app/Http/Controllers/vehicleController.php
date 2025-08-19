<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\vehicle;
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
       $validated_data = $request->validate([
            'vehicleName' => 'required|string',
            'vehiclePrice' => 'required|integer',
            'modelNumber' => 'required|string',
            'image' => 'nullable',
        ]);

         if($request->hasFile('image')){
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(
                public_path('images'),
            $imageName
            );

            $validated_data['image']= $imageName;
        }

        $vehicleName = $validated_data['vehicleName'];

        vehicle::create($validated_data);

        // Save vehicle data logic here

        return redirect()->route('vehicle_form')->with('message', `Vehicle added successfully! $vehicleName`); 
    }

     public function vehicle_list(){
        $vehicles = vehicle::all();
        return view('vehicle.all_vehicle', ['vehicles' => $vehicles ]);
    }

    public function delete_vehicle($id){
        $vehicle = vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect()->route('vehicle_list')->with('message', 'Vehicle deleted successfully!');
    }

    public function edit_page($id){
        $vehicle = vehicle::find($id);
        return view('vehicle.edit_vehicle', ['vehicle' => $vehicle ]);
    }
    
    public function update_vehicle(Request $request, $id){
        $vehicle = vehicle::findOrFail($id);

        $validated_data = $request->validate([
            'vehicleName' => 'required|string',
            'vehiclePrice' => 'required|decimal:0,2',
            'modelNumber' => 'required|string',
            'image' => 'nullable',
        ]);

        if($request->hasFile('image')){
            $imageName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(
                public_path('images'),
                $imageName
            );

            $validated_data['image'] = $imageName;
        }

        $vehicle->update($validated_data);

        return redirect()->route('vehicle_list')->with('message', 'Vehicle updated successfully!');
    }

    public function vehicle_details($id){
        $vehicle = vehicle::findOrFail($id);
        return view('vehicle.vehicle_details', ['vehicle' => $vehicle ]);
    }

}
