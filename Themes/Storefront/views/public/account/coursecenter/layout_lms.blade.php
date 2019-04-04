<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
                <h3 class="w3-bar-item">Exam</h3>  
                  @foreach ($data as $value)                         
                     <a href="" li class="w3-bar-item w3-button" > {{ $value->exam_title }}</a> 
                   @endforeach   
              
                  <h3 class="w3-bar-item">Lessons</h3>  
                  @foreach ($oler as $lesson)  
                                         
                      <a href="{{ $lesson->lesson_id }}" li class="w3-bar-item w3-button"> {{ $lesson->lesson_title }}</a> 
                      
                  @endforeach 


                  
        </div>

@yield('content')

</body>
</html>