@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection


@section('content')

<h2>Lessons</h2><br>
<ul class="list-group">
    @foreach ($data as $lesson)  
    <li class="list-group-item" style="height:60px">{{ $lesson->lesson_title }} <span></span> <a href="admin/parellel/{{ $lesson->lesson_id }}" style="float: right;margin: 0px 10px;" class="btn btn-success">Edit</a> <span> </span>
     <a href="admin/parellel/delete/{{ $lesson->lesson_id }}" class="btn btn-danger" style="float: right;">DELETE</a></li>
    @endforeach
</ul>

<a href="admin/addles/add/{{ $lesson->course_id }}" style="float: right;margin: 0px 10px;" class="btn btn-primary"><i class="fa fa-bars"></i> &nbsp; Add Lesson</a>
<a href="admin/addles/add/{{ $lesson->course_id }}" style="float: right;margin: 0px 0px;" class="btn btn-primary"><i class="fa fa-cogs"></i> &nbsp; Edit Course Attrib</a><br><br>


<h2>Exam</h2><br>
<ul class="list-group">
<li class="list-group-item active">Coming Soon</li>        
</ul>

@endsection

