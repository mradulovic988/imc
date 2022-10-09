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
                                <livewire:profile-delete/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>