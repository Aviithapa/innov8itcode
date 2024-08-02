 <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light" id="footer">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            {{-- <img src="{{ getSiteSetting('logo_image') }}" alt="Logo" height="50"> --}}
                            {{ getSiteSetting('meta_description') }}
                            <div class="subscribe">
                                @if(session('success_news'))
                                    <div class="alert alert-success">
                                        Email has been successfully added to news
                                    </div>
                                @endif
                                <form action="{{ url('subscribe-newsletter') }}" method="POST">
                                    @csrf
                                    <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>  
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li>
                                    <a href="{{ url('course') }}">Courses</a>
                                </li>
                                <li>
                                    <a href="{{ url('advisor-list') }}">Teachers</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Email:</strong> {{ getSiteSetting('email') }}
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> {{ getSiteSetting('social_phone') }}
                                    </li>
                                </ul>
                            </div>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Sun - Friday :  </span>
                                        <div class="float-right"> {{ getSiteSetting('opening_time') }} </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2024. All Rights Reserved by <a href="#">innov8itcode</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        {{-- <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer-->

    {!! getSiteSetting('footer_info')!!}



@push('scripts')
<script>
   document.addEventListener('DOMContentLoaded', function () {
        @if(session('success_news'))
            document.getElementById('footer').scrollIntoView();
        @endif
    });
</script>

@endpush