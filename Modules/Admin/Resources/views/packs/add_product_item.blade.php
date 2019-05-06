@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))
<style>
    .grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>
@section('content_header')

<form autocomplete="off" method="POST" action="{{ route('insertadditemr') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="email">Product Name:</label>             
    </div> 
    <input type="number" class="form-control" id="number" name="pack_id" value="{{ $packid }}"><br>
    <input type="number" class="form-control" id="number" name="product_id" value="{{ $productid }}"><br>
    <select id="n1" class="form-control" onChange="" name="product_item_id">
        @foreach ($data as $product)  
            <option value="{{ $product->id }}">{{ $product->slug }}</option>                
        @endforeach           
    </select>
    <br>
    <div class="form-group">
        <label for="email">QTY:</label>
        <input type="number" class="form-control" id="number" name="qty">
      </div> 

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


  



<script>


</script>




@endsection




