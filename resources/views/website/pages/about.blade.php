
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
              <h2>{{ $about->title }}</h2>
              <p>
               {!! $about->content !!}
              </p>
              
            </div>

            <div class="col-lg-6 thumb">
              <img src="{{   $about->getImageUrlAttribute()  }}" alt="Thumb" />
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
                <img src="{{  $about_video->getImageUrlAttribute() }}" alt="Thumb" />
                <a
                  href="{{ $about_video->excerpt }}"
                  class="popup-youtube light video-play-button item-center"
                >
                  <i class="fa fa-play"></i>
                </a>
              </div>
            </div>

            <div class="item-box col-lg-7">
              <div class="row">
                @foreach ($services as $service)
                <div class="single-item col-lg-6 col-md-6">
                  <div class="item">
                    <span>{{ ++$loop->index }}</span>
                    <i class="{{ $service->logo_image }}"></i>
                    <h4>{{ $service->title }}</h4>
                    {!! $service->content !!}
                  </div>
                </div>
                @endforeach
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
            @foreach ($galleries as $gallery)
              <div class="pf-item">
                <div class="item-inner" style="height: 250px">
                  <img src="{{ $gallery->getImageUrlAttribute() }}" alt="Thumb" style="min-height: 250px; object-fit: cover;" />
                  <div class="effect-info">
                    <a href="{{ $gallery->getImageUrlAttribute() }}" class="item popup-link">
                      <i class="fas fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          
            <!-- End Single Item -->
            
          </div>
        </div>
      </div>
    </div>
    <!-- End Gallery -->
    


@endsection