@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-white bg-black border-gray-300 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm']) !!}>
