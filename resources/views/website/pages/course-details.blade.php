@extends('website.layout.app')

@section('content')

<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{ $course->getImageUrlAttribute() }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ $course->title }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li class=""><a href="{{ url('/course') }}">Courses</a></li>
                    <li class="active">{{ $course->title }}</li>

                </ul>
            </div>
        </div>
    </div>
</div>


<div class="course-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 info">

                <div class="top-info">
                    <h2>{{ $course->title }}</h2>
                    <ul>
                        <li>
                            <div class="thumb">
                                <img src="{{ $course->advisor->getImageUrlAttribute() }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <span>Teacher</span>
                                <h5>{{ $course->advisor->name }}</h5>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <span>Category</span>
                                <h5>{{ $course->category}}</h5>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="info">
                                <span>Last Update</span>
                                <h5>January 24, 2021</h5>
                            </div>
                        </li> --}}
                    </ul>
                </div>

                <div class="main-content">
                    <div class="center-tabs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">Curriculum</a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">Advisor</a>
                            </li>
                        </ul>
                        <div id="tabsContent" class="tab-content">
                            <div id="tab1" class="tab-pane overview fade active show">
                                <h4>Course Desscription</h4>
                                 {!! $course->description !!}
                            </div>
                            <div id="tab2" class="tab-pane curriculum fade">
                                 {!! $course->curriculum!!}
                            </div>
                            <div id="tab3" class="tab-pane advisor fade">
                                <div class="advisor-items">
                                    <!-- Single Item -->
                                    @foreach ($course->advisors as $advisor )
                                    <div class="single-item">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 thumb">
                                                <img src="{{ $advisor->getImageUrlAttribute() }}" alt="Advisor">
                                            </div>
                                            <div class="col-lg-8 col-md-8 info">
                                                <h4>{{ $advisor->name }}</h4>
                                                <span>{{ $advisor->designation }}</span>
                                                {{-- <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>4.8 ({{ $advisor->rating }} )</span>
                                                </div> --}}
                                                <p>
                                                  {!! $advisor->overview !!}
                                                </p>
                                                {{-- <ul>
                                                    <li><i class="fas fa-play"></i> {{ $advisor->count_of_courses }} Courses</li>
                                                    <li><i class="fas fa-comment-alt"></i> {{ $advisor->rating }} Rating</li>
                                                    <li><i class="fas fa-users"></i> {{ $advisor->students_taught }} Students</li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 sidebar">
                <!-- Single Item -->
                <div class="item course-preview">
                    <div class="thumb">
                        <img src="{{ $course->getImageUrlAttribute() }}" alt="Thumb">
                        {{-- <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a> --}}
                    </div>
                    <div class="content">
                        <div class="top">
                            <div class="pricce">
                                <h2>Rs. {{  $course->price }}</h2>
                            </div>
                            <div class="rating">
                                {{-- <span>{{  $course->rating }} </span> --}}
                            </div>
                        </div>
                        <div class="course-includes">
                            <ul>
                                <li>
                                    <i class="fas fa-copy"></i> Lectures <span class="float-right">{{ $course->lectures }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-clock"></i> Duration <span class="float-right">{{ $course->duration }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">{{ $course->skill_level }}</span>
                                </li>
                                {{-- <li>
                                    <i class="fas fa-language"></i> Language <span class="float-right">{{ $course->language}}</span>
                                </li> --}}
                                <li>
                                    <i class="fas fa-users"></i> Students <span class="float-right">{{ $course->students }}</span>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-theme effect btn-sm" href="#registration-block">Enroll Now</a>
                    </div>
                </div>
                <!-- Single Item -->

                <!-- Single Item -->
                {{-- <div class="item related-course">
                    <div class="content">
                        <h4>Related Courses</h4>
                        <div class="related-courses-items">
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/thumb/1.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="#">How to Make Beautiful Landscape photos?</a>
                                        </h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (1.3k)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Tami Bua</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/thumb/6.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="#">Learn PHP Programming From Scratch</a>
                                        </h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (6k)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">John Bro</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/thumb/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="#">Profession paython learing</a>
                                        </h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23k)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Spany Paul</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End Single Item -->
                
            </div>
        </div>
    </div>
</div>

@include('website.component.registration')


@endsection

@push('scripts')
 
@endpush