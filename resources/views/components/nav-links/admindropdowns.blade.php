@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-2 my-2 text-sm font-semibold bg-transparent 
            rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 
            dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white 
            dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 bg-gray-200 
            focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 my-2 text-sm font-semibold bg-transparent 
            rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 
            dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white 
            dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 
            focus:bg-gray-200 focus:outline-none focus:shadow-outline';
@endphp
<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
