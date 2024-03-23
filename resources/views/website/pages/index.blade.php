
@extends('website.layout.app')

@section('content')

   

      <!-- Start Banner 
    ============================================= -->
    <div class="banner-area bg-gray transparent-nav default bottom-large">
      <div
        id="bootcarousel"
        class="carousel text-light slide carousel-fade animate_text"
        data-ride="carousel"
      >
        <!-- Indicators for slides -->
        <div class="carousel-indicator">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <ol class="carousel-indicators">
                  <li
                    data-target="#bootcarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#bootcarousel" data-slide-to="1"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
          <div class="carousel-item active">
            <div
              class="slider-thumb bg-cover"
              style="background-image: url(assets/img/2440x1578.png)"
            ></div>
            <div class="box-table shadow dark">
              <div class="box-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-9">
                      <div class="content">
                        <h2 data-animation="animated fadeInRight">
                          Mastering the Core of Engineering
                          <strong>Innov8itcode</strong>
                        </h2>
                        <p data-animation="animated slideInLeft">
                          Your Launchpad to Tech Brilliance!
                        </p>
                        <a
                          data-animation="animated fadeInUp"
                          class="btn btn-md btn-gradient"
                          href="#"
                          >Discover More</a
                        >
                        <a
                          data-animation="animated fadeInUp"
                          class="btn btn-md btn-light border"
                          href="#"
                          >View Courses</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div
              class="slider-thumb bg-cover"
              style="background-image: url(assets/img/2440x1578.png)"
            ></div>
            <div class="box-table shadow dark">
              <div class="box-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-9">
                      <div class="content">
                        <h2 data-animation="animated fadeInRight">
                          Our Goal is <strong>Achiving Success</strong>
                        </h2>
                        <p data-animation="animated slideInLeft">
                          Empowering Engineers, Building Futures with unlocking
                          Engineering excellence
                        </p>
                        <a
                          data-animation="animated fadeInUp"
                          class="btn btn-md btn-gradient"
                          href="#"
                          >Discover More</a
                        >
                        <a
                          data-animation="animated fadeInUp"
                          class="btn btn-md btn-light border"
                          href="#"
                          >View Courses</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a
          class="left carousel-control light"
          href="#bootcarousel"
          data-slide="prev"
        >
          <i class="ti-angle-left"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="right carousel-control light"
          href="#bootcarousel"
          data-slide="next"
        >
          <i class="ti-angle-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- End Banner -->

    <!-- Star Facilities
    ============================================= -->
    <div class="facilities-area default-padding">
      <div class="container">
        <div class="facilities-box">
          <div class="row">
            <div
              class="col-lg-6 thumb"
              style="background-image:  url({{ asset('innov8itcode/assets/img/800x800.png') }})"
            ></div>
            <div class="col-lg-6 offset-lg-6 info">
              <div class="content-box">
                <div class="heading">
                  <h5>Top Facilities</h5>
                  <h2>Our Facilities</h2>
                </div>
                <div class="facilities-items">
                  <div class="item">
                    <div class="icon">
                      <img src="{{ asset('innov8itcode/assets/img/100x100.png') }}" alt="Thumb" />
                      <i class="fas fa-code"></i>
                    </div>
                    <div class="info">
                      <h4>State-of-the-art Coding Labs</h4>
                      <p>
                        Equipped with the latest technology and software tools
                        for immersive learning experiences.
                      </p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="icon">
                      <img src="{{ asset('innov8itcode/assets/img/100x100.png') }}" alt="Thumb" />
                      <i class="fas fa-table"></i>
                    </div>
                    <div class="info">
                      <h4>Collaborative Workspace</h4>
                      <p>
                        Engage with fellow students and industry professionals
                        in a collaborative learning environment
                      </p>
                    </div>
                  </div>
                </div>
                <div class="fun-factors">
                  <div class="fun-fact">
                    <div class="timer" data-to="1800" data-speed="5000">
                      1800
                    </div>
                    <span class="medium">Students</span>
                  </div>
                  <div class="fun-fact">
                    <div class="timer" data-to="68" data-speed="5000">68</div>
                    <span class="medium">Courses</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Facilities -->

    <!-- Star Categories Area
    ============================================= -->
    <div class="categories-area default-padding-bottom bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h5>Departments</h5>
              <h2>Popular Departments</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="category-box text-light">
          <div class="row">
            <!-- Single Item -->
            <div class="single-item col-lg-4 col-md-6">
              <div
                class="item"
                style="background-image: url({{ asset('innov8itcode/assets/img/800x600.png') }})"
              >
                <a href="#">
                  <span>01 Courses</span>
                  <div class="title">
                    <i class="flaticon-science"></i>
                    <h4>Frontend Engineering</h4>
                  </div>
                </a>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="single-item col-lg-4 col-md-6">
              <div
                class="item"
                style="background-image: url({{ asset('innov8itcode/assets/img/800x600.png') }})"
              >
                <a href="#">
                  <span>01 Courses</span>
                  <div class="title">
                    <i class="flaticon-meeting"></i>
                    <h4>Backend Engineering</h4>
                  </div>
                </a>
              </div>
            </div>
            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="single-item col-lg-4 col-md-6">
              <div
                class="item"
                style="background-image: url({{ asset('innov8itcode/assets/img/800x600.png') }})"
              >
                <a href="#">
                  <span>Development</span>
                  <div class="title">
                    <i class="flaticon-book-1"></i>
                    <h4>Web Development</h4>
                  </div>
                </a>
              </div>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Categories -->

    <!-- Star Scholarship Area
    ============================================= -->
    <div class="scholarship-area bg-gray default-padding">
      <div class="container">
        <div class="item-box">
          <div class="row align-center">
            <div class="col-lg-6 thumb">
              <div class="thumb-box">
                <img src="{{ asset('innov8itcode/assets/img/illustration/5.png') }}" alt="Thumb" />
              </div>
            </div>
            <div class="col-lg-6 info">
              <h2>Innov8itcode</h2>
              <p>
                At Innov8itcode, we are more than just a coding academy. We are
                a hub for aspiring engineers seeking to master the core
                principles of backend and frontend engineering. Our mission is
                to provide comprehensive education, focusing on the fundamental
                concepts that drive technological innovation. With a team of
                experienced mentors and industry experts, we offer dynamic
                courses designed to equip students with the skills and knowledge
                needed to excel in the rapidly evolving tech landscape. Whether
                you're a beginner or a seasoned professional, Innov8itcode is
                your partner on the journey to engineering excellence.
              </p>
              <ul>
                <li>
                  <div class="content">
                    <h4>Nationality</h4>
                    <p>
                      Discourse unwilling am no described dejection incommode no
                      listening of. Before nature his parish boy.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="content">
                    <h4>Level of study</h4>
                    <p>
                      Discourse unwilling am no described dejection incommode no
                      listening of. Before nature his parish boy.
                    </p>
                  </div>
                </li>
              </ul>
              <a class="btn btn-md btn-gradient" href="#">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Scholarship Us -->

    <!-- Star Event Area
    ============================================= -->
    <div class="event-area default-padding bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h5>New Event</h5>
              <h2>
                Upcoming Education Events <br />
                To feed your Brain.
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="event-box">
          <div class="row">
            <!-- Single Event -->
            <div class="single-item col-lg-6">
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('innov8itcode/assets/img/800x600.png') }}" alt="Thumb" />
                </div>
                <div class="info">
                  <div class="content">
                    <div class="top-info">
                      <ul>
                        <li>
                          <i class="fas fa-calendar-alt"></i> December 25, 2020
                        </li>
                        <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                      </ul>
                    </div>
                    <h4>
                      <a href="#">International Conference on Art</a>
                    </h4>
                    <p>
                      Early had add equal china quiet visit. Appear an manner as
                      no limits either praise in. In in written on charmed
                      justice is amiable farther besides. Law insensible
                      middletons unsatiable for apartments boy delightful
                      unreserved.
                    </p>
                    <div class="bottom-info">
                      <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        California, TX 70240
                      </div>
                      <a href="#" class="btn circle btn-theme effect btn-sm"
                        >Join Event</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Single Event -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Event Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div
      class="fun-factor-area overflow-hidden bg-gradient text-light default-padding"
    >
      <div class="container">
        <div class="fun-fact-items text-center">
          <!-- Fixed BG -->
          <div
            class="fixed-bg contain"
            style="background-image: url(assets/img/map.svg)"
          ></div>
          <!-- Fixed BG -->
          <div class="row">
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="35" data-speed="5000">35</div>
                  <div class="operator">M</div>
                </div>
                <span class="medium">Learners & counting</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="128" data-speed="5000">128</div>
                  <div class="operator">K</div>
                </div>
                <span class="medium">Total courses</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="12" data-speed="5000">12</div>
                  <div class="operator">+</div>
                </div>
                <span class="medium">Languages</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="90" data-speed="5000">90</div>
                  <div class="operator">%</div>
                </div>
                <span class="medium">Successful students</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Star Advisor Area
    ============================================= -->
    <div class="advisor-area carousel-shadow default-padding">
      <div class="container">
        <div class="heading-left">
          <div class="row">
            <div class="col-lg-5">
              <h5>Team Advisor</h5>
              <h2>Our professional & Expert Team advisor</h2>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <p>
                Everything melancholy uncommonly but solicitude inhabiting
                projection off. Connection stimulated estimating excellence an
                to impression.
              </p>
              <a class="btn btn-md btn-dark border" href="#"
                >View All <i class="fas fa-plus"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="advisor-items text-center">
          <div class="advisor-carousel owl-carousel owl-theme">
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <ul>
                  <li class="facebook">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="info">
                <h5><a href="#">Tejendra Bhandari</a></h5>
                <span>Fullstack Developer</span>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <ul>
                  <li class="facebook">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="info">
                <h5><a href="#">Amos Thagunna</a></h5>
                <span>Account and Marketing</span>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <ul>
                  <li class="facebook">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="info">
                <h5><a href="#">Rajendra Mouny</a></h5>
                <span>Account and Marketing</span>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <ul>
                  <li class="facebook">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="info">
                <h5><a href="#">Dr. Bivek Dahal</a></h5>
                <span>Advisory</span>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <ul>
                  <li class="facebook">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="info">
                <h5><a href="#">Arun Paneru</a></h5>
                <span>Developer</span>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <ul>
                  <li class="facebook">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="twitter">
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li class="linkedin">
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="info">
                <h5><a href="#">Samkisya shah</a></h5>
                <span>Developer</span>
              </div>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Advisor Area -->

    <!-- Start Video Area
    ============================================= -->
    <div
      class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard"
      style="background-image: url(assets/img/2440x1578.png)"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="video-heading">
              <div class="content">
                <h2>Take a short tour in our campus</h2>
                <p>
                  Tolerably behaviour may admitting daughters offending her ask
                  own. Praise effect wishes change way and any wanted. Lively
                  use looked latter regard had. Do he it part more last in.
                  Merits ye if mr narrow points. Melancholy particular
                  devonshire alteration it favourable appearance
                </p>
              </div>
              <a
                class="popup-youtube relative video-play-button"
                href="https://www.youtube.com/watch?v=8GQTt50izkg"
              >
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Video Area -->
    <!-- Clients
    ============================================= -->
    @include('website.layout.clients')
    <!-- End Clients -->
                 
@endsection