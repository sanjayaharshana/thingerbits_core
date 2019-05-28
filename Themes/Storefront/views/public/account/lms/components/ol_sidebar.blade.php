<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">                  
                    <li class="menu-title">Lessons</li>
                    @foreach ($les_data as $less)
                    <li>
                    <a href="{{route('lesson', [$less->course_id,$less->lesson_id])}}"> <i class="menu-icon ti-book" style="width: 30px;"></i>{{$less->lesson_title}} </a>
                    </li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>