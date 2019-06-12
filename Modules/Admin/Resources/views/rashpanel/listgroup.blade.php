@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection


@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>

<h2>Lessons</h2><br>


@foreach($linco as $lg_data)
<li class="list-group" style="padding: 10px;list-style: none;">
<a href="#" id="apple" class="list-group-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <button class="btn btn-primary menu-icon fa fa-edit" style="float:right; margin: 0px 10px;"></button>    <button  data-toggle="modal" data-target="#deletesec{{ $lg_data->les_group_id }}" class="btn btn-danger menu-icon fa fa-trash" style="float:right;"> </button><i class="menu-icon fa fa-book"></i>&nbsp &nbsp{{ $lg_data->les_group_name }}<br><br></a> 
    <ul class="sub-menu children dropdown-menu" style="display: contents;" id="palmon{{ $lg_data->les_group_id }}">                                                               
      
    </ul>
</li>
@include('admin::rashpanel.list_group_component.delete_conform_section')

@endforeach





<ul class="list-group">
    @foreach ($data as $lesson)  
    @endforeach
</ul>

<a href="admin/addles/add/{{ $lesson->course_id }}" style="float: right;margin: 0px 10px;" class="btn btn-primary"><i class="fa fa-book"></i> &nbsp; Add Lesson</a>
<button type="button" style="float: right;margin: 0px 0px;" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-cogs"></i> &nbsp;Edit Attrib</button> &nbsp;

<button type="button" style="float: right;margin: 0px 10px;" class="btn btn-primary" data-toggle="modal" data-target="#addsec"><i class="fa fa-list"></i> &nbsp;Add Section</button>




@include('admin::rashpanel.list_group_component.edit_course_attrib')



@include('admin::rashpanel.list_group_component.add_section')















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

