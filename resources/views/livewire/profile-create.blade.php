<form wire:submit.prevent="addProfile">
    @csrf
    <div class="overflow-hidden shadow sm:rounded-md">
        <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="first_name"
                           class="block text-sm font-medium text-gray-700">First
                        name</label>
                    <input type="text" name="name" id="name"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="name" placeholder="{{ auth()->user()->name }}"
                    >
                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="last_name"
                           class="block text-sm font-medium text-gray-700">Last
                        name</label>
                    <input type="text" name="last_name" id="last_name"
                           autocomplete="family-name"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="last_name" placeholder="{{ auth()->user()->last_name }}"
                    >
                    @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6">
                    <label for="email"
                           class="block text-sm font-medium text-gray-700">Add/Change Email
                        address</label>
                    <input type="text" name="email" id="email"
                           autocomplete="email"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="email" placeholder="{{ auth()->user()->email }}"
                    >
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="country"
                           class="block text-sm font-medium text-gray-700">Country</label>

                    <input type="text" name="country" id="country"
                           autocomplete="country"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="country" placeholder="{{ auth()->user()->country }}"
                    >
                    @error('country')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="state"
                           class="block text-sm font-medium text-gray-700">State
                        / Province</label>
                    <input type="text" name="state" id="state"
                           autocomplete="address-level1"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="state" placeholder="{{ auth()->user()->state }}"
                    >
                    @error('state')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="city"
                           class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" name="city" id="city"
                           autocomplete="address-level2"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="city" placeholder="{{ auth()->user()->city }}"
                    >
                    @error('city')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="zip"
                           class="block text-sm font-medium text-gray-700">ZIP /
                        Postal code</label>
                    <input type="text" name="zip" id="zip"
                           autocomplete="postal-code"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="zip" placeholder="{{ auth()->user()->zip }}">
                    @error('zip')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="address"
                           class="block text-sm font-medium text-gray-700">Street
                        address</label>
                    <input type="text" name="address" id="address"
                           autocomplete="street-address"
                           class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                           wire:model="address" placeholder="{{ auth()->user()->address }}"
                    >
                    @error('address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-span-6">
                    <div class="flex justify-center items-center w-full">
                        <label for="dropzone-file"
                               class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                @if ($file)
                                    <img class="w-48 rounded-lg object-contain" src="{{ $file->temporaryUrl() }}">
                                @else
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none"
                                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                @endif
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                                    or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">JPG, JPEG, or PNG</p>
                            </div>
                            <input id="dropzone-file" name="file" type="file" wire:model="file" class="hidden"/>
                            @error('file')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </label>
                    </div>
                </div>

                <x-flash-message/>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" name="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Save
            </button>
        </div>
    </div>
</form>
