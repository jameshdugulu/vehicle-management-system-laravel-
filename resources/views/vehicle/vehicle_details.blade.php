@extends('layout.layout')
@section('title', 'Vehicle Details')
@section('content')
  <h1>Vehicle Details</h1>
  <div class="vehicle-details">
    <img src="{{ asset('images/'. $vehicle->image)}}" alt="{{ $vehicle->vehicleName}}">
    <h2>{{ $vehicle->vehicleName}}</h2>
    <p>Price: <span>{{ $vehicle->vehiclePrice}} R₣</span></p>
    <p>Model: <span>{{ $vehicle->modelNumber}}</span></p>
    <p>Description: <span>{{ $vehicle->description}}</span></p>
    <div class="btndev">
      <button class="edit" onclick=" window.location='{{ route('edit_page', $vehicle->id) }}' ">Edit</button>
      <button class="delete" onclick=" window.location='{{ route('delete_vehicle', $vehicle->id) }}' ">Delete</button>
    </div>
  </div>


@endsection