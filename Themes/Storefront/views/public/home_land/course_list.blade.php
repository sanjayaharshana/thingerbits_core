
<!DOCTYPE html>
<html lang="en">

@include('public.home_land.components.head')
@include('public.home_land.components.ajaxpageloader')
@include('public.home_land.components.header')

<main>
    <!-- Heading Page -->
    <section class="heading-page">
        <img src="images/bloggrid-heading-bg.jpg" alt="">
        <div class="container">
            <div class="heading-page-content">
                <div class="au-page-title">
                    <h1>Standard List</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Standard List</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!-- standard list -->
    <section class="standard-list courses-2 section-padding-large">
        <div class="container">
            <div class="courses-content">
                <div class="row">
                   @foreach($coursedata as $item ) 
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <article class="item">
                            <div class="item-thumb">
                                <a href="single-course.html">
                                    <img src="{{ url('/') }}/get_data_reqst_java/{{ $item->course_id }}" style="height: 200px;width: -webkit-fill-available;" alt="Steven Boyd">
                                </a>                               
                            </div>
                            <div class="info">
                                <a href="#" class="teacher">Steven Boyd</a>
                                <h3 class="title">
                                    <a href="single-course.html">{{ $item->course_title }}</a>
                                </h3>
                                <p class="course-desc">
                                    {{ $item->course_discription }}
                                </p>
                                <div class="desc display-flex">
                                    <div class="comments-students">
                                        <a href="#" class="comments"><i class="fas fa-user"></i>20 Students</a>
                                        <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                    </div>
                                    <span class="price free">Free</span>
                                </div>
                            </div>
                        </article>
                    </div> 

                   @endforeach                  
                                     
                </div>
            </div>
        </div>
    </section>
</main>

@include('public.home_land.components.footer')