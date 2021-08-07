<div class="h-full">
    <div class="h-full hidden sm:flex ">
        <div class="h-full w-full bg-white p-3 shadow-lg">
            <div class="px-3 flex justify-center items-center ">
                <a href="{{ route('admin.welcome') }}">
                    <img class="h-16 w-auto" src="{{ asset('storage/logos/originalsaxcar.png') }}" alt="">
                </a>
            </div>
            <ul class="space-y-2 text-sm mt-5">

                
                <x-nav-links.admin href="{{ route('admin.welcome') }}" 
                :active="request()->routeIs('admin.welcome')">
                    <span class="text-gray-600">
                        <i class="fas fa-laptop-house fa-lg"></i>
                    </span>
                    <span>
                        Inicio
                    </span>
                </x-nav-links.admin>
                

                <li @click.away="open = false" class="flex flex-col w-full" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full p-2 space-x-3 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>
                        <i class="fas fa-users-cog text-gray-600 fa-lg" aria-hidden="true"></i>
                            Administrador
                        </span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" class="w-full py-2 pl-4 pr-4">
                            @can('Crear Usuarios')
                            <x-nav-links.admindropdowns href="{{ route('admin.insertuser') }}"
                            :active="request()->routeIs('admin.insertuser')">
                                Agregar
                            </x-nav-links.admindropdowns>
                            @endcan
                            @can('Ver Usuarios')
                            <x-nav-links.admindropdowns href="{{ route('admin.showuser') }}"
                            :active="request()->routeIs('admin.showuser')">
                                Mostrar
                            </x-nav-links.admindropdowns>
                            @endcan
                    </ul>

                </li>
                @can('Agregar Inventario')
                <x-nav-links.admin href="{{ route('admin.create') }}" 
                :active="request()->routeIs('admin.create')">
                    <span class="text-gray-600">
                        <i class="fas fa-plus fa-lg"></i>
                    </span>
                    <span>
                        Crear
                    </span>
                </x-nav-links.admin>
                @endcan
                @can('Ver Inventario')
                <li @click.away="open = false" class="flex flex-col w-full" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full p-2 space-x-3 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>
                            <i class="fa fa-eye mr-2 fa-lg text-gray-600" aria-hidden="true"></i>
                            Mostrar
                        </span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" class="w-full py-2 pl-4 pr-4">
                        
                            <x-nav-links.admindropdowns href="{{ route('admin.showtrademark') }}"
                            :active="request()->routeIs('admin.showtrademark')">
                                Marcas
                            </x-nav-links.admindropdowns>
                        
                        
                            <x-nav-links.admindropdowns href="{{ route('admin.showcategory') }}"
                            :active="request()->routeIs('admin.showcategory')">
                                Categorias
                            </x-nav-links.admindropdowns>
                        
                        
                            <x-nav-links.admindropdowns href="{{route('admin.showsubcategory')}}" 
                            :active="request()->routeIs('admin.showsubcategory')">
                                Subcategorias
                            </x-nav-links.admindropdowns>
                        
                        
                            <x-nav-links.admindropdowns href="{{route('admin.showorigin')}}" 
                            :active="request()->routeIs('admin.showorigin')">
                                Paises
                            </x-nav-links.admindropdowns>
                        
                        
                            <x-nav-links.admindropdowns href="{{route('admin.showprovider')}}"
                            :active="request()->routeIs('admin.showprovider')">
                                Proveedores
                            </x-nav-links.admindropdowns>
                        
                        
                            <x-nav-links.admindropdowns href="{{route('admin.showwarehouse')}}" 
                            :active="request()->routeIs('admin.showwarehouse')">
                                Almacenes
                            </x-nav-links.admindropdowns>
                            <x-nav-links.admindropdowns href="{{route('admin.showproduct')}}"
                            :active="request()->routeIs('admin.showproduct')"
                            >
                                Productos
                            </x-nav-links.admindropdowns>
                            <x-nav-links.admindropdowns href="{{route('admin.showstock')}}" 
                            :active="request()->routeIs('admin.showstock')">
                                Existencias
                            </x-nav-links.admindropdowns>
                    </ul>

                </li>
                @endcan
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
        {{-- Menú de hamburguesa --}}
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="flex flex-col justify-start space-y-0.5">
                <ul class="space-y-2 text-sm mt-5">
                    <x-nav-links.admin href="{{ route('admin.welcome') }}" 
                    :active="request()->routeIs('admin.welcome')">
                        <span class="text-gray-600">
                            <i class="fas fa-laptop-house fa-lg"></i>
                        </span>
                        <span>
                            Inicio
                        </span>
                    </x-nav-links.admin>

                    <li @click.away="open = false" class="flex flex-col w-full" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full p-2 space-x-3 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>
                            <i class="fas fa-users-cog text-gray-600 fa-lg" aria-hidden="true"></i>
                                Administrador
                            </span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                        <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="w-full py-2 pl-4 pr-4">
                                @can('Crear Usuarios')
                                <x-nav-links.admindropdowns href="{{ route('admin.insertuser') }}"
                                :active="request()->routeIs('admin.insertuser')">
                                    Agregar
                                </x-nav-links.admindropdowns>
                                @endcan

                                <x-nav-links.admindropdowns href="{{ route('admin.showuser') }}"
                                :active="request()->routeIs('admin.showuser')">
                                    Mostrar
                                </x-nav-links.admindropdowns>
                        </ul>
                    </li>
                    @can('Agregar Inventario')
                    <x-nav-links.admin href="{{ route('admin.create') }}" 
                    :active="request()->routeIs('admin.create')">
                        <span class="text-gray-600">
                            <i class="fas fa-plus fa-lg"></i>
                        </span>
                        <span>
                            Crear
                        </span>
                    </x-nav-links.admin>
                    @endcan
                    @can('Ver Inventario')
                    <li @click.away="open = false" class="flex flex-col w-full" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full p-2 space-x-3 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>
                                <i class="fa fa-eye mr-2 fa-lg text-gray-600" aria-hidden="true"></i>
                                Mostrar
                            </span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                        <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="w-full py-2 pl-4 pr-4">
                            
                                <x-nav-links.admindropdowns href="{{ route('admin.showtrademark') }}"
                                :active="request()->routeIs('admin.showtrademark')">
                                    Marcas
                                </x-nav-links.admindropdowns>
                            
                            
                                <x-nav-links.admindropdowns href="{{ route('admin.showcategory') }}"
                                :active="request()->routeIs('admin.showcategory')">
                                    Categorias
                                </x-nav-links.admindropdowns>
                            
                            
                                <x-nav-links.admindropdowns href="{{route('admin.showsubcategory')}}" 
                                :active="request()->routeIs('admin.showsubcategory')">
                                    Subcategorias
                                </x-nav-links.admindropdowns>
                            
                            
                                <x-nav-links.admindropdowns href="{{route('admin.showorigin')}}" 
                                :active="request()->routeIs('admin.showorigin')">
                                    Paises
                                </x-nav-links.admindropdowns>
                            
                            
                                <x-nav-links.admindropdowns href="{{route('admin.showprovider')}}"
                                :active="request()->routeIs('admin.showprovider')">
                                    Proveedores
                                </x-nav-links.admindropdowns>
                            
                            
                                <x-nav-links.admindropdowns href="{{route('admin.showwarehouse')}}" 
                                :active="request()->routeIs('admin.showwarehouse')">
                                    Almacenes
                                </x-nav-links.admindropdowns>
                                <x-nav-links.admindropdowns href="{{route('admin.showproduct')}}"
                                :active="request()->routeIs('admin.showproduct')"
                                >
                                    Productos
                                </x-nav-links.admindropdowns>
                                <x-nav-links.admindropdowns href="{{route('admin.showstock')}}" 
                                :active="request()->routeIs('admin.showstock')">
                                    Existencias
                                </x-nav-links.admindropdowns>
                        </ul>

                    </li>
                    @endcan
                </ul>
            </div>
            
        </div>
    </nav>
</div>

