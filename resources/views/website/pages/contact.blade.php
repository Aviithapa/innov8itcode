
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
                    <p>22 Baker Street, London, United Kingdom, W1U 3BW</p>
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
                    <p>+44-20-7328-4499</p>
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
                    <p>info@yourdomain.com</p>
                  </div>
                </div>
                <!-- End Single Item -->
              </div>
            </div>
            <div class="col-lg-8 right-item">
              <h5>Need Help?</h5>
              <h2>Keep in Touch</h2>
              <form
                action="assets/mail/contact.php"
                method="POST"
                class="contact-form"
              >
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Name"
                        type="text"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email*"
                        type="email"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="Phone"
                        type="text"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group comments">
                      <textarea
                        class="form-control"
                        id="comments"
                        name="comments"
                        placeholder="Tell Us About Project *"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" name="submit" id="submit">
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
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"
        ></iframe>
      </div>
    </div>
    <!-- End Google Maps -->
   

@endsection