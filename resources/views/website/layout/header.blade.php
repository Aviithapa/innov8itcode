  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-gray-tablet inline">
      <div class="container">
        <div class="row align-center">
          <div class="col-lg-9 col-md-12 left-info">
            <div class="item-flex">
              <ul class="list">
                <li>
                  <i class="fas fa-phone"></i> Have any question? +977
                  9867739191
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 right-info">
            <div class="item-flex">
              <div class="language-switcher">
                <div class="dropdown">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    data-toggle="dropdown"
                  >
                    <img src="{{ asset('innov8itcode/assets/img/lan-eng.png') }}" alt="Flag" />
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">English</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Top -->
 
 <!-- Header 
    ============================================= -->
    <header id="home">
      <!-- Start Navigation -->
      <nav
        class="navbar navbar-default inc-top-bar attr-border navbar-fixed white no-background bootsnav"
      >
        <!-- Start Top Search -->
        <div class="container">
          <div class="row">
            <div class="top-search">
              <div class="input-group">
                <form action="#">
                  <input
                    type="text"
                    name="text"
                    class="form-control"
                    placeholder="Search"
                  />
                  <button type="submit">
                    <i class="ti-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Top Search -->

        <div class="container">
          <!-- Start Atribute Navigation -->
          <div class="attr-nav">
            <ul>
              <li class="search">
                <a href="#"><i class="ti-search"></i></a>
              </li>
            </ul>
          </div>
          <!-- End Atribute Navigation -->

          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target="#navbar-menu"
            >
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
              <img src="{{ asset('Innov8itcode/assets/img/logo.png') }}" alt="Innov8itcode"/>
            </a>
          </div>
          <!-- End Header Navigation -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul
              class="nav navbar-nav navbar-right"
              data-in="fadeInDown"
              data-out="fadeOutUp"
            >
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
              <li><a href="{{ url('faq') }}">Blog</a></li>

              <li>
                <a href="{{ url('contact') }}">Contact</a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
      </nav>
      <!-- End Navigation -->
    </header>
    <!-- End Header -->