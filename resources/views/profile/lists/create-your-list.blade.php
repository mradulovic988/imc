<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a list') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <!-- My Profile -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="create-list">
                            <form action="{{ route('lists.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="overflow-hidden shadow sm:rounded-md">
                                    <div class="bg-white px-4 py-5 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <label for="list_name"
                                                       class="block text-sm font-medium text-gray-700">List name</label>
                                                <input type="text" name="list_name" id="list_name"
                                                       class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                                       placeholder="Favorite list" value="{{ old('list_name') }}">
                                                @error('list_name')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="col-span-6">
                                                <label for="list_description"
                                                       class="block text-sm font-medium text-gray-700">List
                                                    Descripton</label>
                                                <div class="mt-1">
                                                    <textarea id="list_description" name="list_description" rows="3"
                                                              class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                                              placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">{{ old('list_description') }}</textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">Brief description for your
                                                    list.</p>
                                                @error('list_description')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                @enderror
                                            </div>

                                            <button class="inline-flex justify-center rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                Create
                                            </button>
                                            <a class="py-2 px-4 font-medium text-gray-600 hover:text-gray-900 transition ease-in-out duration-200" href="{{ route('your-lists.index') }}">Back to lists</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>