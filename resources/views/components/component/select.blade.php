<select {{$attributes->merge(['class' => 'py-2 rounded-md shadow-sm border border-turquoise-light focus:outline-none text-gray-500 text-xs sm:text-sm md:text-base'])}}>
	@if(isset($default))
		<option value="">
			{{$default}}
		</option>
	@endif
	{{$slot}}
</select>