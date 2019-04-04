@section('content')   

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
        <h3 class="w3-bar-item">Exam</h3>  
          @foreach ($data as $value)                         
              <a href="rollingcontroller/entercourse/{{ $value->exam_id }}" li class="w3-bar-item w3-button" > {{ $value->exam_title }}</a> 
          @endforeach   
      
          <h3 class="w3-bar-item">Lessons</h3>  
          @foreach ($oler as $lesson)                         
              <li class="w3-bar-item w3-button"> {{ $lesson->lesson_title }}</li> 
          @endforeach 
</div>
@endsection