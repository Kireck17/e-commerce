<div class="flex flex-col space-y-4">
	<div class="flex flex-col sm:flex-row justify-between items-center">
		<div class="w-full sm:w-1/2 px-2 py-4">
			<h1 class="font-serif text-black text-2xl">
                {{$title}}
            </h1>
		</div>
		@if(isset($signals))
			<div class="w-full sm:w-1/2 grid grid-cols-4 gap-4">
				{{$signals}}
			</div>
		@endif
	</div>
	<div class="flex justify-between">
		{{$controls}}
	</div>
	<div class="">
		{{$content}}
		@if(isset($pagination))
			<div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
	            {{$pagination}}
	        </div>
	    @endif
	</div>
</div>