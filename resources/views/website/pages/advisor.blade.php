@extends('website.layout.app')

@section('content')

<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/banner/10.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ $advisor->name }}</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Advisor</a></li>
                    <li class="active">{{ $advisor->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="advisor-details-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 basic-info">
                <img src="{{ $advisor->getImageUrlAttribute() }}" alt="Advisor">
                <div class="contact">
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>{{ $advisor->contact_number }}</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>{{ $advisor->email }}</span>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li class="facebook">
                            <a href="{{ $advisor->facebook }}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="{{ $advisor->twitter }}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        
                        <li class="youtube">
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="linkedin">
                            <a href="{{ $advisor->linkedIn }}">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 info">
                <h2>{{ $advisor->name }}</h2>
                <span>{{ $advisor->designation }}</span>
                <ul>
                    <li><i class="fas fa-play"></i> {{ $advisor->count_of_courses }}</li>
                    <li><i class="fas fa-comment-alt"></i> {{ $advisor->rating }}</li>
                    <li><i class="fas fa-users"></i>{{ $advisor->students_taught }}</li>
                </ul>
                <p>
                   {!! $advisor->overview !!}
                </p>
                <div class="achivement">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item-box">
                                <h4>Qualifications</h4>
                                {!! $advisor->qualifications !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item-box">
                                <h4>Experiance</h4>
                                {!! $advisor->experience !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
 
@endpush