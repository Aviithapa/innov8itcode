@extends('website.layout.app')

@section('content')



<section class="pt-14 md:pt-24 mb-10">
    <div class="container--fluid">
      <div class="portfolio_content">
        <div
          id="portfolio_heading"
          class="translate-y-[80%] transition-transform duration-300 ease-linear"
        >
          <div class="flex justify-center gap-4 mb-4">
            <div class="bars flex gap-1 items-center">
              <div
                class="bar_one w-0.5 h-3 bg-[var(--color-primary)]"
              ></div>
              <div
                class="bar_two w-0.5 h-5 bg-[var(--color-primary)]"
              ></div>
              <div
                class="bar_three w-0.5 h-3 bg-[var(--color-primary)]"
              ></div>
            </div>
            <h2
              class="text-[var(--color-primary)] font-bold uppercase font-manrope"
            >
              Our course
            </h2>
          </div>
          <div class="sub_heading mb-8">
            <h3
              class="text-[2.25rem] leading-[2.8125rem] capitalize text-[var(--color-heading)] font-bold font-manrope text-center"
            >
              Let's check our training courses 
            </h3>
          </div>
        </div>
        <div
          class="profolio_container grid gap-8 md:grid-cols-2 xl:grid-cols-3"
        >
        @foreach ($courses as $course)
        <a href="{{ url('course-detail/' .$course->id) }}" class="mb-3" >
          <div class="portfolio_card px-6 py-6 rounded-[8px] shadow-[0px_2px_20px_rgba(0,_0,_0,_0.1)]" >
            <div class="img_container overflow-hidden">
              <img
                src="{{$course->getImageUrlAttribute() }}"
                class="rounded-[8px] w-full hover:scale-110 transition-transform duration-300 ease-in-out"
                alt=""
              />
            </div>
            <div class="desc text-[var(--color-heading)] font-manrope pt-4">
              <h4 class="text-[#292929] leading-[1.5rem] mb-2">
                {{ $course->category }}
              </h4>
              <h3 class="text-[1.5rem] font-semibold">
                {{ $course->title }}
              </h3>
              <h3 class="text-[var(--color-heading)]">
                <strong class="text-xl">Duration: </strong
                ><span class="font-semibold">3 months</span>
              </h3>
            </div>
          </div>
        </a>
          @endforeach
          <!-- portfolio two -->
          
        </div>
      </div>
    </div>
  </section>


@endsection