@extends('website.layout.app')

@section('content')

<div class="advisor-area default-padding bottom-less">
    <div class="container">
        <div class="advisor-items text-center">
            <div class="row">
                <!-- Single Item -->
                @foreach ($advisors as $advisor)
                <div class="single-item col-lg-3 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ $advisor->getImageUrlAttribute() }}" alt="Thumb">
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4><a href="{{ url('advisor/' . $advisor->id) }}">{{ $advisor->name }}</a></h4>
                            <span>{{ $advisor->designation }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
               
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
 
@endpush