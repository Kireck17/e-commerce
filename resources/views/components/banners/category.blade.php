@props(['description','url'])
<div class="flex relative text-center py-2 h-60 sm:h-72">
	  <h1 class="bg-black bg-opacity-80 text-sm sm:text-3xl leading-4 sm:leading-9 tracking-wider text-white uppercase font-black py-1 px-2 sm:px-6 self-center z-10 content-center absolute text-center w-full">
	  	“{{$description}}”
	  </h1>
	  <img class="w-full h-full block sm:block object-cover shadow-md sm:shadow-xl" src="{{$url}}" alt="Banner" />
</div>