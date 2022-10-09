<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <div class="flex flex-wrap bg-gray-100 w-full h-screen">
                <div class="w-3/12 bg-white rounded p-3 shadow-lg">
                    <x-dashboard.sidebar-info/>
                    <x-dashboard.vertical-sidebar/>
                </div>

                <div class="w-9/12 bg-white rounded">
                    <div class="p-4 text-gray-500">
                        notifications
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>