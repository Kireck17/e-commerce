<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
        
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased ">
        

        <div class="flex flex-col sm:flex-row min-h-screen">
            <div class="sm:w-3/12  bg-white">
              
                @livewire('nav.navigation')
              
              
            </div>

            <div class="sm:w-9/12 bg-gray-300 py-3  sm:py-0">
                <div class="bg-white py-2 h-16 flex flex-row-reverse items-center px-6">
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
                                            </svg><span class="text-gray-600">Verificado</span>
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
               
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                <!-- Page Content-->
                <main>
                    <x-banners.toast />
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>