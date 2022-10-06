@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block mt-1 w-full border-yellow-500 shadow-sm focus:accent-yellow-600 focus:ring-yellow-600 sm:text-sm']) !!}>
