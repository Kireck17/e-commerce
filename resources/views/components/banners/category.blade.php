@props(['url','description'])
<div class="flex relative text-center py-2 h-60 sm:h-72 bg-white">
	  <img class="my-1 w-full h-full block sm:block object-contain object-center shadow-md sm:shadow-xl" src="{{$url}}" alt="Banner" />
	  @if($description != "")
		  <h1 class="text-3xl tracking-wider text-white text-sha uppercase font-black  p-4 self-center z-10 content-center absolute text-center w-full md:text-4xl bg-gray-900 bg-opacity-80">
		  	{{$description}}
		  </h1>
	  @endif
</div>