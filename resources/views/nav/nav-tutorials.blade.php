<div class="h-full">
    <div class="h-full hidden sm:flex ">
        <div class="h-full w-full bg-white p-3 shadow-lg">
            
            <div class="px-3 flex justify-center items-center ">
                <a href="">
                    <img class="h-16 w-auto" src="{{asset('storage/logos/Tutoriales.jpg')}}" alt="">
                </a>
            </div>
            <ul class="space-y-2 text-sm mt-5">
                <li>
                    <a href="{{route('content')}}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600 ">
                        <i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>
                        </span>
                        <span>Tutorial 1</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600 ">
                        <i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>
                        </span>
                        <span>Tutorial 2</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600 ">
                        <i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>
                        </span>
                        <span>Tutorial 3</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600 ">
                        <i class="fa fa-file-text-o fa-lg" aria-hidden="true"></i>
                        </span>
                        <span>Tutorial 4</span>
                    </a>
                </li>
            </ul>
        </div>    
    </div>
    <nav x-data="{ open: false }" class="bg-white border-b border-turquoise-dark">
    
        {{-- Navegación responsive --}}
        <div class="flex flex-col sm:hidden">
            <div class="flex justify-between items-center">
                <div class="px-8">
                    <a href="">
                        <img class="h-16 w-auto" src="{{asset('storage/logos/originalsaxcar.png')}}" alt="">
                    </a>
                </div>
                <!-- Hamburger -->
                <div class="mx-6 flex items-center lg:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-turquoise-dark focus:outline-none focus:text-turquoise-light">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
    </nav>
</div>

              