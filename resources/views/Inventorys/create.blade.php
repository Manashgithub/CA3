@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Inventory Info</div>
  <div class="card-body">
      
      <form action="{{ url('Inventorys') }}" method="post">
        {!! csrf_field() !!}
        <label>Product</label></br>
        <input type="text" name="product" id="product" class="form-control"></br>
        <label>Qty</label></br>
        <input type="text" name="qty" id="qty" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" class="form-control"></br>
        <label>Contact Person</label></br>
        <input type="text" name="contactperson" id="contactperson" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contactnumber" id="contactnumber" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop