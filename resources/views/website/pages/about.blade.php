
@extends('website.layout.app')

@section('content')
  


    <!-- Star About Area
    ============================================= -->
    <div class="about-area default-padding-top">
      <!-- Fixed Shape -->
      <div class="fixed-shape-bottom">
        <img src="{{ asset('innov8itcode/assets/img/shape/12.png') }}" alt="Shape" />
      </div>
      <!-- End Fixed Shape -->
      <div class="container">
        <div class="about-items">
          <div class="row align-center">
            <div class="col-lg-6 info">
              <h2>Turn your ambition into a success story</h2>
              <p>
                At Innov8itcode, we go beyond teaching coding languages – we
                empower aspiring engineers to master the core principles of
                backend and frontend engineering. Our comprehensive courses
                focus on building a strong foundation in engineering concepts,
                equipping you with the skills and knowledge needed to thrive in
                the ever-evolving tech industry. With experienced mentors,
                state-of-the-art facilities, and a collaborative learning
                environment, Innov8itcode is your pathway to engineering
                excellence. Whether you're a beginner or seasoned professional,
                let us help you turn your ambition into a success story. Join us
                at Innov8itcode and unlock your potential today.
              </p>
              <ul>
                <li>
                  <div class="fun-fact">
                    <span class="timer" data-to="168" data-speed="5000"></span>
                    <span class="medium">Online Courses</span>
                  </div>
                </li>
                <li>
                  <div class="fun-fact">
                    <span class="timer" data-to="454" data-speed="5000"></span>
                    <span class="medium">Students</span>
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-6 thumb">
              <img src="{{  asset('innov8itcode/assets/img/illustration/5.png') }}" alt="Thumb" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Area -->

    <!-- Star Why Chose Us
    ============================================= -->
    <div class="why-choseus-area bg-gray default-padding bottom-less">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h5>Why Chose us</h5>
              <h2>
                Everything you Need for your <br />Institute or University
              </h2>
            </div>
          </div>
        </div>
      </div>
      <!-- End Fixed BG -->
      <div class="container-full">
        <div class="info">
          <div class="row">
            <div class="single-item thumb col-lg-5">
              <div class="thumb-box">
                <img src="{{  asset('innov8itcode/assets/img/800x600.png') }}" alt="Thumb" />
                <a
                  href="https://www.youtube.com/watch?v=0U3WN3f52x8"
                  class="popup-youtube light video-play-button item-center"
                >
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>

            <div class="item-box col-lg-7">
              <div class="row">
                <div class="single-item col-lg-6 col-md-6">
                  <div class="item">
                    <span>01</span>
                    <i class="flaticon-library"></i>
                    <h4>Books & Library</h4>
                    <p>
                      Absolute required of reserved in offering no. How sense
                      found our those gay again taken the preserved ikewise law.
                    </p>
                    <ul>
                      <li>Carrel Booking</li>
                      <li>Student Reading Room</li>
                      <li>Science library</li>
                    </ul>
                  </div>
                </div>
                <div class="single-item col-lg-6 col-md-6">
                  <div class="item">
                    <span>02</span>
                    <i class="flaticon-teacher-2"></i>
                    <h4>Certified Teachers</h4>
                    <p>
                      Absolute required of reserved in offering no. How sense
                      found our those gay again taken the preserved ikewise law.
                    </p>
                    <ul>
                      <li>Professional training</li>
                      <li>Present content to students</li>
                      <li>Students responsibility</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Chose Us -->

    <!-- Star Advisor Area
    ============================================= -->
    @include('website.component.advisor')
    <!-- End Advisor Area -->

    @include('website.component.registration')

    <!-- Star Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h5>Gallery</h5>
              <h2>Recent Gallery</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="magnific-mix-gallery masonary">
          <div id="portfolio-grid" class="gallery-items colums-3">
            <!-- Single Item -->
            <div class="pf-item">
              <div class="item-inner">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <div class="effect-info">
                  <a href="assets/img/800x800.png" class="item popup-link">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="pf-item">
              <div class="item-inner">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <div class="effect-info">
                  <a href="assets/img/800x800.png" class="item popup-link">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="pf-item">
              <div class="item-inner">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <div class="effect-info">
                  <a href="assets/img/800x800.png" class="item popup-link">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="pf-item">
              <div class="item-inner">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <div class="effect-info">
                  <a href="assets/img/800x800.png" class="item popup-link">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="pf-item">
              <div class="item-inner">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <div class="effect-info">
                  <a href="assets/img/800x800.png" class="item popup-link">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="pf-item">
              <div class="item-inner">
                <img src="assets/img/800x800.png" alt="Thumb" />
                <div class="effect-info">
                  <a href="assets/img/800x800.png" class="item popup-link">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Gallery -->
    


@endsection