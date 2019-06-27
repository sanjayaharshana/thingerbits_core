<section class="courses courses-2 section-padding-large" style="max-height: none; height:-webkit-fill-available;background-image: url('{{ (Theme::url('public/visual_style/images/home2-courses-bg.jpg')) }}'); padding-top: 10px;">
    <div class="container">       
        <div class="courses-content featured-course-slider">
            <div class="row slick-initialized slick-slider slick-dotted">
                    @foreach ($coursedata as $item)          
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide22" style="width: 400px;">
                            <article class="item wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <div class="item-thumb">
                                        <a href="{{ url('/') }}/courses/{{ $item->course_id }}" tabindex="0">
                                            <img src="{{ url('/') }}/get_data_reqst_java/{{ $item->course_id }}" style="height: 200px;width: fit-content;" alt="">
                                            <span class="overlay"></span>
                                        </a>
                                        <div class="feadtured-course-small">
                                            <a href="#" tabindex="0">
                                                <img src="images/course-small-2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <a href="#" class="teacher" tabindex="0">Basic</a>
                                        <h3 class="title">
                                            <a href="{{ url('/') }}/courses/{{ $item->course_id }}" tabindex="0">{{ $item->course_title }}</a>
                                        </h3>
                                        <p class="course-desc" style="overflow: hidden;text-overflow: ellipsis;height: 100px;">
                                                {{ $item->course_intro }} </p>
                                                
                                        <div class="desc display-flex">
                                            <div class="comments-students">
                                                <a href="#" class="comments" tabindex="0"><i class="fas fa-user"></i>24 Students</a>
                                                <a href="#" class="students" tabindex="0"><i class="fas fa-book"></i>30 Lessons</a>
                                            </div>
                                            <span href="" class="price notfree">View!</span>
                                        </div>
                                    </div>
                                    
                            </article>    
                        </div>      
                    @endforeach               
            </div>         
        </div>                                           
    </div>
</section>