@props(['datos','columna'])
<div x-data="{{ json_encode(['datos' => $datos,'columna' => $columna,'search' => "", 'filteredData' => [],'visible' => false]) }}" {{$attributes->merge(['class' => "w-full relative"])}}
	x-init="filteredData=datos;
	$watch('search', value => {
		var filterKey = value.toLowerCase();
		if (filterKey) {
			visible = true;
			filteredData = datos.filter(function(row) {
				return Object.keys(row).some(function(key) {
					return (
						String(row[key])
						.toLowerCase()
						.indexOf(filterKey) > -1
					);
				});
			});
        }else{
        	visible = false;
        	filteredData=datos;
        }
	});"
>
	{{$slot}}
	<ul x-show="visible" @click.outside="visible = !visible" class="absolute top-11 z-50 w-full bg-white divide-y divide-gray-400 rounded-md shadow-md overflow-y-auto max-h-54" x-model="search">
		<template x-for="(dato,index) in filteredData">
			<li x-text="dato[columna]" class="flex justify-center items-center text-lg font-bold h-8 px-3 py-1 cursor-pointer hover:bg-gray-200" @click="$dispatch('input',dato[columna])">
			</li>
		</template>
	</ul>
</div>