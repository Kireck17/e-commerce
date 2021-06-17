@props(['link'])
<a href="">
        <div class="w-full h-full mx-auto overflow-hidden bg-white rounded-lg border border-opacity-10 shadow-sm hover:shadow-4xl">
            <div class="px-4 py-2">
                <h1 class="text-3xl font-bold text-gray-800 lowercase dark:text-white">
                
                {{$name}}
                
                </h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">

                {{$category}}

                </p>
            </div>
            <div>
                {{$img}}
            </div>
            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                <h1 class="text-lg font-bold text-white">
                    {{$price}}
                </h1>
                <spam class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">
                Add to cart
                </spam>
            </div>
        </div>
</a>