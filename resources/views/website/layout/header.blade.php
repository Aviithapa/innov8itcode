    <!-- cursor pointer -->

    @if(isset($pageData) && $slug === 'index')
      <div id="curtain" class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
          <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <div
          class="loader-wrap-heading flex items-center justify-center flex-col"
        >
          <h2
            class="flex flex-col items-center justify-center font-bold text-[3.25rem]"
          >
            <span>Welcome</span>
            <span>To</span>
          </h2>
          <div class="curtain_img_container w-32 md:w-52 lg:72">
            <img
              src="{{ asset('home/img/white-logo.svg') }}"
              alt="white innov logo"
            />
          </div>
        </div>
      </div>
    @endif
    <div
      id="circle"
      class="rounded-full pointer-events-none bg-black fixed -translate-x-1/2 -translate-y-1/2 transition-transform duration-100 ease-linear z-[999]"
    ></div>
    <!-- header -->
    <header class="shadow-header md:px-2 md:py-2 sticky top-0 z-50 bg-white">
      <div class="container--fluid">
        <div class="header_content flex items-center justify-between">
          <!-- header logo -->
          <div>
            <div class="header__logo-container w-20" style="width:5rem;">
              <img src="{{ asset('Innov8itcode/assets/img/logo.png') }}" class="logo" alt="Logo">
            </div>
          </div>
          <!-- main navbar -->
          <div class="hidden lg:block">
            <nav>
              <ul class="flex">
                <li>
                  <a
                    class="inline-block text-[1.125rem] text-[var(--color-heading)] capitalize leading-[1.875rem] hover:text-[var(--color-primary)] font-bold px-3 py-1 tracking-wide"
                    href="/"
                    >home</a
                  >
                </li>
                <li>
                  <a
                    class="inline-block text-[1.125rem] text-[var(--color-heading)] capitalize leading-[1.875rem] hover:text-[var(--color-primary)] font-bold px-3 py-1 tracking-wide"
                    href="#"
                    >services</a
                  >
                </li>
                <li>
                  <a
                    class="inline-block text-[1.125rem] text-[var(--color-heading)] capitalize leading-[1.875rem] hover:text-[var(--color-primary)] font-bold px-3 py-1 tracking-wide"
                  href="#"
                    >courses</a
                  >
                </li>
                <li class="relative parent_nav">
                  <a
                    class="nav_link flex items-center gap-1.5 text-[1.125rem] text-[var(--color-heading)] capitalize leading-[1.875rem] hover:text-[var(--color-primary)] font-bold px-3 py-1 tracking-wide"
                     href="/about"
                  >
                    <span>about</span>
                    <span class="translate-y-[1px] text-[0.9rem] font-bold">
                      <i class="fa-solid fa-angle-down"></i>
                    </span>
                  </a>
                  <ul
                    class="submenu top-[100%] left-0 absolute z-[100] bg-white shadow-[0_36px_35px_rgba(0,_0,_0,_0.08)] min-w-[230px]"
                  >
                    <li
                      class="hover:bg-[var(--color-primary)] hover:text-white text-[#1F1F25]"
                    >
                      <a
                        class="flex items-center justify-between gap-1.5 capitalize leading-[1.875rem] font-bold px-3 py-1.5 tracking-wide"
                           href="/about#introduction"
                      >
                        <span>introduction</span>
                        <span class="text-white">
                          <i class="fa-solid fa-angles-right"></i>
                        </span>
                      </a>
                    </li>
                    <li
                      class="hover:bg-[var(--color-primary)] hover:text-white text-[#1F1F25]"
                    >
                      <a
                        class="flex items-center justify-between gap-1.5 capitalize leading-[1.875rem] font-bold px-3 py-1.5 tracking-wide"
                          href="/about#instructor"
                      >
                        <span>instructor</span>
                        <span class="text-white">
                          <i class="fa-solid fa-angles-right"></i>
                        </span>
                      </a>
                    </li>
                    <li
                      class="hover:bg-[var(--color-primary)] hover:text-white text-[#1F1F25]"
                    >
                      <a
                        class="flex justify-between items-center gap-1.5 capitalize leading-[1.875rem] font-bold px-3 py-1.5 tracking-wide"
                        href="/about#team_member"
                      >
                        <span>team members </span>
                        <span class="text-white">
                          <i class="fa-solid fa-angles-right"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    class="inline-block text-[1.125rem] text-[var(--color-heading)] capitalize leading-[1.875rem] hover:text-[var(--color-primary)] font-bold px-3 py-1 tracking-wide"
                    href="#"
                    >blogs</a
                  >
                </li>
                <li>
                  <a
                    class="inline-block text-[1.125rem] text-[var(--color-heading)] capitalize leading-[1.875rem] hover:text-[var(--color-primary)] font-bold px-3 py-1 tracking-wide"
                     href="#"
                    >contact</a
                  >
                </li>
              </ul>
            </nav>
          </div>
          <div class="flex items-center gap-8">
            <!-- get started now -->
            <div class="get_started_now hidden md:block">
              <button
                type="button"
                class="hover_effect px-6 py-3 bg-[var(--color-primary)] text-[1.0625rem] rounded-[5px] text-white border-none outline-none capitalize"
              >
                <span> get started now </span>
              </button>
            </div>
            <!--mobile nav toggle button -->
            <div class="mobile_nav_toggler lg:hidden">
              <button id="hamburger_btn" type="button">
                <svg
                  width="20"
                  height="16"
                  viewBox="0 0 20 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect y="14" width="20" height="2" fill="#03041c"></rect>
                  <rect y="7" width="20" height="2" fill="#03041c"></rect>
                  <rect width="20" height="2" fill="#03041c"></rect>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- mobile menu -->
      <div
        id="mobile_menu"
        class="mobile_menu translate-x-[102%] transition-transform duration-500 ease-in fixed right-0 top-0 w-[65%] min-h-screen z-[110] bg-white shadow-[0_15px_40px_-5px_rgba(0,_0,_0,_0.1)]"
      >
        <div
          class="mobile_header_container flex items-center justify-between bg-[#1d1e33] px-6 py-4"
        >
          <div class="logo_container w-16">
            <img src="{{ asset('Innov8itcode/assets/img/logo.png') }}" class="logo" alt="Logo">
          </div>
          <div class="cross_icon">
            <button
              id="cross_btn"
              type="button"
              class="w-10 h-10 cursor-pointer text-xl rounded-[50%] bg-white text-[var(--color-primary)]"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
        </div>
        <div class="nav_container px-6 py-4">
          <ul>
            <li>
              <a
                href="/"
                class="flex justify-between items-center py-2 border-b border-[#f3f3f3]"
              >
                <span class="text-[var(--color-heading)] capitalize font-medium"
                  >home</span
                >
                <span class="bg-[var(--color-primary)] text-white px-4 py-2">
                  <i class="fa-solid fa-angle-down"></i>
                </span>
              </a>
              <ul>
                <li>
                  <a
                    href="/"
                    class="inline-block w-full py-2 border-b capitalize border-[#f3f3f3] px-4"
                    >one</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </header>