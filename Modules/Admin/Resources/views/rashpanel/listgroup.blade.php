@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')   
@endsection


@section('content')

<h2>Lessons</h2><br>
<ul class="list-group">
    @foreach ($data as $lesson)  
    <li class="list-group-item">{{ $lesson->lesson_title }} <span></span> <a href="admin/parellel/{{ $lesson->lesson_id }}" class="btn btn-success">Edit</a> <span> </span> <button type="button" class="btn btn-danger">DELETE</button></li>
    @endforeach
</ul>

<h2>Exam</h2><br>
<ul class="list-group">
        <li class="list-group-item active">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
</ul>

@endsection