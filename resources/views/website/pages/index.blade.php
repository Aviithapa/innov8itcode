@extends('website.layout.app')

@section('content')
    <!-- curtain welcome message -->



<main>
  <section class="pt-10 md:pt-16">
    <div class="container--fluid">
      <div class="banner_content flex flex-col gap-8 py-2 md:flex-row">
        <div
          id="banner_desc"
          class="banner_left order-2 md:order-1 flex-1 -translate-x-full transition-transform duration-500 ease-in-out"
        >
          <div class="banner_description mb-10">
            <h2
              class="text-[2rem] text-[var(--color-heading)] font-semibold leading-[1.19] font-manrope mt-7 mb-6 md:text-[2.25rem] lg:text-[2.75rem] xl:text-[3.5rem]"
            >
              {!! $banners->title !!}
            </h2>
            <p class="leading-[1.75rem]">
              {{ $banners->excerpt }}
            </p>
          </div>
          <div class="banner_links">
            <a
              href="/"
              class="hover_effect inline-block bg-[var(--color-primary)] py-2.5 px-6 rounded-[5px] capitalize text-white text-lg"
            >
              <span> get started </span>
            </a>
          </div>
        </div>
        <div
          id="banner_img"
          class="banner_right order-1 md:order-2 flex-1 translate-x-full transition-transform duration-500 ease-in-out"
        >
          <div
            class="board bg-white px-6 py-6 shadow-[0px_7px_18px_rgba(24,_16,_16,_0.0509803922)]"
          >
            <div class="img_container">
              <img
                src="https://bizper.pixcelsthemes.com/bizper/assets/images/about/about-3.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-16 md:pt-24">
    <div class="container--fluid">
      <div class="services_card_content">
        <div class="card_container grid gap-8 sm:grid-cols-[1fr_1fr] lg:grid-cols-[1fr_1fr_1fr]">
          
          <!-- card 2 -->
          <div
            class="card observer_animation service_card px-6 py-6 flex flex-col items-center gap-5 shadow-[0px_0px_14px_0px_rgba(0,_0,_0,_0.09)] rounded-[5px]"
          >
            <div class="img_section">
              <div class="img_container border-b border-[#e7e7e7] py-2">
                <i class="fas fa-globe fa-4x"></i>
              </div>
            </div>
            <div class="card_description flex flex-col gap-2 items-center">
              <h2
                class="text-[1.375rem] leading-[2.1875rem] font-bold font-manrope text-[var(--color-heading)]"
              >
              Web Development
              </h2>
              <p class="leading-[1.75] text-center">
                Crafting responsive, user-friendly websites tailored to meet your business needs with a focus on performance, security, and scalability.
              </p>
            </div>
            <div class="three_dots flex gap-1">
              <div class="dot_one w-1 h-1 bg-black"></div>
              <div class="dot_two w-1 h-1 bg-black"></div>
              <div class="dot_three w-1 h-1 bg-black"></div>
            </div>
          </div>
          <!-- card 3 -->

          <div class="card observer_animation service_card px-6 py-6 flex flex-col items-center gap-5 shadow-[0px_0px_14px_0px_rgba(0,_0,_0,_0.09)] rounded-[5px]" >
            <div class="img_section">
              <div class="img_container border-b border-[#e7e7e7] py-2">
                <i class="fas fa-mobile-alt fa-4x"></i>
              </div>
            </div>
            <div class="card_description flex flex-col gap-2 items-center">
              <h2
                class="text-[1.375rem] leading-[2.1875rem] font-bold font-manrope text-[var(--color-heading)]"
              >
                App Development
              </h2>
              <p class="leading-[1.75] text-center">
                Building innovative mobile and desktop applications that deliver seamless user experiences and solve real-world problems.
              </p>
            </div>
            <div class="three_dots flex gap-1">
              <div class="dot_one w-1 h-1 bg-black"></div>
              <div class="dot_two w-1 h-1 bg-black"></div>
              <div class="dot_three w-1 h-1 bg-black"></div>
            </div>
          </div>

          <div class="card service_card px-6 py-6 flex flex-col items-center gap-4 shadow-[0px_0px_14px_0px_rgba(0,_0,_0,_0.09)] rounded-[5px] observer_animation">
            <div class="img_section">
              <div class="img_container border-b border-[#e7e7e7] py-2">
                <i class="fas fa-graduation-cap fa-4x"></i>
              </div>
            </div>
            <div class="card_description flex flex-col gap-2 items-center">
              <h2
                class="text-[1.375rem] leading-[2.1875rem] font-bold font-manrope text-[var(--color-heading)]"
              >
              Training & Internship
              </h2>
              <p class="leading-[1.75] text-center">
                Empowering aspiring developers with hands-on training and internship opportunities to kickstart their careers in the tech industry.
              </p>
            </div>
            <div class="three_dots flex gap-1">
              <div class="dot_one w-1 h-1 bg-black"></div>
              <div class="dot_two w-1 h-1 bg-black"></div>
              <div class="dot_three w-1 h-1 bg-black"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-14 md:pt-24">
    <div class="container--fluid">
      <div class="innov8itcode_content flex flex-col md:items-center gap-8 md:flex-row overflow-x-hidden" >
        <div
          id="innov_desc"
          class="innov_left md:flex-1 -translate-x-full transition-transform duration-500 ease-in-out 1"
        >
          <div class="innov_desc">
            <h2
              class="text-[1.75rem] md:text-[2.25rem] mb-8 font-bold text-[var(--color-heading)] leading-10 font-manrope"
            >
              What is Innov8ITCode?
            </h2>
            <p class="leading-[1.75rem] mb-[1.5rem]">
              {!! truncateText($home_about->content, 1000) !!}
            </p>
            <div>
              <a
                href="/"
                class="hover_effect inline-block uppercase bg-[var(--color-primary)] px-6 py-3 text-white rounded-[5px]"
              >
                <span> contact with us </span>
              </a>
            </div>
          </div>
        </div>
        <div
          id="innov_img"
          class="innov_right translate-x-full transition-transform duration-500 ease-in-out md:flex-1"
        >
          <div class="img_container">
            <img
              src="https://bizper.pixcelsthemes.com/bizper/assets/images/about/about-large.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-14 md:pt-24">
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
              Our portfolio
            </h2>
          </div>
          <div class="sub_heading mb-8">
            <h3
              class="text-[2.25rem] leading-[2.8125rem] capitalize text-[var(--color-heading)] font-bold font-manrope text-center"
            >
              Let's check our best works
            </h3>
          </div>
        </div>
        <div
          class="profolio_container grid gap-8 md:grid-cols-2 xl:grid-cols-3"
        >
          <div
            class="portfolio_card px-6 py-6 rounded-[8px] shadow-[0px_2px_20px_rgba(0,_0,_0,_0.1)]"
          >
            <div class="img_container overflow-hidden">
              <img
                src="{{ asset('home/img/npc.png') }}"
                class="rounded-[8px] w-full hover:scale-110 transition-transform duration-300 ease-in-out"
                alt=""
              />
            </div>
            <div class="desc text-[var(--color-heading)] font-manrope pt-4">
              <h4 class="text-[#292929] leading-[1.5rem] mb-2">
                Web Application
              </h4>
              <h3 class="text-[1.5rem] font-semibold">
                Nepal Pharmacy Council 
              </h3>
            </div>
          </div>
          <!-- portfolio two -->
          <div class="profolio_container">
            <div
              class="portfolio_card px-8 py-8 rounded-[8px] shadow-[0px_2px_20px_rgba(0,_0,_0,_0.1)]"
            >
              <div class="img_container overflow-hidden">
                <img
                src="{{ asset('home/img/vira.png') }}"
                                  class="rounded-[8px] w-full hover:scale-110 transition-transform duration-300 ease-in-out"
                  alt=""
                />
              </div>
              <div
                class="desc text-[var(--color-heading)] font-manrope pt-4"
              >
                <h4 class="text-[#292929] leading-[1.5rem] mb-2">
                  Web Application
                </h4>
                <h3 class="text-[1.5rem] font-semibold">
                  Vira institute of science and technology
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- tech stack -->
  <section class="py-14 md:py-24">
    <div class="container--fluid">
      <div class="tech_stack_content">
         
        <div class="tech_stack_container  overflow-hidden">
          <div
            class="tech_stack_top flex justify-center flex-wrap md:flex-nowrap md:justify-between"
          >
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                  class="w-full"
                  src="https://technicalranshaini.com.np/assets/images/icons/icon_javascript.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                  class="w-full"
                  src="https://technicalranshaini.com.np/assets/images/icons/icon_react_js.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                  class="w-full"
                  src="https://technicalranshaini.com.np/assets/images/case/icon_elephent.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                  class="w-full"
                  src="https://technicalranshaini.com.np/assets/images/icons/icon_typescript.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                  class="w-full"
                  src="https://technicalranshaini.com.np/assets/images/icons/icon_laravel.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                class="w-full"
                  src="{{ asset('home/img/nodejs.svg') }}"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                class="w-full"
                  src="{{ asset('home/img/nextjs.svg') }}"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                class="w-full"
                  src="{{ asset('home/img/express.svg') }}"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                class="w-full"
                  src="{{ asset('home/img/mysql.svg') }}"
                  alt=""
                />
              </div>
            </div>
            <div class="tech_stack_card">
              <div class="card_img w-full">
                <img
                class="w-full"
                  src="{{ asset('home/img/html.svg') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
</main>

@push('scripts')

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.fade-in-section');
    const sectionFadeOut = document.querySelectorAll('.fade-out-section');

    const options = {
      root: null, // relative to the viewport
      rootMargin: '0px',
      threshold: 0.1 // triggers the callback when 10% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          console.log(entry.target.classList);
          entry.target.classList.add('animate__animated', 'animate__fadeIn');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    sections.forEach(section => {
      observer.observe(section);
    });

    const observerFadeOut = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate__animated', 'animate__fadeOut');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    sectionFadeOut.forEach(section => {
      observerFadeOut.observe(section);
    });

    



  });
</script>


@endpush

@endsection

