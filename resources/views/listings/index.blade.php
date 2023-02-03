<x-layout>
    @if (!Auth::check())
        @include('partials._hero')
    @endif

    @if (Auth::check())
        @include('partials._herologin')
    @endif
    @include('partials._search')

    <div class="flex">
        {{-- @unless(count($listings) == 0) --}}
        @if (count($listings) <= 0)
            <!-- component -->
            <style>
                .emoji-404 {

                    position: relative;
                    animation: mymove 2.5s infinite;
                }

                @keyframes mymove {
                    33% {
                        top: 0px;
                    }

                    66% {
                        top: 20px;
                    }

                    100% {
                        top: 0px
                    }
                }
            </style>
            <div class="justify-center w-4/5 pb-3 mb-2 bg-gray-900">
                <center class="m-auto mt-4">
                    <svg class="emoji-404 " enable-background="new 0 0 226 249.135" height="249.135" id="Layer_1"
                        overflow="visible" version="1.1" viewBox="0 0 226 249.135" width="226" xml:space="preserve">
                        <circle cx="113" cy="113" fill="#FFE585" r="109" />
                        <line enable-background="new    " fill="none" opacity="0.29" stroke="#6E6E96"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="88.866"
                            x2="136.866" y1="245.135" y2="245.135" />
                        <line enable-background="new    " fill="none" opacity="0.17" stroke="#6E6E96"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="154.732"
                            x2="168.732" y1="245.135" y2="245.135" />
                        <line enable-background="new    " fill="none" opacity="0.17" stroke="#6E6E96"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" x1="69.732"
                            x2="58.732" y1="245.135" y2="245.135" />
                        <circle cx="68.732" cy="93" fill="#6E6E96" r="9" />
                        <path
                            d="M115.568,5.947c-1.026,0-2.049,0.017-3.069,0.045  c54.425,1.551,98.069,46.155,98.069,100.955c0,55.781-45.219,101-101,101c-55.781,0-101-45.219-101-101  c0-8.786,1.124-17.309,3.232-25.436c-3.393,10.536-5.232,21.771-5.232,33.436c0,60.199,48.801,109,109,109s109-48.801,109-109  S175.768,5.947,115.568,5.947z"
                            enable-background="new    " fill="#FF9900" opacity="0.24" />
                        <circle cx="156.398" cy="93" fill="#6E6E96" r="9" />
                        <ellipse cx="67.732" cy="140.894" enable-background="new    " fill="#FF0000" opacity="0.18"
                            rx="17.372" ry="8.106" />
                        <ellipse cx="154.88" cy="140.894" enable-background="new    " fill="#FF0000" opacity="0.18"
                            rx="17.371" ry="8.106" />
                        <path
                            d="M13,118.5C13,61.338,59.338,15,116.5,15c55.922,0,101.477,44.353,103.427,99.797  c0.044-1.261,0.073-2.525,0.073-3.797C220,50.802,171.199,2,111,2S2,50.802,2,111c0,50.111,33.818,92.318,79.876,105.06  C41.743,201.814,13,163.518,13,118.5z"
                            fill="#FFEFB5" />
                        <circle cx="113" cy="113" fill="none" r="109" stroke="#6E6E96"
                            stroke-width="8" />
                    </svg>
                    <div class="mt-4 tracking-widest ">
                        <span class="block pb-2 text-6xl text-gray-50"><span>Oops!</span></span>
                        <span class="text-xl text-gray-500">Sorry, We couldn't find what you are looking for!</span>

                    </div>
                </center>
                <center class="my-6">
                    <a href="{{ url()->previous() }}"
                        class="p-3 font-mono text-xl bg-blue-600 rounded-md text-gray-50 hover:shadow-md">Go back </a>
                </center>
            </div>
            {{-- <p>No listings found</p> --}}
        @else
            <div class="w-4/5 gap-4 mx-4 space-y-4 overflow-hidden lg:grid lg:grid-cols-2 md:space-y-0">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
        @endif
        <div class="w-1/5 mx-4">
            <h3 class="text-center text-white bg-gray-700 rounded-md ">Jobs by Location</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nam consequatur ipsa alias quam
                dignissimos aspernatur, asperiores maiores blanditiis soluta at cum beatae non et repudiandae quo in
                quas
                numquam.
            </p>

            <div class="col-span-1 h-96 ">
                <div class="flex items-center justify-around px-2 py-1 bg-gray-900 rounded-lg ">
                    <input type="text" placeholder="seach"
                        class="w-full p-0 pl-2 mr-2 bg-gray-900 rounded-md outline-none ring-indigo-700">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor ">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                </div>
                <div class="rounded-md ">
                    <h1
                        class="py-2 my-4 text-xl text-center text-gray-100 bg-gray-900 border-b-2 rounded-md cursor-pointer">
                        Service</h1>
                    <div class="text-center text-gray-100 list-none rounded-md">
                        <li class="py-3 border-b-2"><a href="#"
                                class="list-none hover:text-indigo-600">Products</a></li>
                        <li class="py-3 border-b-2"><a href="#"
                                class="list-none hover:text-indigo-600">Models</a></li>
                        <li class="py-3 border-b-2"><a href="#"
                                class="list-none hover:text-indigo-600">Pricing</a></li>
                        <li class="py-3 border-b-2"><a href="#"
                                class="list-none hover:text-indigo-600">
                                Hire
                            </a>
                        </li>
                        <li class="py-3 ">
                            <a href="#" class="list-none border-b-2 hover:text-indigo-600">
                                Business
                            </a>
                        </li>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="animation-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-4.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="p-4 mt-6">
        {{ $listings->links() }}
    </div>
</x-layout>
