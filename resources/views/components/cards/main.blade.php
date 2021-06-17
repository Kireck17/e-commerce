{{-- Emulando las tarjetas --}}
<div class="w-full h-40 sm:h-64 rounded-md shadow-md flex flex-row sm:flex-col bg-blue-400">
    <div class="w-1/2 sm:w-full sm:h-1/2 py-2 flex justify-center">
        {{--<img src="https://images-na.ssl-images-amazon.com/images/I/81AT%2BFlc%2BEL._AC_SX679_.jpg" alt="" class="w-3/4 h-full rounded-md">--}}
        <div class="w-3/4 h-full rounded-md bg-white"></div>
    </div>
    <div class="w-1/2 sm:w-full sm:h-1/2 py-1 px-3 flex-1 min-w-0 space-y-3">
        <span class="uppercase text-xl font-bold text-white">
            {{$trademark}}
        </span>
        <p class="text-lg font-medium leading-4 sm:truncate text-white">
            {{$name}}
        </p>
        <button class="border rounded-full w-full text-center text-white">
            {{$price}}
        </button>
    </div>
</div>