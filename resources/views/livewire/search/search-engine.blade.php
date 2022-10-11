<div class="relative mx-4" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <input wire:model.debounce.500ms='search' type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1"
           placeholder="Search" @focus="isOpen = true" @keydown.escape.window="isOpen = false">
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
            <path class="heroicon-ui"
                  d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
        </svg>
    </div>
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>
    @if (strlen($search) >= 2)
        <div class="z-50 absolute bg-gray-800 text-sm text-white rounded w-64 mt-4" x-show="isOpen"
             @keydown.escape.window="isOpen = false">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        @if(isset($result['name']) && isset($result['poster_path']))
                            {{-- tv shows --}}
                            <li class="border-b border-gray-700">
                                <a href="{{ route('tv.show', $result['id']) }}"
                                   class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                    @if ($result['poster_path'])
                                        <img class="w-8"
                                             src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                                             alt="{{ $result['name'] }}">
                                    @else
                                        <img class="w-8" src="https://via.placeholder.com/50x75"
                                             alt="{{ $result['name'] }}">
                                    @endif
                                    <span class="ml-4">{{ $result['name'] }}</span>
                                </a>
                            </li>

                        @elseif(isset($result['name']) && isset($result['profile_path']))
                            {{-- actors --}}
                            <li class="border-b border-gray-700">
                                <a href="{{ route('actors.show', $result['id']) }}"
                                   class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                    @if ($result['profile_path'])
                                        <img class="w-8"
                                             src="https://image.tmdb.org/t/p/w92/{{ $result['profile_path'] }}"
                                             alt="{{ $result['name'] }}">
                                    @else
                                        <img class="w-8" src="https://via.placeholder.com/50x75"
                                             alt="{{ $result['name'] }}">
                                    @endif
                                    <span class="ml-4">{{ $result['name'] }}</span>
                                </a>
                            </li>

                        @elseif(isset($result['title']))
                            {{-- movies --}}
                            <li class="border-b border-gray-700">
                                <a href="{{ route('movies.show', $result['id']) }}"
                                   class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                    @if ($result['poster_path'])
                                        <img class="w-8"
                                             src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                                             alt="{{ $result['title'] }}">
                                    @else
                                        <img class="w-8" src="https://via.placeholder.com/50x75"
                                             alt="{{ $result['title'] }}">
                                    @endif
                                    <span class="ml-4">{{ $result['title'] }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>