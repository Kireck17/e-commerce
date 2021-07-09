@props(['link'])

{{--tarjetas Categoria--}}
<div class="border-2 h-auto border-cian-dark w-full h-56 sm:h-80 rounded-md shadow-md flex flex-row sm:flex-col bg-white transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">

    <div class="w-1/2 sm:w-full sm:h-1/2 py-2 flex justify-center">


        <div class="w-3/4 h-full flex justify-center">
            {{$image}}
        </div>
    </div>

    <div class="w-1/2 sm:w-full sm:h-1/2 sm:py-1 py-3 px-3 sm:flex-1 sm:min-w-0 flex flex-col justify-between  sm:justify-start space-y-3">

        <p class="uppercase text-xl font-bold text-cian-dark text-center">
            {{$trademark}}
        </p>

        <p class="text-lg font-medium leading-4  text-black">
            {{$name}}
        </p>

        <a href="{{$link}}" class="sm:hidden flex text-center justify-center items-center bg-cian-dark h-10 border-2  border-cian-dark w-full  text-white focus:outline none">
           {{$price}}
        </a>
    </div>

    <a href="{{$link}}" class="hidden sm:flex justify-center items-center bg-cian-dark h-10 border-2  border-cian-dark w-full  text-white focus:outline none">
        {{$price}}
    </a>
</div>