@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-lg font-semibold text-turquoise-dark px-3 py-2 hover:text-gray-400 border-b-2 border-turquoise-dark'
            : 'text-lg font-semibold text-turquoise-dark px-3 py-2 hover:text-gray-400 border-b-2 border-gray-400';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>