@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
<h3>Create Course</h3>
@endsection

<style>
.grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>

@section('content')

<form method="POST" action="{{ route('insertcourse') }}">
    {{ csrf_field() }}    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Title</label>
        <input type="text" class="form-control" placeholder="Title" name="course_title" style="" value="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Slugg</label>
        <input type="text" class="form-control" placeholder="Title" name="slg" style="" value="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Image</label>
        <input type="text" class="form-control" placeholder="Title" name="course_img" style=";" value="">   
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Intro</label>
        <input type="text" class="form-control" placeholder="Title" name="course_intros" style="" value="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Course Decription</label>
        <input type="text" class="form-control" placeholder="Title" name="cours_discrip" style="" value="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Recommand Products</label>
        <input type="text" class="form-control" placeholder="Title" name="rcmmand" style="" value="">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

@endsection