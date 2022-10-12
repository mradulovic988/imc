<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your list') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <!-- Movies list -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="w-96">
                            <div class="mt-2">
                                <a href="{{ route('create-your-list.create') }}">
                                    <button class="w-full text-md uppercase font-semibold px-4 py-2 mx-auto bg-indigo-700 text-white hover:bg-indigo-900 transition ease-in-out duration-200 rounded">
                                        Create your list
                                    </button>
                                </a>
                                <p class="text-sm text-center mt-1">List your movie, TV & celebrity picks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        @foreach($lists as $list)
                            @if ($list->user_id === auth()->user()->id )
                                <x-lists.lists :list="$list"/>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- End Movies list -->
    </div>
</x-app-layout>