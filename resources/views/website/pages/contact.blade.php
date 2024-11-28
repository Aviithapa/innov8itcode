
@extends('website.layout.app')

@section('content')
  
<main>
  <!-- banner container -->
  {{-- <div class="h-[300px] w-full hidden md:block" role="banner">
    <div class="h-full w-full bg-[url('../../assets/images/images/content_banner.jpg')] bg-no-repeat bg-cover bg-center-center">
      <div
        class="container--fluid h-full w-full text-white flex flex-col justify-center gap-y-6"
      >
        <div>
          <h1 class="text-4xl text-[var(--color-heading)] font-bold">
            Contact Us
          </h1>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="container--fluid flex flex-col gap-y-12 lg:flex-row mt-12 md:gap-x-16 mb-16" style="margin-top: 20px;">
    <!-- title and form -->
    <div class="flex flex-col gap-y-12 lg:flex-1">
      <!-- title  -->
      <div class="flex flex-col gap-y-2" style="line-height: 40px;">
        <strong
          class="text-[2.25rem] capitalize leading-[2.5rem] text-[var(--color-primary)]"
          >Get in touch !</strong
        >
        <p class="text-[1.25rem] text-[var(--color-heading)]">
          Coding Your Success Starts with a Conversation
        </p>
      </div>
      <!-- form container  -->

      <form action="" class="space-y-4 w-full" style="margin-top: 10px;">
        <div class="space-y-2 w-full">
          <label
            class="capitalize block font-semibold text-[var(--color-heading)]"
            for="name"
            >Your Name <span class="font-bold">*</span></label
          >
          <input
            class="border p-2 focus:outline-1 focus:outline-[var(--color-secondary)] w-full"
            type="text"
            name="name"
            id="name"
            placeholder="Enter your name"
            required
            aria-required="true"
            autocomplete="on"
          />
        </div>
        <div class="space-y-2">
          <label
            class="capitalize block font-semibold text-[var(--color-heading)]"
            for="email"
            >Your Email<span class="font-bold">*</span></label
          >
          <input
            class="border p-2 focus:outline-1 focus:outline-[var(--color-secondary)] w-full"
            type="email"
            placeholder="Enter your email"
            name="email"
            id="email"
            required
            aria-required="true"
            autocomplete="on"
          />
        </div>
        <div class="space-y-2">
          <label
            class="capitalize block font-semibold text-[var(--color-heading)]"
            for="message"
            >Remarks<span class="font-bold">*</span></label
          >
          <textarea
            class="border p-2 focus:outline-1 focus:outline-[var(--color-secondary)] w-full"
            name="message"
            id="message"
            placeholder="Tell us about you"
            rows="5"
            required
            aria-required="true"
            autocomplete="off"
            maxlength="100"
          ></textarea>
        </div>
        <button
          class="capitalize bg-[var(--color-secondary)] py-3 px-6 rounded first-line:text-white font-bold"
          type="submit"
          aria-label="send message"
          style="color: white;"
        >
          Send message
        </button>
      </form>
    </div>

    <!-- contacts and maps -->
    <div class="flex flex-col gap-y-12 lg:flex-1">
      <!-- contacts  -->
      {{-- <div class="flex flex-col justify-between items-center gap-y-8 w-full md:flex-row" >
        <div class="flex flex-col justify-center items-center gap-y-4 " style="width:20px;">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#e42032" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#e42032" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
          <p
            aria-label="address of vera institute "
            class="text-[var(--color-heading)]"
          >
            Sinamangal,Kathmandu,Nepal
          </p>
        </div>
        <div class="flex flex-col justify-center items-center gap-y-4">
          <img
            src="../../public/icon-images/phone_icon.png"
            alt="location icon"
          />
          <ul
            aria-label="phone numbers of vera institute "
            class="text-[var(--color-heading)]"
          >
            <li>+97701-414243</li>
          </ul>
        </div>
        <div class="flex flex-col justify-center items-center gap-y-4">
          <img
            src="../../public/icon-images/clock_icon.png"
            alt="location icon"
          />
          <ul
            aria-label="opening and closing time for vera institute "
            class="text-[var(--color-heading)]"
          >
            <li>Sun-Fri: 10 AM - 5 PM</li>
            <li>Sat: 10 AM - 5 PM</li>
          </ul>
        </div>
      </div> --}}
      <!-- map  -->
      <div class="h-full">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8499364410022!2d85.33132767525319!3d27.691032576191926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19fb1cb6c409%3A0xe2d38b35924bbe10!2sINNOV8ITCODE!5e0!3m2!1sen!2snp!4v1732693454744!5m2!1sen!2snp"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
  </div>
  <div class="container--fluid py-8 mb-16">
    <div
      class="w-full h-[200px] flex flex-col items-center justify-center gap-y-4 bg-[var(--color-secondary)] md:flex-row md:justify-around md:items-center"
    >
      <div class="text-white text-3xl font-bold">
        <h2 class="">Learn from the</h2>
        <h2 class="">Innov8ITCode</h2>
      </div>
      <div>
        <a
          class="capitalize p-3 font-bold flex items-center border border-white gap-x-2 bg-white rounded text-[var(--color-secondary)] hover:bg-transparent  hover:border-white"
          href="/course"
          style="hover"
          >
          <p>View All courses</p>
          <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</main>

   

@endsection