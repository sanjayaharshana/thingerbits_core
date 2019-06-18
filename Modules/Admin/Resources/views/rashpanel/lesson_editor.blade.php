@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection

<style>
.grid .single-grid{position:relative;overflow:hidden;height:130px;padding:0 15px;background:#fff;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.grid .single-grid h4{margin:22px 0}.grid .single-grid span{font-size:26px;margin-top:3px}.grid .single-grid i{font-size:36px;position:absolute;left:15px;bottom:22px;margin:0}.grid .single-grid.total-orders i{color:rgba(0,104,225,.7)}.grid .single-grid.total-sales i{color:rgba(112,124,210,.7)}.grid .single-grid.total-customers i{color:rgba(255,51,102,.7)}.grid .single-grid.total-products i{color:rgba(55,188,155,.7)}.dashboard-panel{margin-top:30px;padding:0 15px;background:#fff;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.dashboard-panel .table-responsive{margin-bottom:10px}.grid-header{overflow:auto}.grid-header h4{margin:15px 0;float:left}.grid-header h4 i{margin-right:8px}.sales-analytics{background:#fff;margin-top:30px;padding:0 15px 15px;border-radius:3px;-webkit-box-shadow:0 1px 4px 0 rgba(0,0,0,.1);box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}.sales-analytics .chart{height:282px!important}.anchor-table .table>tbody>tr>td{padding:0}.anchor-table .table>tbody>tr>td a{display:block;padding:12px 8px;color:#626060;text-decoration:none}.anchor-table .table>tbody>tr>td.empty{text-align:center;padding:10px 0}.anchor-table .table>tbody>tr:hover a{color:#0059bd}.search-terms tbody>tr>td{color:#626060;padding:12px 8px}.search-terms tbody>tr>td.empty{text-align:center;padding:10px 0}@media screen and (max-width:1199px){.single-grid.total-customers,.single-grid.total-products{margin-top:15px}}@media screen and (max-width:767px){.single-grid.total-orders{margin-top:15px}}
</style>

<head>
<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

</head>

@section('content')


@foreach ($data as $rool)

<form method="POST" action="{{ route('lesupdate') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Lesson Name</label>
    <input type="text" class="form-control" placeholder="Title" name="lesson_title" value="{{$rool->lesson_title}}" >
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Order</label>
      <input type="number" class="form-control" placeholder="Title" name="l_order" style="" value="{{$rool->l_order}}">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Sections</label>
      <select class="form-control" id="select_section" name="section">
        @foreach ($group_section as $item)
         <option value="{{ $item->les_group_id }}"> {{ $item->les_group_name }}</option>         
        @endforeach            
      </select>
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Lesson Type</label>
  <select class="form-control" id="select_type" name="lestype" value="{{$rool->lesson_type}}">
          <option {{ ($rool->lesson_type=="1"?"selected":"") }} value="1">Video Content</option>
          <option {{ ($rool->lesson_type=="2"?"selected":"") }} value="2">Documenet Content</option>          
  </select>
  </div>
  <div class="form-group" id="doc_body" style="">
      <label for="exampleFormControlTextarea1">Lesson Body</label>
      <textarea class="form-control" id="tinymce" rows="3" name="lesson_body">{{$rool->lesson_body}}</textarea>
  </div>
  <input type="text" class="form-control" placeholder="Title" name="lesson_id" style="display:none;" value="{{$rool->lesson_id}}">
  <input type="text" class="form-control" placeholder="Title" name="course_id" style="display:none;" value="{{$rool->course_id}}">
  <input type="text" class="form-control" placeholder="Title" name="user_id" style="display:none;" value="{{$rool->user_id}}">
  <input type="text" class="form-control" placeholder="Title" name="is_ok" style="display:none;" value="{{ $rool->is_ok }}">
  <div class="video_crpt" id="video_crpt" style="">
    <div class="form-group" style="background-color: #e1e1e1;padding: 10px;border-style: hidden;border-radius: 10px;">
      <div class="form-group-prepend">
        <span class="form-group-text" id="inputGroupFileAddon01">Add Video Lesson</span>
      </div>
      <div class="input-group">
          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>
      <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{ $rool->video_url }}">
    </div>         
  </div>
      <div class="form-group">
          <label for="exampleFormControlTextarea1">Video Description</label>
          <textarea class="form-control" id="see" rows="3" name="video_description">{{$rool->video_description}}</textarea>
      </div>
  </div> 
  <input type="text" class="form-control" placeholder="Title" name="apple" style="display:none;" value="1">
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endforeach


<script>
$(function() {
  $( document ).ready(function() {
    var r = $( "#select_type" ).val();
    if (r == 1 ) {
    $("#video_crpt").show();
    $("#doc_body").hide();
    console.log(r);
    } else if (r == 2) {
    $("#video_crpt").hide();
    $("#doc_body").show();
    } else if (r == 3) {
      console.log('seeee');
    } else {
      console.log('fsdfsdf');
    }
  });
  $('#select_type').change(function(){    
    //$('#' + $(this).val()).show();
   var r = $( "#select_type" ).val();

   if (r == 1 ) {
    $("#video_crpt").show();
    $("#doc_body").hide();
    console.log(r);
   } else if (r == 2) {
    $("#video_crpt").hide();
    $("#doc_body").show();
   } else if (r == 3) {
     console.log('seeee');
   } else {
     console.log('fsdfsdf');
   }

   
  });
});
</script>

<script>
 CKEDITOR.replace( 'lesson_body' );
</script>

<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>

<script>
  var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
</script>

<script>
  {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
</script>
<script>
  $('#lfm').filemanager('file', {prefix: route_prefix});
  $('#lfm2').filemanager('file', {prefix: route_prefix});
</script>


@endsection