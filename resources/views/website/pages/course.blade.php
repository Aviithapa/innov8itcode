@extends('website.layout.app')

@section('content')

<div class="course-area default-padding bottom-less">

    <!-- Fixed Shape -->
    <div class="fixed-shape">
        <img src="{{ asset('Innov8itcode/assets/img/shape/7.png') }}" alt="Shape">
    </div>
    <!-- End Fixed Shape -->

    <div class="container">
        <div class="courses-box">
            <div class="row">
                <!-- Single item -->
                @foreach ($courses as $course)
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{ url('course-detail/' .$course->id) }}">
                                <img src="{{$course->getImageUrlAttribute() }}" alt="Thumb">
                                <div class="price">
                                    <h5>Rs. {{ $course->price }}</h5>
                                </div>
                            </a>
                        </div>
                        <div class="info">
                            <div class="top-info">
                                <div class="top-meta">
                                    <ul>
                                        <li><i class="fas fa-clock"></i> {{ $course->duration }} Hours</li>
                                        <li><i class="fas fa-list-ul"></i> {{ $course->lectures }}</li>
                                    </ul>
                                </div>
                            </div>
                            <h4>
                                <a href="{{ url('course-detail/' .$course->id) }}">{{ $course->title }}</a>
                            </h4>
                            <div class="meta">
                                <div class="author">
                                    <a href="{{ url('advisor/' .$course->advisor->id) }}">
                                        <img src="{{ $course->advisor->getImageUrlAttribute() }}" alt="Advisor">
                                        <span><strong>{{ $course->advisor->name }}</strong></span>
                                    </a>
                                </div>
                            </div>
                            <div class="bottom-info">
                                <div class="course-info">
                                    <i class="fas fa-user"></i> {{ $course->students }}
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>{{ $course->rating }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                
                <!-- End Single item -->
            </div>
            <div style="padding: 10px; float:right;">
                {{  $courses->appends(request()->query())->links('admin.layout.pagination') }}
            </div>
        </div>
    </div>
</div>

@endsection