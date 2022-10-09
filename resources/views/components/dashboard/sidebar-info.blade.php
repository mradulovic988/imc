<div class="flex items-center space-x-4 p-2 mb-5">
    @if (auth()->user()->file)
        <img class="h-12 rounded-full"
             src="{{ asset('storage/' . auth()->user()->file) }}" alt="">
    @endif
    <div>
        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{ auth()->user()->name }}</h4>
        <span class="text-sm tracking-wide flex items-center space-x-1">
                    <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg><span class="text-gray-600">Admin</span>
                </span>
    </div>
</div>