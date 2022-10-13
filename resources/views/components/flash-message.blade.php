@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="bg-gray-900 bottom-0 fixed left-0 px-2 py-3 text-white w-full">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('userDeleted'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)"
         class="bg-gray-900 text-white w-full rounded py-3 px-2 my-10">
        {{ session('userDeleted') }}
    </div>
@endif

@if (session()->has('lists'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="bg-gray-900 bottom-0 fixed left-0 px-2 py-3 text-white w-full">
        {{ session('lists') }}
    </div>
@endif

@if (session()->has('favorites'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
         class="bg-gray-900 bottom-0 fixed left-0 px-2 py-3 text-white w-full">
        {{ session('favorites') }}
    </div>
@endif