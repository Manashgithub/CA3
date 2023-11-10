@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Found Person Info</div>
  <div class="card-body">
      
      <form action="{{ url('Founds') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Contact Person</label></br>
        <input type="text" name="contactperson" id="contactperson" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop