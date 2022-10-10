<div id="showUserModal" class="hidden relative flex justify-center items-center">
    <div id="menu" class="w-full h-full bg-gray-900 bg-opacity-80 top-0 fixed sticky-0">
        <div class="2xl:container  2xl:mx-auto py-48 px-4 md:px-28 flex justify-center items-center">
            <div class="w-96 md:w-auto dark:bg-gray-800 relative flex flex-col justify-center items-center bg-white py-16 px-4 md:px-24 xl:py-24 xl:px-36">
                <button type="button" id="closeUserModal"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div role="banner">
                    @if ($user->file)
                        <img class="w-48 h-48 object-cover rounded-full"
                             src="{{ asset('storage/' . $user->file) }}" alt="">
                    @else
                        <img class="w-48 h-48 object-contain rounded-full"
                             src="/img/profile/avatar.jpeg" alt="">
                    @endif
                </div>
                <div class="mt-12">
                    <h1 role="main"
                        class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-center text-gray-800">
                        {{ $user->name . ' ' . $user->last_name ?? '' }}</h1>
                </div>
                <div class="mt">
                    @if ($user->email)
                        <p class="mt-6 sm:w-80 text-base dark:text-white leading-7 text-center text-gray-800">Email: <a
                                    class="hover:text-gray-900"
                                    href="mailto:{{ $user->email }}">{{ $user->email }}</a></p>
                    @endif
                    @if ($user->country)
                        <p class="sm:w-80 text-base dark:text-white leading-7 text-center text-gray-800">
                            Country: {{ $user->country }}</p>
                    @endif
                    @if ($user->state)
                        <p class="sm:w-80 text-base dark:text-white leading-7 text-center text-gray-800">
                            State: {{ $user->state }}</p>
                    @endif
                    @if ($user->city)
                        <p class="sm:w-80 text-base dark:text-white leading-7 text-center text-gray-800">
                            City: {{ $user->city }}</p>
                    @endif
                    @if ($user->zip)
                        <p class="sm:w-80 text-base dark:text-white leading-7 text-center text-gray-800">
                            ZIP/Postal code: {{ $user->zip }}</p>
                    @endif
                    @if ($user->address)
                        <p class="sm:w-80 text-base dark:text-white leading-7 text-center text-gray-800">
                            Street address: {{ $user->address }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>