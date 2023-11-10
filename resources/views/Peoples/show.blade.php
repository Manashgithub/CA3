@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Lost Person Info</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Peoples->name }}</h5>
        <p class="card-text">Address : {{ $Peoples->address }}</p>
        <p class="card-text">Mobile : {{ $Peoples->mobile }}</p>
        <p class="card-text">Age : {{ $Peoples->age }}</p>
        <p class="card-text">Contact Person: {{ $Peoples->contactperson }}</p>
</div>
       
    </hr>
  
  </div>
</div>
@endsection