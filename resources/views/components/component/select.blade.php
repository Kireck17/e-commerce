@props(['addon'])

@php
$classes = ($addon ?? false)
            ? 'py-2 rounded-md shadow-sm border border-turquoise-light focus:outline-none focus:border-turquoise-dark focus:ring-0 text-gray-500 text-xs sm:text-sm md:text-base'
            : 'py-2 rounded-md shadow-sm border border-turquoise-light focus:outline-none focus:border-turquoise-dark focus:ring focus:ring-turquoise-light text-gray-500 text-xs sm:text-sm md:text-base';
@endphp
<select {{$attributes->merge(['class' => $classes])}}>
	<option value="">
		{{$default}}
	</option>
	{{$slot}}
</select>