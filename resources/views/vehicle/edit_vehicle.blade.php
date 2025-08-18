
@extends('layout.layout')
@section('content')
    <div class="VehicleForm">
        <form action="{{ route("update_vehicle",$vehicle->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Add your form fields here -->
            <label for="title" class="tittle">Add vechicle</label>
            <div>
                <label for="vehicleName">Vehicle Name:</label>
                <input type="text" id="vehicleName" name="vehicleName" value="{{ $vehicle->vehicleName }}" >
            </div>

             <div>
                <label for="modelNumber">Model number:</label>
                <input type="text" id="modeleNumber" name="modelNumber" value="{{ $vehicle->modelNumber }}" >
             </div>
            
             <div>
                <label for="vehiclePrice">Vehicle Price:</label>
                <input type="number" id="vehiclePrice" name="vehiclePrice" value="{{ $vehicle->vehiclePrice }}" >
             </div>

             <div>
                 <input type="file" id="productImage" name="image" value="{{ $vehicle->image }}" >
             </div>
           
            <button type="submit">Add Vehicle</button>
        </form>
    </div>

@endsection

