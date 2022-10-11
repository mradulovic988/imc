@extends('layouts.public.main')

@section('content')
    <div class="tv-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{ $tvshow['poster_path'] }}" alt="parasite" class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $tvshow['name'] }}
                    ({{ $tvshow['first_air_date'] }})</h2>
                <p class="mt-1 mb-2" style="font-style: italic">{{ $tvshow['tagline'] }}</p>
                <div class="flex items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                    d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                    data-name="star"/>
                        </g>
                    </svg>

                    <span class="ml-1">{{ $tvshow['vote_average'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $tvshow['first_air_date'] }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        {{ $tvshow['genres'] }}
                    </span>
                </div>
                <p class="text-gray-300 mt-8">{{ $tvshow['overview'] }}</p>
                <div class="mt-12">
                    <div class="flex mt-4">
                        @foreach ($tvshow['created_by'] as $crew)
                            <div class="mr-8">
                                <div>{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">Creator</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="inline-flex" x-data="{ isOpen: false }">
                    <div>
                        @if (count($tvshow['videos']['results']) > 0)
                            <div class="mt-12">
                                <button @click="isOpen = true"
                                        class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                    <svg class="w-6 fill-current" viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path
                                                d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                    </svg>
                                    <span class="ml-2">Play Trailer</span>
                                </button>
                            </div>


                            <div style="background-color: rgba(0, 0, 0, .5);"
                                 class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                                 x-show="isOpen">
                                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                    <div class="bg-gray-900 rounded">
                                        <div class="flex justify-end pr-4 pt-2">
                                            <button @click="isOpen = false" @keydown.escape.window="isOpen = false"
                                                    class="text-3xl leading-none hover:text-gray-300">&times;
                                            </button>
                                        </div>
                                        <div class="modal-body px-8 py-8">
                                            <div class="responsive-container overflow-hidden relative"
                                                 style="padding-top: 56.25%">
                                                <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                        src="https://www.youtube.com/embed/{{ $tvshow['videos']['results'][0]['key'] }}"
                                                        style="border:0;" allow="autoplay; encrypted-media"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @auth
                        <div class="m-12">
                            <a href="#" class="flex inline-flex items-center py-2">

                                <svg class="w-10" viewBox="0 0 100 100" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g class="stroke-red-400 hover:fill-red-400 focus:fill-red-400 active:fill-red-400 transition ease-in-out duration-150"
                                       id="38.-Hearth" stroke="none" stroke-width="1" fill="transparent"
                                       fill-rule="evenodd"
                                       stroke-linecap="round"
                                       stroke-linejoin="round">
                                        <g transform="translate(2.000000, 5.000000)" id="Layer-1" stroke=""
                                           stroke-width="4">
                                            <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div><!-- end tv info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($tvshow['cast'] as $cast)
                    <div class="mt-8">
                        <a href="{{ route('actors.show', $cast['id']) }}">
                            <img src="https://image.tmdb.org/t/p/w300/{{ $cast['profile_path'] }}" alt="parasite"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('actors.show', $cast['id']) }}"
                               class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="movie-images border-b border-gray-800" x-data="{ isOpen: false, image: '' }">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($tvshow['images'] as $image)
                    <div class="mt-8">
                        <a href="#"
                           @click.prevent="isOpen = true, image='https://image.tmdb.org/t/p/original/{{ $image['file_path'] }}'">
                            <img src="https://image.tmdb.org/t/p/w500/{{ $image['file_path'] }}" alt="image1"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                    </div>
                @endforeach
            </div>
            <div style="background-color: rgba(0, 0, 0, .5);"
                 class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show="isOpen">
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button @click="isOpen = false" @keydown.escape.window="isOpen = false"
                                    class="text-3xl leading-none hover:text-gray-300">&times;
                            </button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image" alt="poster">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
