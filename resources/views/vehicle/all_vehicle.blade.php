
@extends('layout.layout')
@section('title', 'All Vehicles')

@section('content')
  <h1>All vehicles 
    <button class="addBtnVehicle" onclick=" window.location='{{ route('vehicle_form')}}' "> <div class="addIcon">+</div> Add vehicle</button>
    <div class="searchDiv"> search: <input type="text" class="searchBar" placeholder="search vehicle........" onkeyup=""></div>
  </h1>  
  <div class="vehicle-grid">
    @foreach ($vehicles as $vehicle)
      <div class="vehicle-card" onclick=" window.location='{{ route('vehicle_details', $vehicle->id) }}'">
        <img src="{{ asset('images/'. $vehicle->image)}}" alt="{{ $vehicle->vehicleName}}">
         <h2>{{ $vehicle->vehicleName}}</h2>
         <p>price : <span>{{ $vehicle->vehiclePrice}}R₣ </span></p>
         <p>Model : <span>{{ $vehicle->modelNumber}} </span></p>
         <div class="btndev">
         <button class="edit" onclick=" window.location='{{ route('edit_page',$vehicle->id)}}' ">Edit</button>
         <button class="delete" onclick=" window.location='{{ route('delete_vehicle',$vehicle->id)}}' ">Delete</button>
          </div> 
      </div>
      
        
    @endforeach
  </div>
  @endsection