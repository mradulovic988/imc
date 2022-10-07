<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <!-- My Profile -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="movies-list">
                            <h2 class="tracking-wider text-gray-700 text-lg font-semibold">
                                Personal Information
                            </h2>

                            <div class="mt-8">
                                <livewire:profile-create/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-4">
                        <div class="movies-list">
                            <h2 class="tracking-wider text-gray-700 text-lg font-semibold">
                                Danger Zone
                            </h2>

                            <div class="mt-8">
                                <div class="bg-red-50 sm:rounded-lg">
                                    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
                                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                            <span class="block text-red-600">Delete your account?</span>
                                            <span class="block text-red-900 text-lg">This action cannot be undone. Are you sure you want to proceed?</span>
                                        </h2>
                                        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                                            <div class="inline-flex rounded-md shadow">
                                                <a href="#"
                                                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-5 py-3 text-base font-medium text-white hover:bg-red-700">Delete
                                                    account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>