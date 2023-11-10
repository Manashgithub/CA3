@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('Founds/' .$Founds->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Founds->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$Founds->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$Founds->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$Founds->mobile}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$Founds->age}}" class="form-control"></br>
        <label>Contact Person</label></br>
        <input type="text" name="contactperson" id="contactperson"  value="{{$Founds->contactperson}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop