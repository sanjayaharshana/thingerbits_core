
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
                    <h1>All Courses</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!-- Course Page -->
    <section class="courses-page section-padding-large">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="courses-content">
                        <div class="au-sorting display-flex">
                            <div class="filter-layout">
                                <ul class="nav nav-tabs filter-courses display-flex-center" id="filter-courses" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="la la-th-large"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="la la-list"></i></a>
                                    </li>
                                </ul>
                                <p class="woocommerce-result-count">Showing 1 – 8 of 20</p>
                            </div>
                            <form class="woocommerce-ordering" method="GET">
                                <select name="orderby" class="orderby">
                                    <option value="latest">Latest Courses</option>
                                    <option value="popular">Popular Courses</option>
                                    <option value="lessons">Lessons</option>
                                </select>
                            </form>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="gid-tab">
                                <div class="row">

                                    @foreach ($data as $item)
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <article class="item">
                                                            <div class="item-thumb">
                                                                <a href="single-course.html">
                                                                    <img src="{{ url('/') }}/get_data_reqst_java/{{ $item->course_id }}" alt="Content Marketing">
                                                                </a>
                                                                <div class="feadtured-course-small">
                                                                    <a href="#">
                                                                        <img src="{{ url('/') }}/get_data_reqst_java/{{ $item->course_id }}" alt="Lucas Coleman">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="info">
                                                                <a href="#" class="teacher">{{ $item->level }}</a>
                                                                <h3 class="title">
                                                                    <a href="single-course.html">{{ $item->course_title }}</a>
                                                                </h3>
                                                                <p class="course-desc">
                                                                        {{ $item->course_discription }}   
                                                                </p>
                                                                <div class="desc display-flex">
                                                                    <div class="comments-students">
                                                                        <a href="#" class="comments"><i class="fas fa-user"></i>35 Students</a>
                                                                        <a href="#" class="students"><i class="fas fa-book"></i>20 Lessons</a>
                                                                    </div>
                                                                    <span class="price notfree">Get More Info</span>
                                                                </div>
                                                            </div>
                                                        </article>
                                                </div> 
                                    @endforeach                                
                                </div>
                            </div>



                            <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                @foreach ($data as $item_l)
                                    <article class="item listing">
                                            <div class="item-thumb">
                                                <a href="single-course.html">
                                                    <img src="{{ url('/') }}/get_data_reqst_java/{{ $item_l->course_id }}" alt="Web Design For Usability">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <h3 class="title">
                                                    <a href="single-course.html">{{ $item->course_title }}</a>
                                                </h3>
                                                <div class="feadtured-course-small">
                                                    <a href="#" class="teacher">
                                                        <img src="images/home3-tutor-2.jpg" alt="Charles Russell">
                                                        <span>Charles Russell</span>
                                                    </a>
                                                </div>
                                                <p class="course-desc">
                                                    Lobortis mattis aliquam faucibus purus in tempor nec. Iaculis urna id volutpat lacus laoreet non rabitur faucibus vitae aliquet.
                                                </p>
                                                <div class="desc display-flex">
                                                    <div class="comments-students">
                                                        <a href="#" class="comments"><i class="fas fa-user"></i>35 Students</a>
                                                        <a href="#" class="students"><i class="fas fa-book"></i>20 Lessons</a>
                                                    </div>
                                                    <span class="price notfree">$65.00</span>
                                                </div>
                                            </div>
                                    </article>  
                                @endforeach                                                             
                            </div>
                        </div>
                        <div class="pagination">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">01</span></li>
                                <li><a class="page-numbers" href="#">02</a></li>
                                <li><a class="page-numbers" href="#">03</a></li>
                                <li><a class="page-numbers" href="#"><i class="la la-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="right-sidebar">
                        <div class="widget_search">
                            <form method="POST" class="search-form">
                                <input type="search" name="s" class="background-grey" placeholder="Search Courses">
                            </form>
                        </div>
                        <div class="widget_product_categories">
                            <div class="widget-title">
                                <h2>Categories</h2>
                            </div>
                            <ul>
                                    @foreach ($course_cat as $cat_data)
                                    <li><a href="{{ url('/') }}/getcourse_cat/{{ $cat_data->category_id }}"><i class="la la-codepen"></i>UI &amp; {{ $cat_data->category_name }}</a></li>                               
                                    @endforeach
                            </ul>
                        </div>
                        <div class="widget_signupform">
                            <div class="sign-up-form">
                                <div class="form-heading">
                                    <h3>
                                        Get Free Online Courses
                                    </h3>
                                </div>
                                <form method="POST" class="form-signup js-signup-form" action="includes/contact-form.php" novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="textl" name="phone" id="phone" placeholder="Phone Number">
                                    </div>
                                    <input type="submit" class="submit au-btn-hover" value="Get It Now">
                                </form>
                            </div>
                        </div>
                        <div class="widget_lastest_entries">
                            <div class="widget-title">
                                <h2>Popular Courses</h2>
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="single-course.html"><img src="images/popular-courses-1.jpg" alt="Web Design For Usability"></a>
                                    </figure>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="single-course.html">Web Design For Usability</a>
                                        </h3>
                                        <span class="price free">Free</span>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="single-course.html"><img src="images/popular-courses-2.jpg" alt="Essential Blogging Tools"></a>
                                    </figure>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="single-course.html">Essential Blogging Tools</a>
                                        </h3>
                                        <span class="price free">Free</span>
                                    </div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="single-course.html"><img src="images/popular-courses-3.jpg" alt="Advanced: UI Design"></a>
                                    </figure>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="single-course.html">Advanced: UI Design</a>
                                        </h3>
                                        <span class="price notfree">Get More Info</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('public.home_land.components.footer')