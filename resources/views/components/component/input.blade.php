@props(['addon'])
@php
$classes = ($addon ?? false)
            ? 'px-3 py-2 rounded-md shadow-sm border border-turquoise-light focus:outline-none focus:border-turquoise-dark text-xs sm:text-sm md:text-base'
            : 'px-3 py-2 rounded-md shadow-sm border border-turquoise-light focus:outline-none focus:border-turquoise-dark focus:ring focus:ring-turquoise-light text-xs sm:text-sm md:text-base';
@endphp
<input 
{{$attributes->merge(['class'=> $classes])}}>
