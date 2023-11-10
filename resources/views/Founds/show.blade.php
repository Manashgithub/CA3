@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Lost Person Info</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Founds->name }}</h5>
        <p class="card-text">Address : {{ $Founds->address }}</p>
        <p class="card-text">Mobile : {{ $Founds->mobile }}</p>
        <p class="card-text">Age : {{ $Founds->age }}</p>
        <p class="card-text">Contact Person: {{ $Founds->contactperson }}</p>
</div>
       
    </hr>
  
  </div>
</div>
@endsection