
@extends('website.layout.app')

@section('content')
<main>
  <section id="introduction" class="mt-20 mb-14">
      <div class="container--fluid">
          <div class="intro-content flex flex-col gap-8 lg:flex-row">
              <div class="intro order-2 lg:flex-1 lg:order-1">
                  <p class="leading-[2rem]">
                      <strong class="text-[var(--color-heading)]">{{ $about->title }}</strong>
                      {!! $about->content !!}
                      
                  </p>
              </div>
              <div class="intro_banner order-1 lg:flex-1 lg:order-2">
                  <div class="intro_img h-full w-full">
                      <img src="https://images.pexels.com/photos/7988210/pexels-photo-7988210.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                          class="rounded-[5px] w-full h-full object-cover" alt="" />
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section id="instructor" class="mb-20">
      <div class="container--fluid">
          <div class="instructor_content">
              <div class="instructor_heading mb-8">
                  <h2 class="team_heading text-[2.25rem] font-semibold font-manrope text-[var(--color-heading)]">
                      Instructors
                  </h2>
              </div>
              <div class="instructor_card_container flex gap-8 md:gap-10 xl:gap-12 flex-col md:flex-row">
                @foreach ($teams as $team)
                  <div class="instructor_card md:w-1/2 xl:w-1/3 relative">
                      <div class="member_img w-full">
                          <img class="h-full w-full object-cover"
                              src="{{ $team->getImageUrlAttribute() }}"
                              alt="" />
                      </div>
                      <div
                          class="member_desc flex justify-between z-10 items-end w-full absolute -bottom-[1px] -left-[1px]">
                          <div class="memeber_desc bg-white title_clip px-4 h-[60px] w-[225px]">
                              <h3
                                  class="member_title font-manrope text-[1.25rem] leading-[2.5rem] font-bold text-[var(--color-heading)]">
                                  {{ $team->name }}
                              </h3>
                              <p class="-mt-1">{!! $team->designation !!}</p>
                          </div>
                          <div class="members_socials flex flex-col">
                              <span
                                  class="member_social_btn cursor-pointer order-2 flex items-center justify-center w-[60px] h-[60px] text-white bg-[var(--color-primary)]">
                                  <i class="fa-solid fa-share-nodes"></i>
                              </span>

                              <ul class="member_social_list bg-white order-1 scale-0">
                                  <li>
                                      <a href="" class="flex items-center justify-center w-[60px] h-[60px]">
                                          <span class="text-[var(--color-heading)]">
                                              <i class="fa-brands fa-facebook-f"></i>
                                          </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="" class="flex items-center justify-center w-[60px] h-[60px]">
                                          <span class="text-[var(--color-heading)]">
                                              <i class="fa-brands fa-facebook-f"></i>
                                          </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="" class="flex items-center justify-center w-[60px] h-[60px]">
                                          <span class="text-[var(--color-heading)]">
                                              <i class="fa-brands fa-facebook-f"></i>
                                          </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                @endforeach

                  
              </div>
          </div>
      </div>
  </section>

  <section id="team_member" class="mb-20">
      <div class="container--fluid">
          <div class="team_content">
              <div class="team_heading mb-8">
                  <h2 class="team_heading text-[2.25rem] font-semibold font-manrope text-[var(--color-heading)]">
                      Team Members
                  </h2>
              </div>
              <div class="team_card_container flex flex-col gap-8 md:flex-row">
                  <div class="team_card md:w-1/2 xl:w-1/3 relative">
                      <div class="member_img w-full">
                          <img class="h-full w-full object-cover"
                              src="https://bizper.pixcelsthemes.com/bizper/assets/images/team/team-2.png"
                              alt="" />
                      </div>
                      <div
                          class="member_desc flex justify-between z-10 items-end w-full absolute -bottom-[1px] -left-[1px]">
                          <div class="memeber_desc bg-white title_clip px-4 h-[60px] w-[225px]">
                              <h3
                                  class="member_title font-manrope text-[1.25rem] leading-[2.5rem] font-bold text-[var(--color-heading)]">
                                  Clade Owen
                              </h3>
                              <p class="-mt-1">CEO &amp; Founder</p>
                          </div>
                          <div class="members_socials flex flex-col">
                              <span
                                  class="member_social_btn cursor-pointer order-2 flex items-center justify-center w-[60px] h-[60px] text-white bg-[var(--color-primary)]">
                                  <i class="fa-solid fa-share-nodes"></i>
                              </span>

                              <ul class="member_social_list bg-white order-1 scale-0">
                                  <li>
                                      <a href="" class="flex items-center justify-center w-[60px] h-[60px]">
                                          <span class="text-[var(--color-heading)]">
                                              <i class="fa-brands fa-facebook-f"></i>
                                          </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="" class="flex items-center justify-center w-[60px] h-[60px]">
                                          <span class="text-[var(--color-heading)]">
                                              <i class="fa-brands fa-facebook-f"></i>
                                          </span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="" class="flex items-center justify-center w-[60px] h-[60px]">
                                          <span class="text-[var(--color-heading)]">
                                              <i class="fa-brands fa-facebook-f"></i>
                                          </span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>



@endsection