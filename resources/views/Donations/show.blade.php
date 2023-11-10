@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Lost Person Info</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $Donations->name }}</h5>
        <p class="card-text">Paid_Date: {{ $Donations->paid_date }}</p>
        <p class="card-text">Number : {{ $Donations->number }}</p>
        <p class="card-text">Amount: {{ $Donations->amount }}</p>
       
</div>
       
    </hr>
  
  </div>
</div>
@endsection