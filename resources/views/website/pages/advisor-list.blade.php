@extends('website.layout.app')

@section('content')

<div class="advisor-area default-padding bottom-less">
    <div class="container">
        <div class="advisor-items text-center">
            <div class="row">
                <!-- Single Item -->
                @foreach ($advisors as $advisor)
                <div class="single-item col-lg-4 col-md-6">
                    <a href="{{ url('advisor/' . $advisor->id) }}">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ $advisor->getImageUrlAttribute() }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <h4><a href="{{ url('advisor/' . $advisor->id) }}">{{ $advisor->name }}</a></h4>
                            <span>{{ $advisor->designation }}</span>
                        </div>
                    </div>
                    </a>
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