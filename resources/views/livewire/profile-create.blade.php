<form wire:submit.prevent="addProfile">
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
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button @click="editData = !editData" type="submit" name="submit"
                    class="inline-flex justify-center rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Save
            </button>
        </div>
    </div>
    <x-flash-message/>
</form>
