
@extends('website.layout.app')

@section('content')
  
    <!-- Star Google Maps
       ============================================= -->
    <div class="contact-area default-padding-top">
      <div class="container">
        <div class="contact-items">
          <div class="row align-center">
            <div class="col-lg-4 left-item">
              <div class="info-items">
                <!-- Single Item -->
                <div class="item">
                  <div class="icon">
                    <i class="fas fa-map-marked-alt"></i>
                  </div>
                  <div class="info">
                    <h5>Location</h5>
                    <p>{!! getSiteSetting('contact_details') !!}</p>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                  <div class="icon">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="info">
                    <h5>Make a Call</h5>
                    <p>{{ getSiteSetting('social_phone') }}</p>
                  </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="item">
                  <div class="icon">
                    <i class="fas fa-envelope-open"></i>
                  </div>
                  <div class="info">
                    <h5>Send a Mail</h5>
                    <p>{{ getSiteSetting('email') }}</p>
                  </div>
                </div>
                <!-- End Single Item -->
              </div>
            </div>
            <div class="col-lg-8 right-item">
              <h5>Need Help?</h5>
              <h2>Keep in Touch</h2>
              <form action="{{ url('contact') }}" method="POST">
                <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                          <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="{{ old('name') }}" />
                          @if ($errors->has('name'))
                              <span class="alert-error">{{ $errors->first('name') }}</span>
                          @endif
                      </div>
                  </div>
              </div>
                <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-control" id="email" name="email" placeholder="Email*" type="email" value="{{ old('email') }}" />
                          @if ($errors->has('email'))
                              <span class="alert-error">{{ $errors->first('email') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" value="{{ old('phone') }}" />
                          @if ($errors->has('phone'))
                              <span class="alert-error">{{ $errors->first('phone') }}</span>
                          @endif
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="form-group">
                          <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *">{{ old('message') }}</textarea>
                          @if ($errors->has('message'))
                              <span class="alert-error">{{ $errors->first('message') }}</span>
                          @endif
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <button type="submit" name="submit" id="submit" class="btn btn-primary">
                          Send Message <i class="fa fa-paper-plane"></i>
                      </button>
                  </div>
              </div>
                <!-- Alert Message -->
                <div class="col-lg-12 alert-notification">
                  <div id="message" class="alert-msg"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
      <div class="google-maps">
        <iframe title="Location" src="{{ getSiteSetting('location') }}"
        ></iframe>
      </div>
    </div>
    <!-- End Google Maps -->
   

@endsection