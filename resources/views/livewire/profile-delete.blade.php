<div class="bg-red-50 sm:rounded-lg">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:py-16 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block text-red-600">Delete your account?</span>
            <span class="block text-red-900 text-lg">This action cannot be undone. Are you sure you want to proceed?</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="#" wire:click.prevent="deleteProfile({{ auth()->user()->id }})"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-5 py-3 text-base font-medium text-white hover:bg-red-700">Delete
                    account</a>
            </div>
        </div>
    </div>
    <x-flash-message/>
    @if(session()->has('message'))
        <script>setTimeout(() => window.location.href = '/', 3000);</script>
    @endif
</div>