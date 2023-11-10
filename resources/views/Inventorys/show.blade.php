@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Lost Person Info</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Product : {{ $Inventorys->product }}</h5>
        <p class="card-text">Qty : {{ $Inventorys->qty }}</p>
        <p class="card-text">Category : {{ $Inventorys->category }}</p>
        <p class="card-text">Contact Person : {{ $Inventorys->contactperson }}</p>
        <p class="card-text">Contact Number : {{ $Inventorys->contactnumber }}</p>
</div>
       
    </hr>
  
  </div>
</div>
@endsection