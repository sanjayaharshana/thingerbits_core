@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))
<style>
    .grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@section('content_header')


    <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );
    </script>

    <div class="row">
        <div class="container" style="width: 1100px;">
            <h3>Purchase Orders</h3></h3><br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New</button><br><br>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th style="font-weight: 500;>Package Name">Purchase Order ID</th>
                        <th style="font-weight: 500;>Package Name">Name</th>
                        <th style="font-weight: 500;>Package Name">Date</th>
                        <th style="font-weight: 500;>Package Name">Status</th>
                        <th style="font-weight: 500;>Package Name">Oparations</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td>dfgdfg</td>
                            <td>dfgdfg</td>
                            <td>dfgdfg</td>
                            <td>dfgdfg</td>
                            <td style="text-align: end;"><a href="admin/editpack/" class="btn btn-primary">Edit</a><span> <a href="admin/packagercreator/" class="btn btn-primary">Edit Items</a><span>  </span><a href="admin/deleteitem/" class="btn btn-danger">Print</a></td>
                        </tr>
                  
                </tbody>
            </table>
        </div>        
    </div>
    
 
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create Purchase Order</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

@endsection




