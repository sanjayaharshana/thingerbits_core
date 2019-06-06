<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">                  
                    <li class="menu-title">Lessons</li>
                    @foreach ($board_lesson as $iertem)
                    <li class=""> <a href="{{ url('/') }}/account/lms/my_courses/course_open/lesson/{{ $iertem->course_id }}/{{ $iertem->lesson_id }}"><i class="menu-icon fa fa-laptop"></i> {{ $iertem->lesson_title }}  </a> </li>
                   
                    @endforeach
                    
                    @foreach($les_group as $lg_data)
                    <li class="menu-item-has-children dropdown">
                    <a href="#" id="apple" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>{{ $lg_data->les_group_name }}</a>
                        <ul class="sub-menu children dropdown-menu" id="palmon{{ $lg_data->les_group_id }}">                                                               
                        </ul>
                    </li>
                    @endforeach
                              
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });   
    
        window.onload = function () { 
            @foreach($les_group as $lg_map)
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
                    
                 

                    $('#'+ tagname).append('<li><i class="fa fa-puzzle-piece"></i><a href="{{ url('/') }}/account/lms/my_courses/course_open/lesson/'+ course_id +'/'+ lesid + '">'+ response[i].lesson_title + '</a>');                           
                        }
                    }  
                }); 
            console.log('sdfsdfsdfsdfsdf sdfsdf');                                        
        }
    </script>    

   