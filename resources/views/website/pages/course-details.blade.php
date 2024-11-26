@extends('website.layout.app')

@section('content')



<main>
    <div class="flex flex-col gap-y-8 pb-6">
        <section class="w-full md:h-[300px]" role="banner">
            <div
                class="h-full w-full bg-[url('../../assets/images/images/content_banner.jpg')] bg-no-repeat bg-cover bg-center-center">
                <div class="container--fluid h-full w-full text-white pt-12">
                    <h1 class="text-4xl font-bold text-[var(--color-heading)] py-12">
                        {{ $course->title }}
                    </h1>
                </div>
            </div>
        </section>
        <section class="container--fluid min-h-[100%] flex flex-col-reverse gap-8 lg:flex-row">
            <div class="lg:w-[70%] flex flex-col gap-y-8">
                <div class="flex flex-wrap w-full gap-4 md:flex-nowrap md:justify-start md:gap-0">
                    <button
                        class="tab flex-1 min-w-[calc(50%-0.5rem)] md:min-w-0 capitalize border rounded-[5px] px-3 py-2"
                        data-target="#tab1">
                        Outcome
                    </button>
                    <button
                        class="tab flex-1 min-w-[calc(50%-0.5rem)] md:min-w-0 capitalize border rounded-[5px] px-3 py-2"
                        data-target="#tab2">
                        Curriculum
                    </button>
                    <button
                        class="tab flex-1 min-w-[calc(50%-0.5rem)] md:min-w-0 capitalize border rounded-[5px] px-3 py-2"
                        data-target="#tab3">
                        Instructors
                    </button>
                </div>
                <hr />
                <div class="h-full px-4">
                    <div id="tab1" class="tab-content h-full hidden space-y-6">
                        {!! $course->description !!}
                    </div>
                    <div id="tab2" class="tab-content h-full hidden space-y-6">
                        <h2 class="capitalize font-semibold text-xl text-[var(--color-heading)]">
                            Syllabus
                        </h2>
                        {!! $course->curriculum!!}
                        {{-- <div class="divide-y divide-gray-200 border border-gray-200 rounded-lg">
                            <div class="w-full">
                                <h3 class="accordion-header accordion-title text-lg font-semibold text-[var(--color-heading)] cursor-pointer flex justify-between items-center px-4 py-6 hover:bg-gray-50"
                                    data-target="#body1">
                                    Section 1
                                </h3>
                                <div class="accordion-body hidden overflow-hidden px-4 py-3 bg-gray-50 transition-all duration-200 ease-linear"
                                    id="body1">
                                    <ul class="space-y-2">
                                        <li
                                            class="cursor-pointer p-2 rounded-md hover:bg-gray-200 transition-colors duration-150">
                                            Lecture 1
                                        </li>
                                        <li
                                            class="cursor-pointer p-2 rounded-md hover:bg-gray-200 transition-colors duration-150">
                                            Lecture 2
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full">
                                <h3 class="accordion-header accordion-title text-lg font-semibold text-[var(--color-heading)] cursor-pointer flex justify-between items-center px-4 py-6 hover:bg-gray-50"
                                    data-target="#body2">
                                    Section 2
                                </h3>
                                <div class="accordion-body overflow-hidden hidden max-h-0 px-4 py-3 bg-gray-50 transition-all duration-200 ease-linear"
                                    id="body2">
                                    <ul class="space-y-2">
                                        <li
                                            class="cursor-pointer p-2 rounded-md hover:bg-gray-200 transition-colors duration-150 ease-in-out">
                                            Lecture 1
                                        </li>
                                        <li
                                            class="cursor-pointer p-2 rounded-md hover:bg-gray-200 transition-colors duration-150 ease-in-out">
                                            Lecture 2
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div id="tab3" class="tab-content h-full hidden space-y-6">
                        <h2 class="capitalize font-semibold text-2xl text-[var(--color-heading)]">
                            Instructors
                        </h2>
                        <div class="space-y-4 w-full md:w-[60%]">
                            <div class="flex gap-x-6 md:gap-x-16 w-full border shadow-md items-center p-3">
                                <div class="w-24 aspect-square rounded-full">
                                    <img class="w-full h-full rounded-full" src="{{ $course->advisor->getImageUrlAttribute() }}"
                                        alt="Tejendra Singh Bhandari" />
                                </div>
                                <div class="space-y-2">
                                    <h2 class="font-bold md:text-xl">
                                        {{ $course->advisor->name }}
                                    </h2>
                                    <em>Fullstack Engineer</em>
                                </div>
                            </div>
                            {{-- <div class="flex gap-x-6 md:gap-x-16 w-full border shadow-md items-center p-3">
                                <div class="w-24 aspect-square rounded-full">
                                    <img class="w-full h-full rounded-full" src="../images/frontend.jpg"
                                        alt="Arun Prasad Paneru" />
                                </div>
                                <div class="space-y-2">
                                    <h2 class="font-bold md:text-xl">Arun Prasad Paneru</h2>
                                    <em>Fullstack Engineer</em>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-[30%] lg:relative text-[var(--color-heading)]">
                <div
                    class="px-4 py-2 border shadow-xl rounded-[5px] space-y-4 lg:relative lg:right-0 lg:top-[-10%] lg:z-50">
                    <figure>
                        <img class="object-cover" src="{{ $course->getImageUrlAttribute() }}"
                            alt="course image" />
                    </figure>
                    <button
                        class="capitalize bg-[var(--color-primary)] py-3 px-6 rounded-[5px] w-full text-white font-bold">
                        Start Learning
                    </button>
                    <h2 class="font-bold text-xl">Course description:</h2>
                    <ul class="capitalize">
                        <li class="flex gap-x-28 items-center py-6">
                            <span class="capitalize flex-1 font-semibold">Duration:</span>
                            <span class="flex-1">3 months</span>
                        </li>
                        <hr />
                        <li class="flex gap-x-28 items-center py-6">
                            <span class="capitalize flex-1 font-semibold">Price:</span>
                            <span class="capitalize flex-1">Nrs. {{  $course->price }}</span>
                        </li>
                        <hr />
                        <li class="py-6 space-y-6">
                            <span class="capitalize font-semibold">Tech Stack:</span>
                            <div class="flex gap-4 flex-wrap">
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">HTML5</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">CSS</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">JS</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">Git</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">React</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">NextJs</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">Firebase</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">JIRA</span>
                                <span class="space-x-2 shadow-sm px-4 py-1 border rounded-[5px]">Slack</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div
            class="container--fluid w-full h-[200px] flex flex-col items-center justify-center gap-y-4 bg-[var(--color-secondary)] md:flex-row md:justify-around md:items-center mb-20 rounded-[5px]">
            <div class="text-[var(--color-white)] capitalize text-3xl font-bold">
                <h2>Get Trained with</h2>
                <h2>Innov8ITCode</h2>
            </div>
            <div>
                <a href="/course"
                    class="capitalize p-3 font-bold flex items-center border border-white gap-x-2 rounded-[5px] text-white">
                    <p>View All Courses</p>
                    <i class="fa-solid fa-arrow-right fa-lg" aria-hidden="true"></i>
            </a>
            </div>
        </div>
    </div>
</main>


 

 




@endsection

@push('scripts')
 <script>
    function Tabs() {
    const tabs = document.querySelectorAll(".tab");
    const inactiveClass = "text-[var(--primaryColor)]";
    const activeClass = ["bg-[var(--color-primary)]", "text-white"];
    const tab1 = document.querySelector("#tab1");
    const tabContent = document.querySelectorAll(".tab-content");
    tabs[0].classList.remove(inactiveClass);
    tabs[0].classList.add(...activeClass);

    tab1.classList.remove("hidden");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            const targetContent = document.querySelector(tab.dataset.target);
            tabContent.forEach((content) => {
                content.classList.add("hidden");
            });
            targetContent.classList.remove("hidden");
            tabs.forEach((activeTab) => activeTab.classList.remove(...activeClass));
            tab.classList.remove(inactiveClass);
            tab.classList.add(...activeClass);
        });
    });
}

function Accordin() {
    const headers = document.querySelectorAll(".accordion-header");

    headers.forEach((header) => {
        header.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();

            const targetBody = document.querySelector(header.dataset.target);

            if (targetBody.classList.contains("hidden")) {
                targetBody.classList.remove("hidden");
                targetBody.style.maxHeight = targetBody.scrollHeight + "px";
            } else {
                targetBody.style.maxHeight = 0;

                targetBody.addEventListener(
                    "transitionend",
                    () => {
                        targetBody.classList.add("hidden");
                    },
                    { once: true },
                );
            }
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    Tabs();
    Accordin();
});

 </script>
@endpush