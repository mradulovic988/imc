@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="bg-gray-900 bottom-0 fixed left-0 px-2 py-3 text-white w-full">
        {{ session('message') }}
    </div>
@endif