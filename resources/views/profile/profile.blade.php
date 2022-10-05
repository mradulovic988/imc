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
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="overflow-hidden shadow sm:rounded-md">
                                        <div class="bg-white px-4 py-5 sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first-name"
                                                           class="block text-sm font-medium text-gray-700">First
                                                        name</label>
                                                    <input type="text" name="first-name" id="first-name"
                                                           autocomplete="given-name"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="last-name"
                                                           class="block text-sm font-medium text-gray-700">Last
                                                        name</label>
                                                    <input type="text" name="last-name" id="last-name"
                                                           autocomplete="family-name"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>

                                                <div class="col-span-6">
                                                    <label for="email-address"
                                                           class="block text-sm font-medium text-gray-700">Email
                                                        address</label>
                                                    <input type="text" name="email-address" id="email-address"
                                                           autocomplete="email"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="country"
                                                           class="block text-sm font-medium text-gray-700">Country</label>
                                                    <select id="country" name="country"
                                                            autocomplete="country-name"
                                                            class="mt-1 block w-full rounded-md border border-yellow-500 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                                        <option>United States</option>
                                                        <option>Canada</option>
                                                        <option>Mexico</option>
                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="region"
                                                           class="block text-sm font-medium text-gray-700">State
                                                        / Province</label>
                                                    <input type="text" name="region" id="region"
                                                           autocomplete="address-level1"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="city"
                                                           class="block text-sm font-medium text-gray-700">City</label>
                                                    <input type="text" name="city" id="city"
                                                           autocomplete="address-level2"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                    <label for="postal-code"
                                                           class="block text-sm font-medium text-gray-700">ZIP /
                                                        Postal code</label>
                                                    <input type="text" name="postal-code" id="postal-code"
                                                           autocomplete="postal-code"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="street-address"
                                                           class="block text-sm font-medium text-gray-700">Street
                                                        address</label>
                                                    <input type="text" name="street-address" id="street-address"
                                                           autocomplete="street-address"
                                                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                            <button type="submit"
                                                    class="inline-flex justify-center rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                                <div class="bg-red-50">
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