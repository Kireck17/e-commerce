@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-white py-3 px-6 flex justify-between items-center font-bold text-base text-turquoise-dark border-l-8 border-turquoise-dark'
            : 'bg-white py-3 px-6 flex justify-between items-center font-bold text-base text-turquoise-dark';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>