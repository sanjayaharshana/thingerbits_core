@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection

<style>
.grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>

<head>
<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

</head>

@section('content')



<form method="POST" action="{{ route('adleson') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Lesson Name</label>
    <input type="text" class="form-control" placeholder="Title" name="lesson_title" value="" >
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Lesson Type</label>
      <select class="form-control" id="select_type" name="lestype">
          <option value="1">Video Content</option>
          <option value="2">Documenet Content</option>
          <option value="0">Files</option>
      </select>
  </div>
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Lesson Body</label>
      <textarea class="form-control" id="tinymce" rows="3" name="lesson_body" ></textarea>
  </div>
  <input type="text" class="form-control" placeholder="Title" name="user_id" style="display:none;" value="1">
  <input type="text" class="form-control" placeholder="Title" name="l_order" style="display:none;" value="1">
  <input type="text" class="form-control" placeholder="Title" name="is_ok" style="display:none;" value="1">

  
 

  <input type="text" class="form-control" placeholder="Title" name="apple" style="display:none;" value="{{ $course_id }}">




  <button type="submit" class="btn btn-primary">Save</button>
</form>

<script>
$(function() {
  $('#select_type').change(function(){
    $('.colors').hide();
    //$('#' + $(this).val()).show();
    console.log('apple');
  });
});
</script>

<script>
 CKEDITOR.replace( 'lesson_body' );
</script>



@endsection