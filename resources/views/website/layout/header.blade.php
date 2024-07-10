<div class="top-bar-area bg-dark text-light inline inc-border">
  <div class="container-full">
      <div class="row align-center">
          
          <div class="col-lg-7 col-md-12 left-info">
              <div class="item-flex">
                  <ul class="list">
                      <li>
                        <i class="fas fa-phone"></i> Have any question?
                        {!! getSiteSetting('social_phone') !!}
                      </li>
                  </ul>
              </div>
          </div>

          <div class="col-lg-5 col-md-12 right-info">
              <div class="item-flex">
                  <div class="social">
                         @include('website.component.social-media')
                  </div>
              </div>
          </div>

      </div>
  </div>
</div>

<header id="home">

  <!-- Start Navigation -->
  <div class="wrap-sticky" style="height: 92px;"><nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav on no-full">

      <div class="container-full">

          <!-- Start Atribute Navigation -->
          <div class="attr-nav">
          </div>        
          <!-- End Atribute Navigation -->

          <!-- Start Header Navigation -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{ asset('Innov8itcode/assets/img/logo.png') }}" class="logo" alt="Logo">
              </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li>
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                  <a href="{{ url('about') }}">About Us</a>
                </li>
                <li>
                  <a href="{{ url('course') }}">Courses</a>
                </li>
                <li><a href="{{ url('faq') }}">Faq</a></li>
                <li><a href="{{ url('blog') }}">Blog</a></li>
  
                <li>
                  <a href="{{ url('contact') }}">Contact</a>
                </li>
              </ul>
          </div><!-- /.navbar-collapse -->
      </div>

  </nav></div>
  <!-- End Navigation -->

</header>