@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );
</script>

@section('content_header')

<h2></h2>
<form id="myFrame" action="{{ route('save_po') }}" method="post" onsubmit="return validateForm()">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <div class="ui calendar" id="example2">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input type="text" name="date" placeholder="Date" value="{{ $micro_data->date }}">
        </div>
      </div> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" id="title" aria-describedby="datehelp" placeholder="Enter The Title" value="{{ $micro_data->title }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Reference No</label>
      <input type="text" class="form-control" name="referenceno" id="referenceno" placeholder="Refrence" readonly value="{{ $po_id }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Status: {{ $micro_data->status  }} </label>
        <select class="form-control" name="status">
                <option value="Complete">Complete</option>
                <option value="Pending">Pending</option>
                <option value="Quate">Quate</option>>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Supplier</label>
        <input type="text" class="form-control" name="supplier" id="supplier" placeholder="Supplier">
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Product</button>
    <br><br><br>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th style="font-weight: 500;>Package Name">Product Name</th>
                <th style="font-weight: 500;>Package Name">QTY</th>
                <th style="font-weight: 500;>Package Name">Price</th>
                <th style="font-weight: 500;>Package Name">Opration</th>
            </tr>
        </thead>
        <tbody id="myList">
          <td style="display:none;">

          </td>
        </tbody>
    </table>

   

    <button type="submit" class="btn btn-primary">Make a Purches Order</button> 
    <a href="{{ route('purchase_oder') }}" class="btn btn-primary">Close</a> 

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">          
             <div class="form-group">
                <select class="form-control" id="product_id">
                    @foreach ($data as $Product)
                    <option value="{{ $Product->id }}">{{ $Product->slug }}</option>                   
                    @endforeach
                </select>
             </div>
             <div class="form-group">
                <label for="exampleInputPassword1">QTY</label>
                <input type="text" class="form-control" id="qty">
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id='saveada' data-dismiss="modal">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</form>











<script type="text/javascript">
$('#example2').calendar({
  type: 'date'
});</script>  





  
<script type="text/javascript">  

    var Meta_ID = $("#product_id").val();


    window.onload = function () { 
        fetchRecords();  
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });   

    $("#saveada").click(function(e){ 
        e.preventDefault();
        $.ajax({            
           type:'POST',
           url:'{{ url('/') }}/admin/orderdata',
           data:{po_id:"{{ $po_id }}", product_id:$("#product_id").val(), qty:$("#qty").val()},
           success:function(data){
            var t = document.getElementById("product_id");
            var selectedText = t.options[t.selectedIndex].text;

            var node = document.createElement("tr");
            node.setAttribute('class','');
            node.setAttribute('id',data);
            var apple = $("#qty").val();
            node.innerHTML = '<td>'+ data +'</td> <td>dfs</td> <td>dfs</td> <td>dfs</td>';
            console.log(data);
           

            console.log(apple);

            var textnode = document.createTextNode($("#product_id option:selected").text());
            node.appendChild(textnode);
            document.getElementById("myList").appendChild(node); 
            
           
           // alert(data.success);
           }
        }); 
    });

    function removeElement(elementId) {
    // Removes an element from the document
    var element = document.getElementById(elementId);
    element.parentNode.removeChild(element);
    }

    function myiFunction(elementdata) {
      var token = $("meta[name='csrf-token']").attr("content");
      //var database_var = node.getAttribute("data-attrib");
      console.log(elementdata);
      //console.log('sds');
      $.ajax(
      {
        url: "http://localhost:8000/admin/orderdata/deleteitem/"+elementdata,
        type: 'DELETE',
        data: {
            "id": elementdata,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
            $('#'+ elementdata ).remove();
        }
    });

      
    }
    
    function fetchRecords(){
       $.ajax({
         url: '{{ url('/') }}/admin/orderdata/getdata/{{ $po_id }}',
         type: 'get',
         dataType: 'json',
         success: function(response){
         var len = 0;

        

         for (i = 0; i < response.length; i++) {
            //removeElement('#olian');
            var node = document.createElement("tr");
            
           // node.setAttribute('id',response[i].po_items);
           // node.innerHTML = '<a onclick="myiFunction('+ response[i].po_items  +')" id="removeitem" data-attrib="' + response[i].po_items  + '" class="btn btn-primary btn-sm pull-right" style="padding: 0px 20px;">Remove</a>'+'<div class="pull-right" style="padding: 0px 300px;">'+ response[i].qty + '</div>';
           node.innerHTML = '<td>'+ response[i].product_name +'</td> <td>'+  response[i].qty +'</td> <td>'+ response[i].product_price +'</td>';

            console.log(response[i].product_price);

            document.getElementById("myList").appendChild(node);       
          }
         }   
});
     }
</script>
    
@endsection