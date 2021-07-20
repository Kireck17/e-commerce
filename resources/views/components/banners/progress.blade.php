<div x-data x-ref="container" {{$attributes->merge(['class' => 'fixed inset-0 overflow-y-hidden px-4 py-6 sm:px-0 z-50 bg-turquoise-dark bg-opacity-80 flex justify-center items-center'])}}
x-init="$nextTick (() => {
	if($refs.container.style.display == 'inline-block'){
		document.body.classList.add('overflow-y-hidden');
	}else{
		document.body.classList.remove('overflow-y-hidden');
	}
})">
	<div class="flex justify-center items-center w-full h-full text-white font-bold">
		<i class="fas fa-compact-disc animate-spin text-4xl mr-6"></i>
		<span class="text-xl tracking-widest">
			{{__('Cargando')}} . . .
		</span>
	</div>
</div>