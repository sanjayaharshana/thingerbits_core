@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection

<style>
.grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>

@section('content')



<div class="row">
        <div class="" style="padding-right: 70px;">
           
@foreach ($data as $value)
<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="dashboard-panel" style="height: 300px;"><br>
               <h4>{{ $value->course_title }}</h4><br>
               <div class="" style="background-image:url('admin/courseuser_image/{{ $value->course_id }}');background-size: cover; height:100px; background-position:center;">
               </div>
              
               <br><br>
               <a href="admin/lessonpanel/{{ $value->course_id }}" class="btn btn-default">Edit Course</a>
               
               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal{{ $value->course_id }}"><i class="fa fa-trash"></i></button>
               <br><br>
        </div>
</div>
<div class="modal fade" id="myModal{{ $value->course_id }}" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"> Are you sure?</h4>
            </div>
            <div class="modal-body">
              <h3>{{ $value->course_title }}</h3>
              <p>{{ $value->course_intro }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="admin/deletecourse/{{ $value->course_id }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
          
        </div>
</div>
      
@endforeach

<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="dashboard-panel" style="border: #898989;background: #f1f3f7;box-shadow: none;border-style: dashed;
        border-color: #9e9e9e;
        text-align: center;"><br>
               <h4 style="color: #9e9e9e;">Add Course</h4><br>
               <a href="admin/createcourse">
                <i class="fa fa-plus" style="font-size: 60px; color:#9e9e9e;"></i><br><br>
                </a>
        </div>
</div> 
</div> 
</div>

@endsection

