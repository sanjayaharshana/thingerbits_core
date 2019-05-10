@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/css/select2.min.css" rel="stylesheet"/>

<style>
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}
input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

@section('content_header')
<h3>Form</h3><br><br>
<form autocomplete="off" method="POST" action="{{ route('editpacker_save') }}">
    {{ csrf_field() }} 


    <div class="form-group">
      <label for="email">Package Name:</label>
      <input type="text" class="form-control" id="text" name="package_name" value="{{ $packagedit->pack_name }}">
      <input type="text" class="form-control" id="text" style="display:none;" name="pack_id" value="{{ $packid }}">
    </div>

    <div class="form-group">
        <label for="email">Product Name:</label>
        <select id="nameid" class="form-control" name="product_name">
            <option value="{{ $packagedit->product_id }}" selected="selected" hidden="hidden">{{ $normalpc->slug }}</option>
            @foreach ($data as $product)  
                <option value="{{ $product->id }}">{{ $product->slug }}</option>                
            @endforeach           
        </select>  
            
    </div>   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/js/select2.min.js"></script>



@endsection





