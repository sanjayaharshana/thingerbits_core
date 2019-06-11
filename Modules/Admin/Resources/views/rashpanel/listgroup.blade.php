@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection


@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>

<h2>Lessons</h2><br>


@foreach($linco as $lg_data)
<li class="list-group" style="padding: 10px;list-style: none;">
<a href="#" id="apple" class="list-group-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>&nbsp &nbsp{{ $lg_data->les_group_name }}</a>
    <ul class="sub-menu children dropdown-menu" style="display: contents;" id="palmon{{ $lg_data->les_group_id }}">                                                               
      
    </ul>
</li>
@endforeach





<ul class="list-group">
    @foreach ($data as $lesson)  
    @endforeach
</ul>

<a href="admin/addles/add/{{ $lesson->course_id }}" style="float: right;margin: 0px 10px;" class="btn btn-primary"><i class="fa fa-book"></i> &nbsp; Add Lesson</a>
<button type="button" style="float: right;margin: 0px 0px;" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-cogs"></i> &nbsp;Edit Attrib</button>

<a href="admin/addles/add/{{ $lesson->course_id }}" style="float: right;margin: 0px 10px;" class="btn btn-primary"><i class="fa fa-bars"></i> &nbsp; Add Section</a>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                    <form autocomplete="off" method="POST" action="" enctype="multipart/form-data" id="commentForm">
                        {{ csrf_field() }}    
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Course Title</label>
                            <input type="text" pattern=".{12,}" required title="3 characters minimum" id="ctitle" class="form-control" placeholder="Course Title" name="course_title" style="" value="" required>
                        </div>                  
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Slugg</label>
                            <input type="text" class="form-control" id="slugg" placeholder="Slugg" name="slg" style="" value="" required>
                        </div>                    
                        <div class="form-group">
                            <div class="form-group-prepend">
                              <span class="form-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" name="course_img"
                                aria-describedby="inputGroupFileAddon01">
                            </div>
                        </div>                   
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Course Intro</label>
                            <input type="text" pattern=".{160,}" required title="160 characters minimum" class="form-control" placeholder="Course Intro" name="course_intros" style="" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Course Decription</label>
                            <input type="text"  pattern=".{160,}" required title="160 characters minimum"  class="form-control" placeholder="Course Discription" name="cours_discrip" style="" value="" required>
                        </div>
                        <div class="form-group autocomplete" style="width:300px;">
                            <label for="exampleFormControlTextarea1">Recommand Products</label>
                            <input id="myInput" type="text" class="form-control" placeholder="Title" name="Recommand Products" style="" value="" required>
                        </div>
                        <br>                      
            </div>
            <div class="modal-footer">
                <button type="submit" value="Validate!" class="btn btn-primary">Save</button>
            </form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      
        </div>
      </div>




<h2>Exam</h2><br>

<script src="//localhost:8000/modules/media/admin/js/media.js?v=1.1.2"></script>
<ul class="list-group">
<li class="list-group-item active">Coming Soon</li>        
</ul>

@endsection

<script>
  

  window.onload = function () { 
      @foreach($linco as $lg_map)
          fetchRecords({{$lg_map->les_group_id}},'palmon{{ $lg_map->les_group_id }}')
      @endforeach
  }

  function fetchRecords(group_id,tagname){
      var menuItem = $('#apple');                
          $.ajax({
          url: '{{ url('/') }}/account/lms/my_courses/ajax/jsongetles/'+ group_id ,
          type: 'get',
          dataType: 'json',
          success: function(response){
          var len = 0;               
          for (i = 0; i < response.length; i++) {
              console.log(response[i].lesson_title); 
              var lesid = response[i].lesson_id;
              var course_id = response[i].course_id;              
              $('#'+ tagname).append('<li><i class=""></i><div style="background: whitesmoke;border-style:dashed;border-color:#79a098;border-width: 1px;" href="{{ url('/') }}/account/lms/my_courses/course_open/lesson/'+ course_id +'/'+ lesid + '">'+ '<div style="padding:10px;">' + response[i].lesson_title +  '<a href="admin/deletecore/delete/'+response[i].lesson_id  +'" class="btn-xs" style="float: right;">Delete</a>' + '<a href="admin/parellel/'+response[i].course_id +'/'+response[i].lesson_id +'" class="btn-xs" style="float: right;">Edit</a>');                           
                  }
              }  
          });
        }
</script>   

