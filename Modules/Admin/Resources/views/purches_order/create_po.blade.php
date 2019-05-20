@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))
<style>
    .grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@section('content_header')
<h2></h2>
<form id="myFrame">
    <div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <input type="text" class="form-control" id="date" aria-describedby="datehelp" placeholder="Enter The date">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Reference No</label>
      <input type="text" class="form-control" id="referenceno" placeholder="Refrence">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Status</label>
        <select class="form-control">
                <option value="Complete">Complete</option>
                <option value="Pending">Pending</option>
                <option value="Quate">Quate</option>>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Supplier</label>
        <input type="text" class="form-control" id="referenceno" placeholder="Supplier">
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Product</button>
    <br><br><br>

    <div style="width: 100%; height: 300px; overflow-y: scroll;">
        <ul class="list-group" id="myList">
            
        </ul>
    </div>

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

            var node = document.createElement("LIL");
            node.setAttribute('class','list-group-item');
            node.setAttribute('id','olian');
            var textnode = document.createTextNode($("#product_id option:selected").text()+$("#qty").text());
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
    
    function fetchRecords(){
       $.ajax({
         url: '{{ url('/') }}/admin/orderdata/getdata/{{ $po_id }}',
         type: 'get',
         dataType: 'json',
         success: function(response){
         var len = 0;

        

         for (i = 0; i < response.length; i++) {
            //removeElement('#olian');
            var node = document.createElement("LIL");
            node.setAttribute('class','list-group-item');
            node.setAttribute('id','olian');
            var textnode = document.createTextNode(response[i].product_name);
            node.appendChild(textnode);
            document.getElementById("myList").appendChild(node);
                    
        }
    }
    
});
     }
</script>
    
@endsection