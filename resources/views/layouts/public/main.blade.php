<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>International Movie Collection (IMC)</title>
    @vite('resources/css/app.css')
    @livewireStyles
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li><a href="{{ route('movies.index') }}">
                    <img class="w-32" src="/img/logo.png" alt="">
                </a></li>
            <li class="md:ml-16"><a class="hover:text-gray-300" href="{{ route('movies.index') }}">Movies</a></li>
            <li class="md:ml-6"><a class="hover:text-gray-300" href="{{ route('tv.index') }}">TV Shows</a></li>
            <li class="md:ml-6"><a class="hover:text-gray-300" href="{{ route('actors.index') }}">Actors</a></li>
        </ul>
        @auth
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div class="relative mt-3">
                            <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1"
                                   placeholder="Search">
                            <div class="absolute top-0">
                                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
                                    <path class="heroicon-ui"
                                          d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"></path>
                                </svg>
                            </div>
                            <div class="spinner top-0 right-0 mr-4 mt-4"></div>
                        </div>
                        @if (auth()->user()->file)
                            <img class="w-8 h-8 object-cover rounded-full m-2"
                                 src="{{ asset('storage/' . auth()->user()->file) }}" alt="">
                        @else
                            <div>{{ Auth::user()->name }}</div>
                        @endif

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('favorites.index')">
                        {{ __('Favorite list') }}
                    </x-dropdown-link>

                    <x-dropdown-link :href="route('profile.index')">
                        {{ __('My Profile') }}
                    </x-dropdown-link>

                    @admin
                    <x-dropdown-link :href="route('dashboard.users')">
                        {{ __('Dashboard') }}
                    </x-dropdown-link>
                    @endadmin
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        @endauth

        @guest
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <x-dropdown-link class="text-white hover:text-gray-800 focus:text-gray-800 hover:cursor-pointer"
                                     onclick="event.preventDefault()">
                        {{ __('Sign Up') }}
                    </x-dropdown-link>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('login')">
                        {{ __('Log In') }}
                    </x-dropdown-link>

                    <x-dropdown-link :href="route('register')">
                        {{ __('Register') }}
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        @endguest
    </div>
</nav>
@yield('content')

@livewireScripts
@livewire('livewire-ui-modal')
@yield('scripts')
</body>

</html>
