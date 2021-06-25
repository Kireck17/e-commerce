<div class="flex flex-col sm:flex-row justify-between border border-gray-400 rounded-md shadow-md py-3 ">
	<div class="w-full sm:w-4/6 flex justify-between items-center">
		<div class="p-2 w-2/6 sm:w-1/6">
			{{$image}}
		</div>
		<div class="w-4/6 sm:w-5/6 flex flex-col justify-center items-start px-3 space-y-3">
			{{$data}}
		</div>
	</div>
	<div class="w-full sm:w-2/6 p-3 flex flex-col justify-center items-center space-y-3">
		{{$buttons}}
	</div>
</div>