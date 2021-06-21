@props(['link'])
<a href="">
        <div class="min-h-full max-h-full mx-auto overflow-hidden bg-gray-900 rounded-lg border border-opacity-10 shadow-sm hover:shadow-4xl">
            <div class="px-4 py-2 bg-white">
                <h1 class="text-3xl font-bold text-gray-800 lowercase dark:text-white">
                
                {{$name}}
                
                </h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">

                {{$category}}

                </p>
            </div>
            <div class="px-4 py-2 bg-white">
                {{$img}}
            </div>
            <div class="px-4 py-2 space-x-2 bg-gray-900">
                <h1 class=" inline-block text-lg font-bold text-white">
                    {{$price}}
                </h1>
                <spam class="px-2 py-1 inline-block text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">
                agregar
                </spam>
            </div>
        </div>
</a>