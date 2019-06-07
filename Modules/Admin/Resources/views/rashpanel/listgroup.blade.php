@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection


@section('content')

<h2>Lessons</h2><br>
<ul class="list-group">
    @foreach ($data as $lesson)  
    <li class="list-group-item" style="height:60px">{{ $lesson->lesson_title }} <span></span> <a href="admin/parellel/{{ $lesson->course_id }}/{{ $lesson->lesson_id }}" style="float: right;margin: 0px 10px;" class="btn btn-success">Edit</a> <span> </span>
     <a href="admin/parellel/delete/{{ $lesson->lesson_id }}" class="btn btn-danger" style="float: right;">DELETE</a></li>
    @endforeach
</ul>

<a href="admin/addles/add/{{ $lesson->course_id }}" style="float: right;margin: 0px 10px;" class="btn btn-primary"><i class="fa fa-bars"></i> &nbsp; Add Lesson</a>
<button type="button" style="float: right;margin: 0px 0px;" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-cogs"></i> &nbsp;Edit Attrib</button>

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

