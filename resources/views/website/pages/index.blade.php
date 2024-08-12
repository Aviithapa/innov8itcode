@extends('website.layout.app')

@section('content')

<!-- Start Banner -->
@include('website.component.banner', ['banners' => $banners])
<!-- End Banner -->

<!-- Star Facilities -->
@include('website.component.facility')
<!-- End Facilities -->

<!-- Star Categories Area -->
<div class="categories-area default-padding-bottom bottom-less fade-out-section'">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="site-heading text-center">
          <h5>{{ isset($department) ? $department->title : ""}}</h5>
          <h2>{{  isset($department) ? $department->excerpt : "" }}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="category-box text-light">
      <div class="row">
        <!-- Single Item -->
        @foreach ($courses as $index => $course)
        <div class="col-lg-4 col-md-6 {{ $index % 2 == 0 ? 'fadeInRight' : 'fadeInLeft' }}" style="border: 2px solid #e5e7e8; padding: 10px; border-radius: 10px;">
          <a href="{{ url('course-detail/' . $course->id) }}">
          <div class="item" style="background-image: url({{ $course->getImageUrlAttribute() }}); height: 200px;"> </div>
            <div class="course-description" style="color: #000 !important; display:block; margin-top: 10px;">
              <h6 style="color: #636363; display: flex; align-items: center; "><i style="font-size: 26px; margin-right: 10px;" class="flaticon-science"></i> {{ $course->category }}</h6>
              <h4 style="color: #000; font-weight: 500; font-size: 18px;"> {{ $course->title }}</h4>
              <div>{!! truncateText($course->description, 100) !!}</div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- End Categories -->

<!-- Star Scholarship Area -->
<div class="scholarship-area bg-gray default-padding">
  <div class="container">
    <div class="item-box">
      <div class="row align-center fade-in-section fadeInLeft">
        <div class="col-lg-6 thumb">
          <div class="thumb-box">
            <img src="{{ $home_about->getImageUrlAttribute() }}" alt="Thumb" style="
              height: 500px;
              margin-left: 90px;
              margin-top: -80px;
              border-bottom-right-radius: 54% 46%;
              border-bottom-left-radius: 54% 34%;
              "/>
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

@push('scripts')

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.fade-in-section');
    const sectionFadeOut = document.querySelectorAll('.fade-out-section');

    const options = {
      root: null, // relative to the viewport
      rootMargin: '0px',
      threshold: 0.1 // triggers the callback when 10% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          console.log(entry.target.classList);
          entry.target.classList.add('animate__animated', 'animate__fadeIn');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    sections.forEach(section => {
      observer.observe(section);
    });

    const observerFadeOut = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate__animated', 'animate__fadeOut');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    sectionFadeOut.forEach(section => {
      observerFadeOut.observe(section);
    });

    



  });
</script>


@endpush

@endsection

