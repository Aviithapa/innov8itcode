
@extends('website.layout.app')

@section('content')

<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{ $blog->getImageUrlAttribute() }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ truncateText($blog->title, 30) }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ url('/blog') }}"><i class="fas fa-book"></i> Blog</a></li>
                    <li class="active">{{ $blog->title }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="blog-area single full-blog full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                    <div class="item">

                        <div class="blog-item-box">
                            <!-- Start Post Thumb -->
                            <!-- Start Post Thumb -->

                            <div class="content">
                                <div class="top-info">
                                    {{-- <ul>
                                        <li>
                                            <a href="advisor-single.html"><img src="{{ $blog->getImageUrlAttribute() }}" alt="Author"></a>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i> Aug 18, 2020
                                        </li>
                                    </ul> --}}
                                </div>
                                
                                <h3>{{ $blog->title }}</h3>
                                {!! $blog->content !!}
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