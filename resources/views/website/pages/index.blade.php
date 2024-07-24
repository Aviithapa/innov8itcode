
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
            @foreach ($courses  as $course )
            <div class="single-item col-lg-4 col-md-6">
              <div
                class="item"
                style="background-image: url({{ $course->getImageUrlAttribute() }})"
              >
                <a href="{{ url('course-detail/' . $course->id) }}">
                  <span>{{ $course->lectures }} Lectures</span>
                  <div class="title">
                    <i class="flaticon-science"></i>
                    <h4>{{ $course->title }}</h4>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
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
              <a class="btn btn-md btn-gradient" href="#registration-block">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Scholarship Us -->

    @include('website.component.advisor')


    @include('website.component.registration')

    {{-- @include('website.component.testimonial') --}}

    
@endsection

