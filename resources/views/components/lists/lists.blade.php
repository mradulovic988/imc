<!-- List start here -->
<div class="favorite-name-list">
    <div class="sm:block md:flex lg:flex">
        <a class="hover:text-orange-500 transition ease-in-out duration-200" href="/list/{{ $list->id }}">
            <h2 class="tracking-wider text-gray-700 font-black text-md font-semibold hover:text-orange-500 transition ease-in-out duration-200">
                {{ $list->list_name }}
            </h2>
        </a>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="flex pl-5 items-center text-md font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div class="ml-1 items-end">
                        <svg class="hover:fill-gray-900" width="24" height="24"
                             viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
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
                <x-dropdown-link :href="'/list/'.$list->id.'/edit'">
                    {{ __('Edit') }}
                </x-dropdown-link>

                <form class="hover:cursor-pointer" method="POST" action="/list/{{ $list->id }}">
                    @csrf
                    @method('DELETE')

                    <x-dropdown-link onclick="event.preventDefault();
											this.closest('form').submit();">
                        {{ __('Delete') }}
                    </x-dropdown-link>
                </form>

            </x-slot>
        </x-dropdown>
    </div>
    <div>
        <p class="text-xs my-2">{{ $list->list_description }}</p>
    </div>
    <hr class="my-4">
</div> <!-- End List here -->