<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your list') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <!-- Movies list -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="favorite-name-list">
                            <div class="sm:block md:flex lg:flex">
                                <h2 class="tracking-wider text-gray-700 font-black text-md font-semibold">
                                    <a class="hover:text-gray-900" href="#">Best movies ever</a>
                                </h2>
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="flex pl-5 items-center text-md font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            <div class="ml-1 items-end">
                                                <svg class="hover:fill-gray-900" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>

                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link>
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link>
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <div class="sm:block md:block lg:flex">
                                <div class="flex-auto w-96">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->
                                    </div>
                                </div>
                                <div class="w-96 ml-4">
                                    <div class="mt-2">
                                        <a href="{{ route('create-your-list.create') }}">
                                            <button class="w-full text-md uppercase font-semibold px-4 py-2 mx-auto bg-indigo-700 text-white hover:bg-indigo-900 transition ease-in-out duration-200">
                                                Create your list
                                            </button>
                                        </a>
                                        <p class="text-sm text-center mt-1">List your movie, TV & celebrity picks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="favorite-name-list my-8">
                            <div class="sm:block md:flex lg:flex">
                                <h2 class="tracking-wider text-gray-700 font-black text-md font-semibold">
                                    <a class="hover:text-gray-900" href="#">For watching</a>
                                </h2>
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="flex pl-5 items-center text-md font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            <div class="ml-1 items-end">
                                                <svg class="hover:fill-gray-900" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>

                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link>
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link>
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <div class="sm:block md:block lg:flex">
                                <div class="flex-auto w-96">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3">
                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->

                                        <!-- Starts cols here -->
                                        <div class="mt-2">
                                            <a href="#">
                                                <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                                     alt="poster"
                                                     class="hover:opacity-75 transition ease-in-out duration-150">
                                            </a>
                                            <div class="mt-2 relative">
                                                <a href="#"
                                                   class="text-md mt-2 hover:text-gray:300">Avengers</a>
                                                <a href="#" class="text-end float-right absolute top-0 right-0 mt-1">
                                                    <svg width="14px" height="14px" viewBox="0 0 100 100" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g class="stroke-red-400"
                                                           id="38.-Hearth" stroke="none" stroke-width="1" fill="#f87171"
                                                           fill-rule="evenodd"
                                                           stroke-linecap="round"
                                                           stroke-linejoin="round">
                                                            <g transform="translate(2.000000, 5.000000)" id="Layer-1"
                                                               stroke="" stroke-width="4">
                                                                <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                        <g data-name="Layer 2">
                                                            <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                                  data-name="star"/>
                                                        </g>
                                                    </svg>

                                                    <span class="ml-1 text-xs">7.48</span>
                                                    <span class="mx-2 text-xs">|</span>
                                                    <span class="text-xs">Jan, 23 2022</span>
                                                </div>
                                                <div class="text-gray-400 text-xs">
                                                    Action, Drama, Comedy
                                                </div>
                                            </div>
                                        </div> <!-- Ends cols here -->
                                    </div>
                                </div>
                                <div class="w-96 ml-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Movies list -->
    </div>
</x-app-layout>