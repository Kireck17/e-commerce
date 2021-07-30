@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center space-x-3 text-gray-700 p-2 rounded-md 
            font-medium bg-gray-200  focus:shadow-outline'
            : 'flex items-center space-x-3 text-gray-700 p-2 rounded-md 
            font-medium hover:bg-gray-200  focus:shadow-outline';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
