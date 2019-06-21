
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
                            <img src="{{ url('/') }}/account/sft/course_img/{{ $item->course_id }}" alt="Content Marketing">
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
                                            <a href="#">Sofia Robinson</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="teacher-cat-item">
                                            <span>Caregories</span>
                                            <a href="#">Marketing</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="teacher-cat-item">
                                            <span>Reviews</span>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
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
                            <li class="nav-item">
                                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false"><i class="fas fa-star"></i>Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="instructor-tab" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false"><i class="fas fa-graduation-cap"></i>Instructor</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="course-overview">
                                    <div class="course-desc">
                                        <h4 class="course-tab-title">Courses Information</h4>
                                        <p class="course-desc-content">
                                            In massa tempor nec feugiat. Eu scelerisque felis imperdiet proin fermentum leo vel. Cras adipiscing eni egestas. Quam pellentesque nec nam aliquam sem et. Ante in nibh mauris cursus mattis. 
                                            Morbi quis commodo odio aenean sed adipiscing. Viverra maecenas accumsan lacus vel facilisis volutpat. Est ullamcorper eget nulla facilisi etiam. Id cursus metus aliquam eleifend mi. Metus dictum at tempor commodo. 
                                            Arcu cursus vitae congue mauris. Integer feugiat srisque varius morbi enim nunc faucibus. Eu scelerisque felis imperdiet proin fermentum leo vel orci. Magna ac placerat vestibulum lectus nec nam aliquam sem. Ante in nibh mauris cursus mattis.
                                        </p>
                                        <p class="course-desc-content">
                                            Arcu cursus vitae congue mauris. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Eu scelerisque felis imperdiet proin fermentum leo vel orci. Magna ac placerat vestibulum lectus. Eget lorem dolor sed viverra
                                        </p>
                                    </div>
                                </div>
                                <!-- FQA -->
                                <div class="fqa">
                                    <h4 class="title">FAQ</h4>
                                    <div class="fqa-content">
                                            <ul id="accordion">
                                                <li class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <div class="title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                                            What Is The Content Marketing?
                                                        </div>
                                                    </div>

                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body content">
                                                            Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Aliquet lectus proin nibh nisl condimentum id venenatis
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <div class="title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                                            Who Is This Courses For?
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body content">
                                                            Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Aliquet lectus proin nibh nisl condimentum id venenatis
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <div class="title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                                                            Who can I contact for more information about a particular class?
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body content">
                                                            Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Aliquet lectus proin nibh nisl condimentum id venenatis
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="card active">
                                                    <div class="card-header" id="headingFour">
                                                        <div class="title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">
                                                            Terms and Conditions.
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                                                        <div class="card-body content">
                                                            Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Aliquet lectus proin nibh nisl condimentum id venenatis
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                <ul id="curriculum-content" class="curriculum-content">
                                    <li class="card active">
                                        <div class="card-header" id="headingcurriculumOne">
                                            <div class="title" data-toggle="collapse" data-target="#curriculumOne" aria-expanded="true" aria-controls="curriculumOne" role="button">
                                                Section 1: Getting Started
                                            </div>
                                            <span>0/5</span>
                                        </div>

                                        <div id="curriculumOne" class="collapse show" aria-labelledby="headingcurriculumOne" data-parent="#curriculum-content">
                                            <div class="card-body content">
                                                <ul>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>Welcome To Course Content Marketing! <span class="price">Free</span>
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>05:20</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>What is Content Writing?
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>02:00</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>What Does it Take to Become a Content Writer?
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>04:10</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="far fa-file"></i>Brainstorming Checklist
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>03:20</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>Understanding Your Audience
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>06:30</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card">
                                        <div class="card-header" id="headingcurriculumTwo">
                                            <div class="title" data-toggle="collapse" data-target="#curriculumTwo" aria-expanded="true" aria-controls="curriculumTwo" role="button">
                                                Section 2: Creative Content Ideas 
                                            </div>
                                            <span>0/8</span>
                                        </div>

                                        <div id="curriculumTwo" class="collapse show" aria-labelledby="headingcurriculumTwo" data-parent="#curriculum-content">
                                            <div class="card-body content">
                                                <ul>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="far fa-file"></i>Powerful Keyword Research Tools
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>02:00</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>How to Create Valuable Content?
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>04:00</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>Examples of How to Use Tone in Your Writing
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>06:25</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="far fa-file"></i>How to Improve Flow in Your Content
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>04:20</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>Webmaster Guidelines
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>05:40</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-play-circle"></i>Generalist vs. Specialist
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>04:00</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="far fa-file"></i>Proximity Research
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>02:15</span>
                                                    </li>
                                                    <li class="display-flex">
                                                        <a href="#">
                                                            <span>
                                                                <i class="fas fa-puzzle-piece"></i>The Course Quiz
                                                            </span>
                                                        </a>
                                                        <span class="lesson-time"><i class="far fa-clock"></i>6 Question</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="review-content">
                                    <div class="average-rating">
                                        <span class="total-rating">5</span>
                                        <div class="rating-star">
                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="desc">Average Rating</p>
                                    </div>
                                    <div class="rating-breakdown js-waypoint">
                                        <div class="progress-bar">
                                            <div class="progress-box">
                                                <div class="au-progress au-progress-2">
                                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="100" aria-valuenow="100" style="width: 100%;">
                                                        <span class="au-progress-star">5 Stars</span>
                                                        <span class="au-progress-total">100%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-box">
                                                <div class="au-progress au-progress-2">
                                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="0" aria-valuenow="0" style="width: 0%;">
                                                        <span class="au-progress-star">3 Stars</span>
                                                        <span class="au-progress-total">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-box">
                                                <div class="au-progress au-progress-2">
                                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="0" aria-valuenow="0" style="width: 0%;">
                                                        <span class="au-progress-star">3 Stars</span>
                                                        <span class="au-progress-total">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-box">
                                                <div class="au-progress au-progress-2">
                                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="0" aria-valuenow="0" style="width: 0%;">
                                                        <span class="au-progress-star">2 Stars</span>
                                                        <span class="au-progress-total">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-box">
                                                <div class="au-progress au-progress-2">
                                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="0" aria-valuenow="0" style="width: 0%;">
                                                        <span class="au-progress-star">1 Stars</span>
                                                        <span class="au-progress-total">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-comments">
                                    <h3 class="title">
                                        Our Students Said:
                                    </h3>
                                    <div class="media">
                                        <a class="mr-20" href="#">
                                            <img src="images/testimonials-6.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <div class="info">
                                                <div class="title-desc">
                                                    <h5 class="mt-0 title">
                                                        Lauren Goodwin  -  <span> Great Course</span>
                                                    </h5>
                                                    <div class="rating-star">
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <p class="desc">
                                                        Lulla pharetra diam sit amet. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidu ornare. At imperdiet dui accumsan sit amet nulla facilisi. Dui vivamus arcu felis biben.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="mr-20" href="#">
                                            <img src="images/home3-tutor-5.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <div class="info">
                                                <div class="title-desc">
                                                    <h5 class="mt-0 title">
                                                        Monica Morgan  -  <span>Customer Support  </span>
                                                    </h5>
                                                    <div class="rating-star">
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                    </div>
                                                    <p class="desc">
                                                        Praesent tristique magna sit amet purus gravida quis. Enim neque volutpat ac tincidunt. Eget alique nibh praesent tristique magna sit amet purus.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                <div class="instructor-content">
                                    <div class="instructor-thumb">
                                        <a href="#">
                                            <img src="images/intructor-1.jpg" alt="Sofia Robinson">
                                        </a>
                                    </div>
                                    <div class="instructor-info">
                                        <h4 class="title">
                                            <a href="#">Sofia Robinson</a>
                                        </h4>
                                        <div class="categories">
                                            <a href="#">Marketing </a>
                                            <a href="#">&amp; Language</a>
                                        </div>
                                        <p class="desc">
                                            Ullamcorper eget nulla facilisi etiam dignissim diam. Vitae ultri integer malesuada nunc vel risus. Cursus mattis molestie a iaculis at. Augue eget arcu dictum varius. Vulputate ut pharetra sit amet aliquam id diam maecenas hendrerit dolor.
                                        </p>
                                        <div class="socials">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="right-sidebar">
                        <div class="widget-featured-course">
                            <div class="widget-title">
                                <h2>Featured Course</h2>
                            </div>
                            <ul>
                                <li class="display-flex">
                                    <span><i class="fas fa-clock"></i>Duration</span>
                                    <span>2 Section</span>
                                </li>
                                <li class="display-flex">
                                    <span><i class="fas fa-book"></i>Lessons</span>
                                    <span>08</span>
                                </li>
                                <li class="display-flex">
                                    <span><i class="fas fa-signal"></i>Levels</span>
                                    <span>Beginner</span>
                                </li>
                                <li class="display-flex">
                                    <span><i class="fas fa-puzzle-piece"></i>Quizzes</span>
                                    <span>01</span>
                                </li>
                                <li class="display-flex">
                                    <span><i class="fas fa-users"></i>Students</span>
                                    <span>42</span>
                                </li>
                                <li class="display-flex">
                                    <span><i class="fas fa-check-square"></i>Assessments</span>
                                    <span>Yes</span>
                                </li>
                            </ul>
                        </div>
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
