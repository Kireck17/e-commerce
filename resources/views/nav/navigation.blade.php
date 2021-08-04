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


                <li>
                    <a href="#"
                        class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </span>
                        <span>Notificaciones</span>
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
        {{-- Menú de hamburguesa --}}
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="flex flex-col justify-start space-y-0.5">
                <x-nav-links.responsive href="">
                    {{ __('Prueba 1') }}
                </x-nav-links.responsive>
                <x-nav-links.responsive href="">
                    {{ __('Prueba 2') }}
                </x-nav-links.responsive>
                <x-Drop.dropdown>
                    <x-slot name="trigger">
                        <h4 class="cursor-pointer px-2 font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">
                            <i class="fa fa-cog mr-2" aria-hidden="true"></i>
                            Opciones
                        </h4>
                    </x-slot>
                    <x-slot name="content">
                            
                        <div class="flex items-center space-x-4 p-2">
                            <img class="h-12 rounded-full" src="http://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="James Bhatta">
                                <div>
                                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">Usuario</h4>
                                    <span class="text-sm tracking-wide flex items-center space-x-1">
                                     <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                     </svg>
                                     <span class="text-gray-600">Verificado</span>
                                    </span>
                                </div>
                        </div>
                        <a href="#" class="flex justify-center py-3 items-center  text-gray-700 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </span>
                            <span>Logout</span>
                        </a>

                    </x-slot>

                </x-Drop.dropdown>

                <x-Drop.dropdown>

                    <x-slot name="trigger">
                        <h4 class="cursor-pointer px-2 font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">
                          <i class="fa fa-bell mr-2" aria-hidden="true"></i>
                             Notificaciones
                        </h4>
                    </x-slot>

                    <x-slot name="content">
                        Notificaciones x2
                    </x-slot>

                </x-Drop.dropdown>
            </div>
            
        </div>
    </nav>
</div>

