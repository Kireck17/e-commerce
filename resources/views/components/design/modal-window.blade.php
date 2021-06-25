<!-- Modal2 -->
<body x-data="{showModal2: false}" :class="{'overflow-y-hidden': showModal2}"/>
                        <div
                        class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                        x-show="showModal2"
                        x-transition:enter="transition duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        >
                        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
                            <div
                            class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20"
                            @click.away="showModal2 = false"
                            x-show="showModal2"
                            x-transition:enter="transition transform duration-300"
                            x-transition:enter-start="scale-0"
                            x-transition:enter-end="scale-100"
                            x-transition:leave="transition transform duration-300"
                            x-transition:leave-start="scale-100"
                            x-transition:leave-end="scale-0"
                            >
                            <header class="flex flex-col justify-center items-center p-3 text-black">
                                <!-- button close -->
                                <button 
                                @click="showModal2 = false"
                                class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
                                &cross;
                                </button>
                                <h2 class="font-semibold text-xl">Compra sin registrarte</h2>
                                <button
                                class="bg-blue-600 font-semibold text-white p-2 w-64  hover:bg-blue-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300">
                                <a href="/WayToPay"/>
                                
                                Continuar
                                </button>
                            </header>
                            <main class="p-3 text-center">
                                <p class="font-semibold text-xl">
                                Inicia sesión para comprar 
                                </p>
                                <div class="">
                                        <div class="flex flex-col  border-blue-600">
                                            
                                                <div class="mt-10">
                                                    <form method="POST" action="" autocomplete="">                
                                                        <div class="relative w-full mb-3">
                                                            <input type="email" name="email" class="border-0 p-4 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" />
                                                            <small class="p-2 text-red-500">* Email
                                                            </small>
                                                        </div>
                                                        <div class="relative w-full mb-3">
                                                            <input type="password" name="password" class="border-0 p-4 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Password" style="transition: all 0.15s ease 0s;" />
                                                            <small class="p-2 text-red-500">* Password</small>
                                                        </div>
                                                        
                                                        <div class="flex flex-wrap mt-6">
                                                            <div class="w-1/2 text-left">
                                                                <a href="#" class="text-blue-900 text-xl"><small>Forgot password?</small></a>
                                                            </div>
                                                            
                                                        </div>
                                                    </form>
                                            
                                        </div>
                                </div>
                            </main>
                            <footer class="flex justify-center bg-transparent">
                                <button
                                class="bg-blue-600 font-semibold text-white py-3 w-full rounded-b-md hover:bg-blue-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                                "
                                >
                                Iniciar sesión
                                </button>
                            </footer>
                        </div>