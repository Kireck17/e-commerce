{{-- Emulando las tarjetas --}}
<div class="border border-gray-900 w-full h-56 sm:h-80 rounded-md shadow-md flex flex-row sm:flex-col bg-white transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">

    <div class="w-1/2 sm:w-full sm:h-1/2 py-2 flex justify-center">
        
        
        <div class="w-3/4 h-full rounded-md bg-black">
         {{$image}}
        </div>
    </div>
    
    <div class="w-1/2 sm:w-full sm:h-1/2 py-1 px-3 flex-1 min-w-0 space-y-3">
    
        <span class="uppercase text-xl font-bold text-black">
            {{$trademark}}
        </span>
        <p class="text-lg font-medium leading-4  text-black">
            {{$name}}
        </p>
        <button class="lg:hidden h-10 border  border-gray-900 w-full text-center text-black">
            {{$price}}
        </button>
    </div>
    
    <button class=" h-10 border  border-gray-900 w-full text-center text-black">
            {{$price}}
    </button>
    

</div>