
<!DOCTYPE html>
<html lang="en">

@include('public.home_land.components.head')
@include('public.home_land.components.ajaxpageloader')
@include('public.home_land.components.header')

    <!-- Header page -->
    

    <main>
        <!-- Slide show -->
        @include('public.home_land.components.slideshow')
        @include('public.home_land.components.features_list')

        

        <!-- Our Team -->
        <section class="our-team section-padding-large">
            <div class="container">
                <div class="section-title section-title-left">
                    <h2>Our Teachers</h2>
                </div>
                <div class="our-team-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-1.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Charles Williams</a></h4>
                                    <span class="job-title">Manager</span>
                                    <p class="desc">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-2.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Henrik Campbell</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Dapibus ultrices in iaculis nunc sed augue lacus viverra.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-3.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Marie Washington</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Nec tincidunt praesent semper feugiat nibh sed pulvinar proin.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="{{ (Theme::url('public/visual_style/images/our-team-4.jpg')) }}" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">William Fuller</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Eget nunc lobortis mattis convallis aliquam faucibus purus
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-5.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Tiffany Gilber</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Enim blandit volutpat maec volutpat blandit aliquam etiam erat.
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="images/our-team-6.jpg" alt="">
                                    </a>
                                    <div class="our-team-socials position-center">
                                        <ul class="display-flex-center">
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h4 class="title"><a href="#">Bobby Bailey</a></h4>
                                    <span class="job-title">Teacher</span>
                                    <p class="desc">
                                        Tincidunt lobortis feugiat vivamus at augue eget arcu.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials background-grey section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonials-content">
                    <div class="row">
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Good Courses</span>
                                <p class="desc">“In hendrerit gravida rutrum quisque non. Suspendisse faucibus interdum posuere lorem ipsum dolor fermentum iaculis eu non diam. Hendrerit dolor magna eget est lorem. Tempor commodo ullamcorper a lacus vestibulum.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-1.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Elizabeth King</a></h4>
                                    <a href="#" class="categories">Poster Design</a>
                                </div>
                            </figure>
                        </article>
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Best Support 24/7</span>
                                <p class="desc">“Senectus et netus et malesuada fames ac turpis egestas maecenas. Id porta nibh venenatis cras sed felis. Ornare massa eget egestas purus. Vel pretium lectus quam id leo. Gravida in fermentum et sollicitudin ac faucibus scelerisque.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-2.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Lucas Andrews</a></h4>
                                    <a href="#" class="categories">UI Design</a>
                                </div>
                            </figure>
                        </article>
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Amazing Program</span>
                                <p class="desc">“Hendrerit dolor magna eget est lorem. Tempor commodo ullamcorper a lacus vestibulum sed. Cras tincidunt lobortis feugiat vivamus. Senectus et netus et malesuada fames ac turpis egestas maecenas interdum posuere.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-3.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Tiffany Jenkins</a></h4>
                                    <a href="#" class="categories">Web Designer</a>
                                </div>
                            </figure>
                        </article>
                        <article class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 item">
                            <div class="info">
                                <span class="item-name">Good Courses</span>
                                <p class="desc">“Tempor commodo ullamcorper a lacus vestibulum sed. Cras tincidunt lobortis feugiat vivamus. Senectus et netus et malesuada fames ac turpis egestas maecenas. Id porta nibh venenatis cras sed felis. Ornare massa eget egestas purus.”</p>
                            </div>
                            <figure>
                                <img src="images/testimonials-4.jpg" alt="">
                                <div class="thumb-info">
                                    <h4 class="title"><a href="#">Gabriel Henry</a></h4>
                                    <a href="#" class="categories">UX Design</a>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sign up -->
        <section class="sign-up section-padding-large">
            <div class="container">
                <div class="sign-up-content">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-3">
                            <div class="sign-up-form">
                                <div class="form-heading">
                                    <h3>
                                        Get Free Online Courses
                                    </h3>
                                </div>
                                <form method="POST" class="form-signup js-contact-form" action="includes/contact-form.php">
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
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-3">
                            <div class="register-now">
                                <h2 class="register-title">FREE COURSES</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                <div id="count-down-time" data-countdown="2019/03/30"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Table -->
        <section class="pricing-table section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>Pricing Table</h2>
                </div>
                <div class="pricing-table-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <h4 class="title">Basic</h4>
                                <figure class="display-flex-center basic">
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="60px" height="60px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                    d="M5.000,23.999 L7.000,23.999 C7.552,23.999 8.000,24.447 8.000,24.999 C8.000,25.551 7.552,25.999 7.000,25.999 L5.000,25.999 C4.448,25.999 4.000,25.551 4.000,24.999 C4.000,24.447 4.448,23.999 5.000,23.999 ZM5.000,27.999 L7.000,27.999 C7.552,27.999 8.000,28.448 8.000,29.000 C8.000,29.552 7.552,29.999 7.000,29.999 L5.000,29.999 C4.448,29.999 4.000,29.551 4.000,29.000 C4.000,28.448 4.448,27.999 5.000,27.999 ZM5.000,51.999 L7.000,51.999 C7.552,51.999 8.000,52.447 8.000,52.999 C8.000,53.551 7.552,53.999 7.000,53.999 L5.000,53.999 C4.448,53.999 4.000,53.551 4.000,52.999 C4.000,52.447 4.448,51.999 5.000,51.999 ZM5.000,47.999 L7.000,47.999 C7.552,47.999 8.000,48.448 8.000,48.999 C8.000,49.551 7.552,50.000 7.000,50.000 L5.000,50.000 C4.448,50.000 4.000,49.551 4.000,48.999 C4.000,48.448 4.448,47.999 5.000,47.999 ZM55.000,23.999 C55.552,23.999 56.000,24.447 56.000,24.999 L56.000,34.999 C56.000,35.551 55.552,35.999 55.000,35.999 C54.448,35.999 54.000,35.551 54.000,34.999 L54.000,24.999 C54.000,24.447 54.448,23.999 55.000,23.999 ZM51.000,51.999 L55.000,51.999 C55.552,51.999 56.000,52.447 56.000,52.999 C56.000,53.551 55.552,53.999 55.000,53.999 L51.000,53.999 C50.448,53.999 50.000,53.551 50.000,52.999 C50.000,52.447 50.448,51.999 51.000,51.999 ZM50.000,35.000 L50.000,24.999 C50.000,24.447 50.448,23.999 51.000,23.999 C51.552,23.999 52.000,24.447 52.000,24.999 L52.000,35.000 C52.000,35.552 51.552,36.000 51.000,36.000 C50.448,36.000 50.000,35.552 50.000,35.000 ZM56.000,48.999 C56.000,49.551 55.552,50.000 55.000,50.000 L51.000,50.000 C50.448,50.000 50.000,49.551 50.000,48.999 C50.000,48.448 50.448,47.999 51.000,47.999 L55.000,47.999 C55.552,47.999 56.000,48.448 56.000,48.999 ZM57.000,60.000 L3.000,60.000 C1.346,60.000 -0.000,58.654 -0.000,57.000 L-0.000,9.000 C-0.000,7.346 1.346,6.000 3.000,6.000 L7.000,6.000 C7.552,6.000 8.000,6.448 8.000,7.000 C8.000,7.552 7.552,8.000 7.000,8.000 L3.000,8.000 C2.449,8.000 2.000,8.449 2.000,9.000 L2.000,57.000 C2.000,57.551 2.449,57.999 3.000,57.999 L10.000,57.999 L10.000,13.999 L5.000,13.999 C4.448,13.999 4.000,13.551 4.000,12.999 C4.000,12.448 4.448,12.000 5.000,12.000 L10.000,12.000 L10.000,3.000 C10.000,1.346 11.346,-0.000 13.000,-0.000 L23.000,-0.000 C24.682,-0.000 26.000,1.318 26.000,3.000 L26.000,4.000 L33.000,4.000 C33.552,4.000 34.000,4.448 34.000,5.000 C34.000,5.552 33.552,6.000 33.000,6.000 L26.000,6.000 L26.000,57.999 L36.000,57.999 L36.000,5.000 C36.000,3.346 37.346,2.000 39.000,2.000 L45.000,2.000 C46.682,2.000 48.000,3.317 48.000,5.000 L48.000,14.000 L54.000,14.000 C54.552,14.000 55.000,14.448 55.000,15.000 C55.000,15.552 54.552,16.000 54.000,16.000 L48.000,16.000 L48.000,57.999 L57.000,57.999 C57.551,57.999 58.000,57.551 58.000,57.000 L58.000,11.000 C58.000,10.448 57.551,10.000 57.000,10.000 L51.000,10.000 C50.448,10.000 50.000,9.552 50.000,9.000 C50.000,8.448 50.448,8.000 51.000,8.000 L57.000,8.000 C58.654,8.000 60.000,9.345 60.000,11.000 L60.000,57.000 C60.000,58.654 58.654,60.000 57.000,60.000 ZM24.000,3.000 C24.000,2.429 23.570,2.000 23.000,2.000 L13.000,2.000 C12.439,2.000 12.000,2.439 12.000,3.000 L12.000,6.000 L21.000,6.000 C21.552,6.000 22.000,6.448 22.000,7.000 C22.000,7.552 21.552,8.000 21.000,8.000 L12.000,8.000 L12.000,57.999 L24.000,57.999 L24.000,3.000 ZM46.000,5.000 C46.000,4.429 45.570,4.000 45.000,4.000 L39.000,4.000 C38.439,4.000 38.000,4.438 38.000,5.000 L38.000,8.000 L43.000,8.000 C43.552,8.000 44.000,8.448 44.000,9.000 C44.000,9.552 43.552,10.000 43.000,10.000 L38.000,10.000 L38.000,57.999 L46.000,57.999 L46.000,5.000 ZM41.000,16.000 L43.000,16.000 C43.552,16.000 44.000,16.448 44.000,17.000 C44.000,17.551 43.552,17.999 43.000,17.999 L41.000,17.999 C40.448,17.999 40.000,17.551 40.000,17.000 C40.000,16.448 40.448,16.000 41.000,16.000 ZM41.000,20.000 L43.000,20.000 C43.552,20.000 44.000,20.448 44.000,21.000 C44.000,21.552 43.552,22.000 43.000,22.000 L41.000,22.000 C40.448,22.000 40.000,21.552 40.000,21.000 C40.000,20.448 40.448,20.000 41.000,20.000 ZM41.000,23.999 L43.000,23.999 C43.552,23.999 44.000,24.447 44.000,24.999 C44.000,25.551 43.552,25.999 43.000,25.999 L41.000,25.999 C40.448,25.999 40.000,25.551 40.000,24.999 C40.000,24.447 40.448,23.999 41.000,23.999 ZM41.000,47.999 L43.000,47.999 C43.552,47.999 44.000,48.448 44.000,48.999 C44.000,49.551 43.552,50.000 43.000,50.000 L41.000,50.000 C40.448,50.000 40.000,49.551 40.000,48.999 C40.000,48.448 40.448,47.999 41.000,47.999 ZM41.000,51.999 L43.000,51.999 C43.552,51.999 44.000,52.447 44.000,52.999 C44.000,53.551 43.552,53.999 43.000,53.999 L41.000,53.999 C40.448,53.999 40.000,53.551 40.000,52.999 C40.000,52.447 40.448,51.999 41.000,51.999 ZM15.000,16.000 L21.000,16.000 C21.552,16.000 22.000,16.448 22.000,17.000 L22.000,31.000 C22.000,31.552 21.552,32.000 21.000,32.000 L15.000,32.000 C14.448,32.000 14.000,31.552 14.000,31.000 L14.000,17.000 C14.000,16.448 14.448,16.000 15.000,16.000 ZM16.000,29.999 L20.000,29.999 L20.000,17.999 L16.000,17.999 L16.000,29.999 ZM15.000,47.999 L21.000,47.999 C21.552,47.999 22.000,48.448 22.000,48.999 C22.000,49.551 21.552,50.000 21.000,50.000 L15.000,50.000 C14.448,50.000 14.000,49.551 14.000,48.999 C14.000,48.448 14.448,47.999 15.000,47.999 ZM15.000,51.999 L21.000,51.999 C21.552,51.999 22.000,52.447 22.000,52.999 C22.000,53.551 21.552,53.999 21.000,53.999 L15.000,53.999 C14.448,53.999 14.000,53.551 14.000,52.999 C14.000,52.447 14.448,51.999 15.000,51.999 ZM33.000,53.999 L29.000,53.999 C28.448,53.999 28.000,53.551 28.000,52.999 C28.000,52.447 28.448,51.999 29.000,51.999 L33.000,51.999 C33.552,51.999 34.000,52.447 34.000,52.999 C34.000,53.551 33.552,53.999 33.000,53.999 ZM33.000,50.000 L29.000,50.000 C28.448,50.000 28.000,49.551 28.000,48.999 C28.000,48.448 28.448,47.999 29.000,47.999 L33.000,47.999 C33.552,47.999 34.000,48.448 34.000,48.999 C34.000,49.551 33.552,50.000 33.000,50.000 ZM33.000,32.000 L29.000,32.000 C28.448,32.000 28.000,31.552 28.000,31.000 L28.000,17.000 C28.000,16.448 28.448,16.000 29.000,16.000 L33.000,16.000 C33.552,16.000 34.000,16.448 34.000,17.000 L34.000,31.000 C34.000,31.552 33.552,32.000 33.000,32.000 ZM32.000,17.999 L30.000,17.999 L30.000,29.999 L32.000,29.999 L32.000,17.999 Z"/>
                                    </svg>
                                </figure>
                                <div class="info">
                                    <ul class="advanced">
                                        <li>5 Users</li>
                                        <li>10 Projects</li>
                                        <li>5 E-mail accounts</li>
                                        <li>2 Domains</li>
                                    </ul>
                                    <div class="price">
                                        <span>45.00</span>
                                        <span>M</span>
                                    </div>
                                    <a href="#" class="au-btn basic au-btn-hover">Purchase</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item popular" data-popular="Popular">
                                <h4 class="title">Business</h4>
                                <figure class="display-flex-center business">
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="62px" height="62px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                    d="M60.967,62.000 L1.033,62.000 C0.463,62.000 -0.000,61.537 -0.000,60.966 C-0.000,60.396 0.463,59.933 1.033,59.933 L60.967,59.933 C61.537,59.933 62.000,60.396 62.000,60.966 C62.000,61.537 61.537,62.000 60.967,62.000 ZM43.400,56.833 C43.400,57.403 42.937,57.866 42.367,57.866 L19.633,57.866 C19.063,57.866 18.600,57.403 18.600,56.833 C18.600,56.262 19.063,55.799 19.633,55.799 L42.367,55.799 C42.937,55.799 43.400,56.262 43.400,56.833 ZM23.767,53.733 C23.196,53.733 22.733,53.270 22.733,52.700 L22.733,38.233 C22.733,37.959 22.842,37.696 23.036,37.502 C23.133,37.405 25.470,35.133 31.000,35.133 C36.530,35.133 38.867,37.405 38.964,37.502 C39.158,37.696 39.267,37.959 39.267,38.233 L39.267,52.700 C39.267,53.270 38.804,53.733 38.233,53.733 C37.663,53.733 37.200,53.270 37.200,52.700 L37.200,38.732 C36.574,38.302 34.936,37.416 32.033,37.238 L32.033,47.533 C32.604,47.533 33.067,47.996 33.067,48.566 C33.067,49.136 32.604,49.600 32.033,49.600 L32.033,52.699 C32.033,53.270 31.570,53.733 31.000,53.733 C30.430,53.733 29.967,53.270 29.967,52.699 L29.967,49.600 C29.396,49.600 28.933,49.136 28.933,48.566 C28.933,47.996 29.396,47.533 29.967,47.533 L29.967,37.238 C27.070,37.416 25.432,38.299 24.800,38.733 L24.800,52.700 C24.800,53.270 24.337,53.733 23.767,53.733 ZM56.833,55.799 C57.404,55.799 57.867,56.262 57.867,56.833 C57.867,57.403 57.404,57.866 56.833,57.866 L46.500,57.866 C45.930,57.866 45.467,57.403 45.467,56.833 C45.467,56.262 45.930,55.799 46.500,55.799 L47.533,55.799 L47.533,31.000 L14.467,31.000 L14.467,55.799 L15.500,55.799 C16.070,55.799 16.533,56.262 16.533,56.833 C16.533,57.403 16.070,57.866 15.500,57.866 L5.167,57.866 C4.596,57.866 4.133,57.403 4.133,56.833 C4.133,56.262 4.596,55.799 5.167,55.799 L6.200,55.799 L6.200,31.000 L5.167,31.000 C4.596,31.000 4.133,30.537 4.133,29.966 C4.133,29.396 4.596,28.933 5.167,28.933 L56.833,28.933 C57.404,28.933 57.867,29.396 57.867,29.966 C57.867,30.537 57.404,31.000 56.833,31.000 L55.800,31.000 L55.800,55.799 L56.833,55.799 ZM12.400,31.000 L8.267,31.000 L8.267,55.799 L12.400,55.799 L12.400,31.000 ZM53.733,31.000 L49.600,31.000 L49.600,55.799 L53.733,55.799 L53.733,31.000 ZM48.567,14.466 C49.137,14.466 49.600,14.929 49.600,15.500 L49.600,21.700 C49.600,22.270 49.137,22.733 48.567,22.733 L44.433,22.733 C43.863,22.733 43.400,22.270 43.400,21.700 L43.400,15.500 C43.400,14.929 43.863,14.466 44.433,14.466 L48.567,14.466 ZM45.467,20.666 L47.533,20.666 L47.533,16.533 L45.467,16.533 L45.467,20.666 ZM38.233,14.466 C38.804,14.466 39.267,14.929 39.267,15.500 L39.267,21.700 C39.267,22.270 38.804,22.733 38.233,22.733 L34.100,22.733 C33.530,22.733 33.067,22.270 33.067,21.700 L33.067,15.500 C33.067,14.929 33.530,14.466 34.100,14.466 L38.233,14.466 ZM35.133,20.666 L37.200,20.666 L37.200,16.533 L35.133,16.533 L35.133,20.666 ZM27.900,14.466 C28.470,14.466 28.933,14.929 28.933,15.500 L28.933,21.700 C28.933,22.270 28.470,22.733 27.900,22.733 L23.767,22.733 C23.196,22.733 22.733,22.270 22.733,21.700 L22.733,15.500 C22.733,14.929 23.196,14.466 23.767,14.466 L27.900,14.466 ZM24.800,20.666 L26.867,20.666 L26.867,16.533 L24.800,16.533 L24.800,20.666 ZM17.567,14.466 C18.137,14.466 18.600,14.929 18.600,15.500 L18.600,21.700 C18.600,22.270 18.137,22.733 17.567,22.733 L13.433,22.733 C12.863,22.733 12.400,22.270 12.400,21.700 L12.400,15.500 C12.400,14.929 12.863,14.466 13.433,14.466 L17.567,14.466 ZM14.467,20.666 L16.533,20.666 L16.533,16.533 L14.467,16.533 L14.467,20.666 ZM54.767,26.866 C54.196,26.866 53.733,26.403 53.733,25.833 L53.733,10.333 L8.267,10.333 L8.267,25.833 C8.267,26.403 7.804,26.866 7.233,26.866 C6.663,26.866 6.200,26.403 6.200,25.833 L6.200,9.300 C6.200,8.729 6.663,8.266 7.233,8.266 L28.933,8.266 L28.933,1.033 C28.933,0.462 29.396,-0.001 29.967,-0.001 L37.200,-0.001 C37.770,-0.001 38.233,0.462 38.233,1.033 L38.233,5.166 C38.233,5.737 37.770,6.200 37.200,6.200 L33.067,6.200 C32.496,6.200 32.033,5.737 32.033,5.166 C32.033,4.596 32.496,4.133 33.067,4.133 L36.167,4.133 L36.167,2.067 L31.000,2.067 L31.000,8.266 L54.767,8.266 C55.337,8.266 55.800,8.729 55.800,9.300 L55.800,25.833 C55.800,26.403 55.337,26.866 54.767,26.866 Z"/>
                                    </svg>
                                </figure>
                                <div class="info">
                                    <ul class="advanced">
                                        <li>20 Users</li>
                                        <li>30 Projects</li>
                                        <li>10 E-mail accounts</li>
                                        <li>5 Domains</li>
                                    </ul>
                                    <div class="price">
                                        <span>80.00</span>
                                        <span>M</span>
                                    </div>
                                    <a href="#" class="au-btn business au-btn-hover">Purchase</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <h4 class="title">Premium</h4>
                                <figure class="display-flex-center premium">
                                    <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="63px" height="63px">
                                    <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
                                    d="M61.950,63.000 C61.370,63.000 60.900,62.529 60.900,61.949 L60.900,27.300 L49.350,27.300 C48.770,27.300 48.300,26.829 48.300,26.250 C48.300,25.670 48.770,25.200 49.350,25.200 L60.900,25.200 L60.900,24.149 C60.900,23.570 61.370,23.099 61.950,23.099 C62.530,23.099 63.000,23.570 63.000,24.149 L63.000,61.949 C63.000,62.529 62.530,63.000 61.950,63.000 ZM47.249,19.950 C47.065,19.950 46.878,19.901 46.709,19.800 L31.500,10.674 L16.291,19.800 C15.794,20.098 15.147,19.937 14.850,19.441 C14.551,18.943 14.713,18.298 15.209,18.000 L30.450,8.855 L30.450,1.049 C30.450,0.470 30.920,-0.001 31.500,-0.001 L38.850,-0.001 C39.429,-0.001 39.900,0.470 39.900,1.049 L39.900,5.250 C39.900,5.829 39.429,6.299 38.850,6.299 L34.650,6.299 C34.070,6.299 33.600,5.829 33.600,5.250 C33.600,4.670 34.070,4.200 34.650,4.200 L37.800,4.200 L37.800,2.100 L32.550,2.100 L32.550,8.855 L47.791,18.000 C48.287,18.298 48.449,18.943 48.150,19.440 C47.953,19.768 47.606,19.950 47.249,19.950 ZM13.650,27.300 L2.100,27.300 L2.100,35.700 C2.100,36.279 1.630,36.750 1.050,36.750 C0.470,36.750 -0.000,36.279 -0.000,35.700 L-0.000,24.149 C-0.000,23.570 0.470,23.099 1.050,23.099 C1.630,23.099 2.100,23.570 2.100,24.150 L2.100,25.200 L13.650,25.200 C14.229,25.200 14.700,25.670 14.700,26.250 C14.700,26.829 14.229,27.300 13.650,27.300 ZM5.250,37.800 C10.440,37.800 10.500,51.313 10.500,51.449 C10.500,53.985 8.693,56.105 6.300,56.593 L6.300,61.949 C6.300,62.529 5.829,63.000 5.250,63.000 C4.670,63.000 4.200,62.529 4.200,61.949 L4.200,56.593 C1.807,56.105 -0.000,53.985 -0.000,51.449 C-0.000,51.313 0.060,37.800 5.250,37.800 ZM5.250,54.599 C6.987,54.599 8.400,53.187 8.400,51.449 C8.400,46.218 6.995,39.900 5.250,39.900 C3.505,39.900 2.100,46.218 2.100,51.449 C2.100,53.187 3.513,54.599 5.250,54.599 ZM7.350,35.700 C6.770,35.700 6.300,35.229 6.300,34.650 L6.300,32.550 C6.300,31.970 6.770,31.500 7.350,31.500 L11.550,31.500 C12.130,31.500 12.600,31.970 12.600,32.550 L12.600,38.849 C12.600,39.429 12.130,39.900 11.550,39.900 C10.970,39.900 10.500,39.429 10.500,38.849 L10.500,33.600 L8.400,33.600 L8.400,34.650 C8.400,35.229 7.929,35.700 7.350,35.700 ZM16.800,53.549 L16.800,23.099 C16.800,22.520 17.270,22.049 17.850,22.049 C18.430,22.049 18.900,22.520 18.900,23.099 L18.900,53.549 C18.900,54.129 18.430,54.599 17.850,54.599 C17.270,54.599 16.800,54.129 16.800,53.549 ZM28.350,27.300 L24.150,27.300 C23.570,27.300 23.100,26.829 23.100,26.250 L23.100,19.950 C23.100,19.370 23.570,18.900 24.150,18.900 L28.350,18.900 C28.929,18.900 29.400,19.370 29.400,19.950 L29.400,26.250 C29.400,26.829 28.929,27.300 28.350,27.300 ZM27.300,20.999 L25.200,20.999 L25.200,25.200 L27.300,25.200 L27.300,20.999 ZM29.400,38.849 C29.400,39.429 28.929,39.900 28.350,39.900 L24.150,39.900 C23.570,39.900 23.100,39.429 23.100,38.849 L23.100,38.849 L23.100,32.550 C23.100,31.970 23.570,31.500 24.150,31.500 L28.350,31.500 C28.929,31.500 29.400,31.970 29.400,32.550 L29.400,38.849 ZM27.300,33.600 L25.200,33.600 L25.200,37.800 L27.300,37.800 L27.300,33.600 ZM38.850,27.300 L34.650,27.300 C34.070,27.300 33.600,26.829 33.600,26.250 L33.600,19.950 C33.600,19.370 34.070,18.900 34.650,18.900 L38.850,18.900 C39.429,18.900 39.900,19.370 39.900,19.950 L39.900,26.250 C39.900,26.829 39.429,27.300 38.850,27.300 ZM37.800,20.999 L35.700,20.999 L35.700,25.200 L37.800,25.200 L37.800,20.999 ZM39.900,38.849 C39.900,39.429 39.429,39.900 38.850,39.900 L34.650,39.900 C34.070,39.900 33.600,39.429 33.600,38.849 L33.600,32.550 C33.600,31.970 34.070,31.500 34.650,31.500 L38.850,31.500 C39.429,31.500 39.900,31.970 39.900,32.550 L39.900,38.849 ZM37.800,33.600 L35.700,33.600 L35.700,37.800 L37.800,37.800 L37.800,33.600 ZM44.100,53.549 L44.100,22.049 C44.100,21.470 44.570,20.999 45.150,20.999 C45.730,20.999 46.200,21.470 46.200,22.049 L46.200,53.549 C46.200,54.129 45.730,54.599 45.150,54.599 C44.570,54.599 44.100,54.129 44.100,53.549 ZM50.400,57.750 C50.400,58.329 49.929,58.800 49.350,58.800 L13.650,58.800 C13.070,58.800 12.600,58.329 12.600,57.749 C12.600,57.170 13.070,56.700 13.650,56.700 L23.100,56.700 L23.100,46.200 L22.050,46.200 C21.470,46.200 21.000,45.729 21.000,45.150 C21.000,44.570 21.470,44.100 22.050,44.100 L40.950,44.100 C41.529,44.100 42.000,44.570 42.000,45.150 C42.000,45.729 41.529,46.200 40.950,46.200 L39.900,46.200 L39.900,56.700 L49.350,56.700 C49.929,56.700 50.400,57.170 50.400,57.750 ZM30.450,52.499 C29.870,52.499 29.400,52.029 29.400,51.449 C29.400,50.870 29.870,50.400 30.450,50.400 L30.450,46.200 L25.200,46.200 L25.200,56.700 L30.450,56.700 L30.450,52.499 ZM37.800,46.200 L32.550,46.200 L32.550,50.400 C33.129,50.400 33.600,50.870 33.600,51.449 C33.600,52.029 33.129,52.500 32.550,52.500 L32.550,56.700 L37.800,56.700 L37.800,46.200 ZM9.450,60.899 L53.550,60.899 C54.130,60.899 54.600,61.370 54.600,61.949 C54.600,62.529 54.130,63.000 53.550,63.000 L9.450,63.000 C8.870,63.000 8.400,62.529 8.400,61.949 C8.400,61.370 8.870,60.899 9.450,60.899 ZM55.650,40.950 L51.450,40.950 C50.870,40.950 50.400,40.479 50.400,39.900 L50.400,33.600 C50.400,33.020 50.870,32.550 51.450,32.550 L55.650,32.550 C56.229,32.550 56.700,33.020 56.700,33.600 L56.700,39.900 C56.700,40.479 56.229,40.950 55.650,40.950 ZM54.600,34.650 L52.500,34.650 L52.500,38.849 L54.600,38.849 L54.600,34.650 ZM50.400,52.499 L50.400,46.199 C50.400,45.620 50.870,45.149 51.450,45.149 L55.650,45.149 C56.229,45.149 56.700,45.620 56.700,46.199 L56.700,52.499 C56.700,53.079 56.229,53.549 55.650,53.549 L51.450,53.549 C50.870,53.549 50.400,53.079 50.400,52.499 ZM52.500,51.449 L54.600,51.449 L54.600,47.249 L52.500,47.249 L52.500,51.449 Z"/>
                                    </svg>
                                </figure>
                                <div class="info">
                                    <ul class="advanced">
                                        <li>50 Users</li>
                                        <li>80 Projects</li>
                                        <li>20 E-mail accounts</li>
                                        <li>10 Domains</li>
                                    </ul>
                                    <div class="price">
                                        <span>120.00</span>
                                        <span>M</span>
                                    </div>
                                    <a href="#" class="au-btn premium au-btn-hover">Purchase</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lastest news -->
        <section class="blog section-padding-large background-grey">
            <div class="container">
                <div class="section-title section-title-left">
                    <h2>Latest News</h2>
                </div>
                <div class="blog-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item hover-scale">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-blog-1.jpg')) }}" alt="">
                                    </a>
                                    <div class="hover-border">
                                        <a href="single.html">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single.html">
                                            Technologies Driving Digital Transformation
                                        </a>
                                    </h3>
                                    <p class="desc">
                                        Lobortis scelerisque fermentum  faucibus in ornare quam. Fringilla est ullamcorper eget nulla facilisi etiam dignissim.
                                    </p>
                                    <div class="meta">
                                        <span class="date"><i class="far fa-calendar"></i>24 June,2018</span>
                                        <span class="likes">
                                            <i class="fas fa-heart"></i>22 Likes
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item hover-scale">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-blog-2.jpg')) }}" alt="">
                                    </a>
                                    <div class="hover-border">
                                        <a href="single.html">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single.html">
                                            Skills Training: The Fuel for Great Performance Reviews
                                        </a>
                                    </h3>
                                    <p class="desc">
                                        Fringilla scelerisque fermentum  faucibus in ornare quam. Fringilla est ullamcorper eget nulla facilisi etiam dignissim.
                                    </p>
                                    <div class="meta">
                                        <span class="date"><i class="far fa-calendar"></i>26 June,2018</span>
                                        <span class="likes">
                                            <i class="fas fa-heart"></i>25 Likes
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item hover-scale">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ (Theme::url('public/visual_style/images/home1-blog-3.jpg')) }}" alt="">
                                    </a>
                                    <div class="hover-border">
                                        <a href="single.html">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single.html">
                                            Free eBook: 2019's Top 8 IT Certifications
                                        </a>
                                    </h3>
                                    <p class="desc">
                                        Volutpat lacus laoreet non curabitr. Feugiat pretium nibh ipsum consequat nisl vel pretium lectus massa placera.
                                    </p>
                                    <div class="meta">
                                        <span class="date"><i class="far fa-calendar"></i>26 June,2018</span>
                                        <span class="likes">
                                            <i class="fas fa-heart"></i>15 Likes
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer page -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-info">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ (Theme::url('public/visual_style/images/logo-white.png')) }}" alt="SmartEdu"></a>
                            </div>
                            <p class="footer-intro">
                                Proin libero nunc conseq interdum varius sit amet. Metus ali elei mi in nulla posuere. Tortor preti viverra suspendisse potenti nul ac.
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
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-menu">
                            <div class="footer-title">
                                <h4>Link Useful</h4>
                            </div>
                            <div class="footer-link-menu">
                                <ul>
                                    <li><a href="#"><i class="la la-angle-right"></i>Courses</a></li>
                                    <li><a href=""><i class="la la-angle-right"></i>Teacher</a></li>
                                    <li><a href=""><i class="la la-angle-right"></i>Graduation</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>International</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Support</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="la la-angle-right"></i>About Us</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Partner</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Blog Post</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Events</a></li>
                                    <li><a href="#"><i class="la la-angle-right"></i>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-gallery">
                            <div class="footer-title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="footer-gallery-content">
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-1.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-1.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-2.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-2.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-3.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-3.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-4.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-4.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-5.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-5.jpg')) }}" alt="">
                                    </a>
                                </figure>
                                <figure>
                                    <a href="{{ (Theme::url('public/visual_style/images/footer-gallery-6.jpg')) }}" class="grouped_elements" data-fancybox="gallery">
                                        <img src="{{ (Theme::url('public/visual_style/images/footer-gallery-6.jpg')) }}" alt="">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-contact">
                            <div class="footer-title">
                                <h4>Infomation</h4>
                            </div>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>SmartEdu, 20th St, New York, NY 10003</span>
                                </li>
                                <li class="footer-phone">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>+1 333-444-5555</span>
                                </li>
                                <li class="footer-fax">
                                    <i class="fas fa-fax"></i>
                                    <span>+1 333-444-5555</span>
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <span>info@smartedu.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="copyright">Copyright @ 2019 <span>SmartEdu</span>. <a class="au-btn-buy" href="https://themeforest.net/cart/add_items?item_ids=23218895">Get The Template</a></p>

                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- JS -->

    <!-- Jquery and Boostrap library -->
    <script src="{{ (Theme::url('public/visual_style/vendor/bootstrap/js/popper.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/jquery/jquery.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/bootstrap/js/bootstrap.min.js')) }}"></script>

    <!-- Other js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
    <script src="{{ (Theme::url('public/visual_style/js/theme-map.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/jquery.countdown.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/masonry.pkgd.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/imagesloaded.pkgd.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/isotope-docs.min.js')) }}"></script>

    <!-- Vendor JS -->
    <script src="{{ (Theme::url('public/visual_style/vendor/slick/slick.min.js')) }}"></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/jquery-ui/jquery-ui.min.js')) }}'></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/waypoints/lib/jquery.waypoints.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/jquery-validation/dist/jquery.validate.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/sweetalert/sweetalert.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/fancybox/dist/jquery.fancybox.min.js')) }}"></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/fullcalendar/lib/moment.min.js')) }}'></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/fullcalendar/fullcalendar.min.js')) }}'></script>
    <script src='{{ (Theme::url('public/visual_style/vendor/wow/dist/wow.min.js')) }}'></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ (Theme::url('public/visual_style/vendor/revolution/js/jquery.themepunch.tools.min.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/vendor/revolution/js/jquery.themepunch.revolution.min.js')) }}"></script>

    <!-- Form JS -->
    <script src="{{ (Theme::url('public/visual_style/js/validate-form.js')) }}"></script>
    <script src="{{ (Theme::url('public/visual_style/js/config-contact.js')) }}"></script>

    <!-- Main JS -->
    <script src="{{ (Theme::url('public/visual_style/js/main.js')) }}"></script> 

</body>

</html>