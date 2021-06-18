@props(['link'])
<a href="" class="h-96 w-full">
    <div class="relative flex flex-col rounded-md shadow-inner w-full h-full bg-gradient-to-r from-yellow-500 to-yellow-700 bg-opacity-20 px-3 py-6 transform hover:-translate-y-1 hover:scale-110 duration-300 ease-in-out">
        <svg class="absolute bottom-0 left-0 mb-8 " viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
        </svg>
        <div class="flex justify-center items-center h-2/4">
            <div class="h-full w-full bg-white rounded-md">
                {{$image}}
            </div>
        </div>
        <div class="flex flex-col space-y-3 h-1/4">
            <span class="text-gray-900 font-bold text-center text-xl">
               {{$trademark}}
            </span>
            <span class="text-white font-extralight text-lg text-left">
                {{$name}}
            </span>
        </div>
        <div class="flex flex-col-reverse items-center h-1/4">
            <span class="bg-cian-light text-lg text-white font-extralight text-center rounded-full px-6 py-3 leading-3 w-1/2">
               {{$price}}
            </span>
        </div>
    </div>
</a>