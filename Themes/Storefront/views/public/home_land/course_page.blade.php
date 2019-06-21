
<!DOCTYPE html>
<html lang="en">

@include('public.home_land.components.head')
@include('public.home_land.components.ajaxpageloader')
@include('public.home_land.components.header')

@foreach ($coursedata as $item)
<section class="single-course section-padding-large">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 single-course-content">
                    <div class="single-title">
                        <h1>{{ $item->course_title }}</h1>                       
                    </div>
                    <div class="single-course-info">
                        <figure class="single-course-images">
                            <img src="{{ url('/') }}/get_data_reqst_java/{{ $item->course_id }}" style="height: 500px;" alt="Content Marketing">
                        </figure>
                        <div class="course-teacher-cat display-flex">
                            <div class="teacher-cat">
                               
                            </div>
                            <a href="#" class="au-btn au-btn-hover">Buy This Courses</a>
                        </div>
                    </div>
                    <div class="single-course-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="false"><i class="fas fa-user"></i>Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active show" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="true"><i class="fas fa-bookmark"></i>Curriculum</a>
                            </li>                         
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="course-overview">
                                    <div class="course-desc">
                                        <h4 class="course-tab-title">Courses Information</h4>
                                        <p class="course-desc-content">
                                            {{ $item->course_discription }}
                                        </p>                                       
                                    </div>
                                </div>                                
                            </div>
                            @foreach($les_group as $lg_data)
                            <div class="tab-pane fade active show" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <ul id="curriculum-content" class="curriculum-content">
                                        <li class="card active">
                                            <div class="card-header" id="headingcurriculumOne">
                                                <div class="title" id="apple" data-toggle="collapse" data-target="#curriculumOne" aria-expanded="true" aria-controls="curriculumOne" role="button">
                                                    {{ $lg_data->les_group_name }}
                                                </div>
                                                <span>0/5</span>
                                            </div>
    
                                            <div id="curriculumOne" class="collapse show" aria-labelledby="headingcurriculumOne" data-parent="#curriculum-content">
                                                <div class="card-body content">
                                                    <ul id="palmon{{ $lg_data->les_group_id }}">
                                                                                                            
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>                                   
                                </div> 

                            @endforeach
                                                                             
                                               
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="right-sidebar">                        
                        <div class="widget_lastest_entries">
                            <div class="widget-title">
                                <h2>Recent Courses</h2>
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="#"><img src="images/popular-courses-1.jpg" alt="Web Design For Usability"></a>
                                    </figure>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="#">Web Design For Usability</a>
                                        </h3>
                                        <span class="price free">Free</span>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img src="images/popular-courses-2.jpg" alt="Essential Blogging Tools"></a>
                                    </figure>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="#">Essential Blogging Tools</a>
                                        </h3>
                                        <span class="price free">Free</span>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img src="images/popular-courses-3.jpg" alt="Advanced: UI Design"></a>
                                    </figure>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="#">Advanced: UI Design</a>
                                        </h3>
                                        <span class="price notfree">$65.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="banner">
                            <img src="images/sidebar-banner.jpg" alt="">
                            <div class="banner-content position-center">
                                <h5 class="title">
                                    Get Free Online Courses!
                                </h5>
                                <a href="#" class="au-btn au-btn-hover">Get It Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endforeach

@include('public.home_land.components.footer')

<script>
  window.onload = function () { 
            @foreach($les_group as $lg_map)
            fetchRecords({{$lg_map->les_group_id}},'palmon{{ $lg_map->les_group_id }}')
            @endforeach
        }
    
        function fetchRecords(group_id,tagname){
            var menuItem = $('#apple');                
                $.ajax({
                url: '{{ url('/') }}/public_json/'+ group_id ,
                type: 'get',
                dataType: 'json',
                success: function(response){
                var len = 0;               
                for (i = 0; i < response.length; i++) {
                    console.log(response[i].lesson_title); 
                    var lesid = response[i].lesson_id;
                    var course_id = response[i].course_id; 
                    
                 

                    $('#'+ tagname).append('<li class="display-flex"><a href="#"><span><i class="fas fa-play-circle"></i>' + response[i].lesson_title + '<span class="price">Free</span></span></a></li>');                           
                        }
                    }  
                }); 
            console.log('sdfsdfsdfsdfsdf sdfsdf');                                        
        }
</script>