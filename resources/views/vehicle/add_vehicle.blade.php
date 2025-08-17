
@extends('layout.layout')
@section('content')
    <div class="VehicleForm">
        <form action="{{ route("add_vehicle")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Add your form fields here -->
            <label for="title" class="tittle">Add vechicle</label>
            <div>
                <label for="vehicleName">Vehicle Name:</label>
                <input type="text" id="vehicleName" name="vehicleName" required>
            </div>

             <div>
                <label for="modelNumber">Model number:</label>
                <input type="text" id="modeleNumber" name="modelNumber" >
             </div>
            
             <div>
                <label for="vehiclePrice">Vehicle Price:</label>
                <input type="number" id="vehiclePrice" name="vehiclePrice" >
             </div>

             <div>
                 <input type="file" id="productImage" name="productImage">
             </div>
           
            <button type="submit">Add Vehicle</button>
        </form>
    </div>

@endsection

