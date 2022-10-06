@foreach($profiles as $profile)
    @if (auth()->user()->id === $profile->user_id)
        <form wire:submit.prevent="addProfile">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name"
                                   class="block text-sm font-medium text-gray-700">First
                                name</label>
                            <input type="text" name="first_name" id="first_name"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="first_name" placeholder="{{ $profile->first_name }}">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last_name"
                                   class="block text-sm font-medium text-gray-700">Last
                                name</label>
                            <input type="text" name="last_name" id="last_name"
                                   autocomplete="family-name"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="last_name" placeholder="{{ $profile->last_name }}">
                        </div>

                        <div class="col-span-6">
                            <label for="email"
                                   class="block text-sm font-medium text-gray-700">Email
                                address</label>
                            <input type="text" name="email" id="email"
                                   autocomplete="email"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="email" placeholder="{{ $profile->email }}">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="country"
                                   class="block text-sm font-medium text-gray-700">Country</label>
                            <select id="country" name="country"
                                    autocomplete="country-name"
                                    class="mt-1 block w-full rounded-md border border-yellow-500 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                    wire:model="country">
                                <option selected>{{ $profile->country }}</option>
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="state"
                                   class="block text-sm font-medium text-gray-700">State
                                / Province</label>
                            <input type="text" name="state" id="state"
                                   autocomplete="address-level1"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="state" placeholder="{{ $profile->state }}">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="city"
                                   class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" name="city" id="city"
                                   autocomplete="address-level2"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="city" placeholder="{{ $profile->city }}">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="zip"
                                   class="block text-sm font-medium text-gray-700">ZIP /
                                Postal code</label>
                            <input type="text" name="zip" id="zip"
                                   autocomplete="postal-code"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="zip" placeholder="{{ $profile->zip }}">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="address"
                                   class="block text-sm font-medium text-gray-700">Street
                                address</label>
                            <input type="text" name="address" id="address"
                                   autocomplete="street-address"
                                   class="mt-1 block w-full rounded-md border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm"
                                   wire:model="address" placeholder="{{ $profile->address }}">
                        </div>
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
    @endif
@endforeach