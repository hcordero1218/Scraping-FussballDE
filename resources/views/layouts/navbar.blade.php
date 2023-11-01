<div class="bg-gray-900">
    <!-- Navbar -->
    <nav class="flex justify-between text-white sticky z-50">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center relative">
            <a class="text-3xl font-bold font-heading" href="#">
                <img class="h-24 w-24 absolute top-1" src="https://i.postimg.cc/rsbvKX7P/pichanga-fc-kf.png"
                    alt="logo">
            </a>
            <!-- Nav Links -->
            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                <li><a class="hover:text-gray-200" href="#">Home</a></li>
                <li><a class="hover:text-gray-200" href="#">Club</a></li>
                <li><a class="hover:text-gray-200" href="#">Teams</a></li>
                <li><a class="hover:text-gray-200" href="#">Contact Us</a></li>
            </ul>
            <!-- Header Icons -->
            <div class="hidden xl:flex items-center space-x-5 items-center">
                <a class="hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </a>
                <a class="flex items-center hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span
                            class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                </a>
                <!-- Sign In / Register      -->
                <a class="flex items-center hover:text-gray-200" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Responsive navbar -->
        <a class="xl:hidden flex mr-6 items-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="flex absolute -mt-5 ml-4">
                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                </span>
            </span>
        </a>
        <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
    </nav>
</div>

<div id="animation-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-72 overflow-hidden md:h-screen z-10">
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="https://www.rbb24.de/content/dam/rbb/rbb/rbb24/2023/2023_06/rbb-reporter/Berliner-Fu-ballmannschaft-gegen-den-Vatikan-2.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="https://d2g8igdw686xgo.cloudfront.net/71914509_168112754826450_r.jpeg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
