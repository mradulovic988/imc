<div class="mt-8">
    <a href="{{ route('tv.show', $tvshow['id']) }}">
        <img src="{{ $tvshow['poster_path'] }}" alt="poster"
             class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <div class="mt-4 relative">
            <a href="{{ route('tv.show', $tvshow['id']) }}"
               class="text-lg mt-2 hover:text-gray:300">{{ $tvshow['name'] }}</a>
            @auth
                <div class="inline-flex">
                    <a href="#" id="favoriteOpenModal" class="text-end float-right absolute top-0 right-0 mt-1">
                        <svg width="20px" height="20px" viewBox="0 0 100 100" version="1.1"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g class="stroke-red-400 hover:fill-red-400 focus:fill-red-400 active:fill-red-400 transition ease-in-out duration-150"
                               id="38.-Hearth" stroke="none" stroke-width="1" fill="transparent" fill-rule="evenodd"
                               stroke-linecap="round"
                               stroke-linejoin="round">
                                <g transform="translate(2.000000, 5.000000)" id="Layer-1" stroke="" stroke-width="4">
                                    <path d="M0,28.4968421 C0,71.2421048 42.215625,90.24 48,90.24 C53.784375,90.24 96,71.2421048 96,28.4968421 C96,28.2459588 95.9824899,28.0047118 95.9481422,27.7728233 C95.9825427,27.2269576 96,26.6765487 96,26.1221053 C96,11.6952649 84.1803174,0 69.6,0 C60.6712427,0 52.7777636,4.3858941 48,11.0991442 C43.2222364,4.3858941 35.3287573,0 26.4,0 C11.8196826,0 0,11.6952649 0,26.1221053 C0,26.6770096 0.0174863673,27.2278728 0.0519436085,27.7741847 C0.0175367953,28.0057341 0,28.2465295 0,28.4968421 Z"></path>
                                </g>
                            </g>
                        </svg>
                    </a>

                    <div id="favoriteModal"
                         class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto z-50 hidden">
                        <div id="menu" class="w-full h-full bg-gray-900 bg-opacity-80 top-0 fixed sticky-0">
                            <div class="2xl:container  2xl:mx-auto py-48 px-4 md:px-28 flex justify-center items-center">
                                <div class="w-96 md:w-auto dark:bg-gray-800 relative flex flex-col justify-center items-center bg-white py-16 px-4 md:px-24 xl:py-24 xl:px-36">
                                    <button type="button" id="closeFavoriteModal"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            >
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="text-center">
                                        <a href="{{ route('tv.show', $tvshow['id']) }}" target="_blank">
                                            <img src="{{ $tvshow['poster_path'] }}" alt="poster"
                                                 class="mx-auto mb-4 w-48 h-auto text-gray-400 dark:text-gray-200 hover:opacity-75 rounded transition ease-in-out duration-150">

                                            <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">{{ $tvshow['name'] }}</h3>
                                        </a>

                                        <div class="flex items-center text-gray-400 text-sm mt-1 mb-2">
                                            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                                                <g data-name="Layer 2">
                                                    <path
                                                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                                            data-name="star"/>
                                                </g>
                                            </svg>

                                            <span class="text-sm font-bold text-gray-500 dark:text-gray-400 ml-1">{{ $tvshow['vote_average'] }}</span>
                                            <span class="text-sm font-bold text-gray-500 dark:text-gray-400 mx-2">|</span>
                                            <span class="text-sm font-bold text-gray-500 dark:text-gray-400">{{ $tvshow['first_air_date'] }}</span>
                                            <span class="text-sm font-bold text-gray-500 dark:text-gray-400 mx-2">|</span>
                                            <span class="text-sm font-bold text-gray-500 dark:text-gray-400">{{ $tvshow['genres'] }}</span>
                                        </div>

                                        <div class="inline-flex items-center text-gray-400 text-sm mt-6 my-2">

                                            <form action="/favorites" method="POST">
                                                @csrf
                                                <input type="hidden" name="show_category" value="tv">
                                                <input type="hidden" name="show_id" value="{{ $tvshow['id'] }}">
                                                <input type="hidden" name="show_name" value="{{ $tvshow['name'] }}">
                                                <input type="hidden" name="show_rating"
                                                       value="{{ $tvshow['vote_average'] }}">
                                                <input type="hidden" name="show_date"
                                                       value="{{ $tvshow['first_air_date'] }}">
                                                <input type="hidden" name="show_genre" value="{{ $tvshow['genres'] }}">
                                                <input type="hidden" name="show_image"
                                                       value="{{ $tvshow['poster_path'] }}">
                                                <select class="py-2.5 text-sm font-normal border border-gray-900 text-gray-500 rounded-lg inline-flex items-center"
                                                        name="list_id" id="list-id">
                                                    <option value="">Choose a list</option>
                                                    @foreach($tvshow['lists'] as $list)
                                                        @if ($list->user_id === auth()->user()->id )
                                                            <option value="{{ $list->id }}">{{ $list->list_name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <button class="bg-white border border-orange-300 hover:border-orange-500 hover:text-orange-500 focus:outline-none font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mx-2 text-orange-500 transition ease-in-out duration-200">
                                                    <svg class="w-5 h-auto fill-gray-900 hover:fill-orange-500 transition ease-in-out duration-150"
                                                         viewBox="0 0 32 32" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd" sketch:type="MSPage">
                                                            <g class="fill-orange-500" id="icon-40-clipboard-list"
                                                               sketch:type="MSArtboardGroup">
                                                                <path d="M12,5 L12,3.99791312 C12,2.89826062 12.897616,2 14.0048815,2 L14.9951185,2 C16.1061002,2 17,2.89449617 17,3.99791312 L17,5 L19.0044225,5 C19.555163,5 20,5.44724809 20,5.99895656 L20,7.00104344 C20,7.55733967 19.5542648,8 19.0044225,8 L9.9955775,8 C9.44483697,8 9,7.55275191 9,7.00104344 L9,5.99895656 C9,5.44266033 9.44573523,5 9.9955775,5 L12,5 L12,5 Z M11.0000005,4 L10.0027601,4 C8.89828672,4 8.00262776,4.89128252 8.00000577,6 L6.99742191,6 C5.89427625,6 5,6.88976324 5,8.00359486 L5,28.9964051 C5,30.10296 5.89092539,31 6.99742191,31 L22.0025781,31 C23.1057238,31 24,30.1102368 24,28.9964051 L24,8.00359486 C24,6.89703997 23.1090746,6 22.0025781,6 L20.9999942,6 L20.9999942,6 C20.9973726,4.89497907 20.1048269,4 18.9972399,4 L17.9999995,4 C17.9990959,2.34299141 16.6497738,1 14.9907455,1 L14.0092545,1 C12.3478441,1 11.0008998,2.33812603 11.0000005,4 L11.0000005,4 L11.0000005,4 Z M20.9999942,7 L22.0000398,7 C22.5452911,7 23,7.44908998 23,8.00307055 L23,28.9969294 C23,29.5610822 22.5523026,30 22.0000398,30 L6.9999602,30 C6.45470893,30 6,29.55091 6,28.9969294 L6,8.00307055 C6,7.43891776 6.44769743,7 6.9999602,7 L8.00000579,7 C8.00262739,8.10502093 8.89517314,9 10.0027601,9 L18.9972399,9 C20.1017133,9 20.9973722,8.10871748 20.9999942,7 L20.9999942,7 L20.9999942,7 Z M14.5,5 C14.7761424,5 15,4.77614239 15,4.5 C15,4.22385761 14.7761424,4 14.5,4 C14.2238576,4 14,4.22385761 14,4.5 C14,4.77614239 14.2238576,5 14.5,5 L14.5,5 Z M13,14 L13,15 L21,15 L21,14 L13,14 L13,14 Z M8,13 L8,16 L11,16 L11,13 L8,13 L8,13 Z M9,14 L9,15 L10,15 L10,14 L9,14 L9,14 Z M8,18 L8,21 L11,21 L11,18 L8,18 L8,18 Z M9,19 L9,20 L10,20 L10,19 L9,19 L9,19 Z M13,19 L13,20 L21,20 L21,19 L13,19 L13,19 Z M8,23 L8,26 L11,26 L11,23 L8,23 L8,23 Z M9,24 L9,25 L10,25 L10,24 L9,24 L9,24 Z M13,24 L13,25 L21,25 L21,24 L13,24 L13,24 Z"
                                                                      id="clipboard-list"
                                                                      sketch:type="MSShapeGroup"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    Save to list
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
            <div class="flex items-center text-gray-400 text-sm mt-1">
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
            </div>
        </div>
        <div class="text-gray-400 text-sm">
            {{ $tvshow['genres'] }}
        </div>
    </div>
</div>
