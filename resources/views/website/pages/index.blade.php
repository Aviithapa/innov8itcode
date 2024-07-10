
@extends('website.layout.app')

@section('content')


      <!-- Start Banner 
    ============================================= -->
    @include('website.component.banner', ['banners' => $banners])
    <!-- End Banner -->

    <!-- Star Facilities
    ============================================= -->
    @include('website.component.facility')
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
                style="background-image: url({{ asset('Innov8itcode/assets/img/800x600.png') }})"
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
                style="background-image: url({{ asset('Innov8itcode/assets/img/800x600.png') }})"
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
                style="background-image: url({{ asset('Innov8itcode/assets/img/800x600.png') }})"
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
                <img src="{{ $home_about->getImageUrlAttribute() }}" alt="Thumb" />
              </div>
            </div>
            <div class="col-lg-6 info">
              {!! $home_about->content !!}
              <a class="btn btn-md btn-gradient" href="#">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Scholarship Us -->

    @include('website.component.advisor')


    @include('website.component.registration')

    @include('website.component.testimonial')



    <!-- Star Event Area
    ============================================= -->
    {{-- <div class="event-area default-padding bottom-less">
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
                  <img src="{{ asset('Innov8itcode/assets/img/800x600.png') }}" alt="Thumb" />
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
    </div> --}}
    <!-- End Event Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area overflow-hidden bg-gradient text-light default-padding">
      <div class="container">
        <div class="fun-fact-items text-center">
          <!-- Fixed BG -->
          <div
            class="fixed-bg contain"
            style="background-image: url({{ asset('Innov8itcode/assets/img/map.svg') }})"
          ></div>
          <!-- Fixed BG -->
          <div class="row">
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="{{ getCount('total_teacher') }}" data-speed="5000"><{{ getCount('total_teacher') }}</div>
                </div>
                <span class="medium">Total Advisor</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="{{ getCount('total_course') }}" data-speed="5000"><{{ getCount('total_course') }}</div>
                </div>
                <span class="medium">Total courses</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 item">
              <div class="fun-fact">
                <div class="counter">
                  <div class="timer" data-to="{{ getCount('total_successful_student') }}" data-speed="5000"><{{ getCount('total_successful_student') }}</div>
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
 
    @include('website.component.blog', ['from' => 'home'])
    <!-- End Advisor Area -->   
    
@endsection

