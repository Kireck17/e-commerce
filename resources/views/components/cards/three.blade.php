@props(['link'])
{{-- Emulando las tarjetas --}}
<div class="flex flex-row w-full h-64 sm:h-80 sm:flex-col bg-white  border-2 border-white rounded-md shadow-md   transform sm:hover:shadow-6xl hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
    <div class="flex justify-center w-1/2 sm:w-full sm:h-1/2 py-2">    
        <div class="flex justify-center w-3/4 h-full ">
            {{$image}}
        </div>
    </div> 
    <div class="flex flex-col justify-between w-1/2 py-2 px-2 space-y-1 sm:w-full sm:h-1/2 sm:py-1 sm:flex-1 sm:min-w-0 sm:justify-start sm:space-y-3 ">
        <p class="capitalize text-xs  sm:text-left font-light text-yellow-dark ">
            {{$trademark}}
        </p>
        <p class="capitalize text-md sm:uppercase sm:text-lg sm:py-2 font-medium leading-4  text-black">
            {{$name}}
        </p>
        <a href="#" class="lg:hidden sm:flex  justify-center items-center px-1 py-1 bg-turquoise-dark h-10 border-2  border-white w-full rounded-md text-yellow-light focus:outline none ">
            {{$price}}
        </a>
    </div>
    <a href="#" class="justify-center items-center h-10 hidden sm:flex  bg-turquoise-dark text-yellow-light  border-2  border-white w-full rounded-md focus:outline none hover:bg-turquoise-light ">
            {{$price}}
    </a>
</div>