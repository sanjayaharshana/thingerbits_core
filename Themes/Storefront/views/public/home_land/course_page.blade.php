
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
                    <div class="single-title" style="padding:unset;">
                        <h1>{{ $item->course_title }}</h1>                                     
                    </div> <p style="padding: 10px;font-size: 15px;/* background: #f9f9f9; */ ">By {{ $teacher_data->first_name }} {{ $teacher_data->last_name }} </p> <br><br>
                            
                    <div class="single-course-info">
                        <figure class="single-course-images" style="">
                            <img src="{{ url('/') }}/get_data_reqst_java/{{ $item->course_id }}" style="height: 500px; height: 500px;-webkit-box-shadow: 2px 4px 15px -5px rgba(0,0,0,0.75);-moz-box-shadow: 2px 4px 15px -5px rgba(0,0,0,0.75);box-shadow: 2px 4px 15px -5px rgba(0,0,0,0.75);border-style: solid;border-width: 10px;border-color: white;" alt="Content Marketing">
                        </figure>
                        <div class="course-teacher-cat display-flex">
                            <div class="teacher-cat">
                                <ul class="display-flex">
                                    <li class="display-flex">
                                        <a href="#">
                                            <img src="images/home3-tutor-1.jpg" alt="Sofia Robinson">
                                        </a>
                                        <div class="teacher-cat-item">
                                            <span>Instructor:</span>
                                            <a href="#" style="font-size: 15px;">{{ $teacher_data->first_name }} {{ $teacher_data->last_name }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="teacher-cat-item">
                                            <span>Caregories</span>
                                            <a href="#" style="font-size: 10px;background: #03A9F4;color: white;padding: 5px;border-radius: 5px;">{{ $cat_data->category_name }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="teacher-cat-item">
                                            <span>Lavel</span>
                                            {{ $item->level }}
                                        </div>
                                    </li>
                                </ul>  
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
                                                <div class="title" id="apple{{ $lg_data->les_group_id }}" data-toggle="collapse" data-target="#curriculumOne{{ $lg_data->les_group_id }}" aria-expanded="true" aria-controls="curriculumOne" role="button">
                                                    {{ $lg_data->les_group_name }}
                                                </div>                                               
                                            </div>
    
                                            <div id="curriculumOne{{ $lg_data->les_group_id }}" class="collapse show" aria-labelledby="headingcurriculumOne" data-parent="#curriculum-content">
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
                        <div class="widget-title" style="text-align: center;padding: 10px;background: #0390cf;color: white;border-radius: 10px 10px 0px 0px;">
                                <h5 style="text-align: center; color:white;">Recommand Product</h5>
                             
                            </div>
                    <div class="right-sidebar">                        
                        <div class="widget_lastest_entries" style="-webkit-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.75);-moz-box-shadow: 0px 0px 3px 0px rgba(0,0,0,0.75);box-shadow: 0px 0px 3px 0px rgba(183, 183, 183, 0.75);padding: 10px;">
                            <br>
                            <ul>
                                <li>
                                    <a href="#"><img src=" {{ $product_img }}" style="border-radius: 10px;border-style: solid;border-color: white;" alt="Web Design For Usability"></a>
                                    <h5 class="title" style="text-align:center;">                                            
                                        <a href="#">{{ $product_reccomand->name }}</a>
                                    </h5><br>
                                    <p style="height: 200px;"> 
                                       {!!$product_reccomand->short_description!!}  
                                    </p>
                                                                                                  
                                </li>  
                            <a href="{{ url('/') }}/shop/products/{{ $product_reccomand->slug }}" class="btn-light" style="padding: 0px 10px;background: border-box;">LKR {{$product_reccomand->price}}</a> 
                            <a href="{{ url('/') }}/shop/products/{{ $product_reccomand->slug }}" style="" class="btn btn-primary">Buy Now</a>                              
                            </ul>
                        </div>

                        <div class="banner" style="height: -webkit-fill-available;">
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
            var menuItem = $('#apple'+ group_id );                
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