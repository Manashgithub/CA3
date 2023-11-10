@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('Donations/' .$Donations->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
  
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Donations->name}}" class="form-control"></br>
        <label>Paid Dates</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$Donations->paid_data}}" class="form-control"></br>
        <label>Number</label></br>
        <input type="text" name="number" id="number" value="{{$Donations->number}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$Donations->amount}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
      
    </form>
   
  </div>
</div>
 
@stop