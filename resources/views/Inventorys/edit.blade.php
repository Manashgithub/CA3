@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('Inventorys/' .$Inventorys->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$Inventorys->id}}" id="id" />

        <label>Product</label></br>
        <input type="text" name="product" id="product" value="{{$Inventorys->product}}" class="form-control"></br>
        <label>Qty</label></br>
        <input type="text" name="qty" id="qty" value="{{$Inventorys->qty}}" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" value="{{$Inventorys->category}}" class="form-control"></br>
        <label>Contact Person</label></br>
        <input type="text" name="contactperson" id="contactperson" value="{{$Inventorys->contactperson}}" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contactnumber" id="contactnumber" value="{{$Inventorys->contactnumber}}" class="form-control"></br>
        <input type="submit" value="Update"  class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop