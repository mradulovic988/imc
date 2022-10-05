<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favorite list') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <!-- Movies list -->
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="movies-list">
                            <h2 class="tracking-wider text-gray-700 text-lg font-semibold">
                                Your Movies list
                            </h2>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//xIGr7UHsKf0URWmyyd5qFMAq4d8.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//6b7swg6DLqXCO3XUsMnv6RwDMW2.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//spCAxD99U1A6jsiePFoqdEcY0dG.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//wSqAXL1EHVJ3MOnJzMhUngc8gFs.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Movies list -->


        <!-- TV Shows list -->
        <div class="max-w-screen-2xl my-8 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="tv-show">
                            <h2 class="tracking-wider text-gray-700 text-lg font-semibold">
                                Your TV Shows list
                            </h2>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//tVxDe01Zy3kZqaZRNiXFGDICdZk.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//xIGr7UHsKf0URWmyyd5qFMAq4d8.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//6b7swg6DLqXCO3XUsMnv6RwDMW2.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//spCAxD99U1A6jsiePFoqdEcY0dG.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                                <!-- Starts cols here -->
                                <div class="mt-8">
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w500//wSqAXL1EHVJ3MOnJzMhUngc8gFs.jpg"
                                             alt="poster"
                                             class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                    <div class="mt-2">
                                        <a href="#"
                                           class="text-lg mt-2 hover:text-gray:300">Avengers</a>
                                        <div class="flex items-center text-gray-400 text-sm mt-1">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                          data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="ml-1">7.48</span>
                                            <span class="mx-2">|</span>
                                            <span>Jan, 23 2022</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">
                                            Action, Drama, Comedy
                                        </div>
                                    </div>
                                </div> <!-- Ends cols here -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End TV Shows list -->
    </div>
</x-app-layout>