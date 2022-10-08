@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed bottom-0 w-auto mx-auto transform-translate-x-1/2 bg-gray-900 text-white px-48 py-3">
        {{ session('message') }}
    </div>
@endif