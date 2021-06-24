
<div>
    <!-- Titulo con boton de comprar-->
    <x-containers.secondary>
        <div class=" w-1/2">
                <span class="text-black font-bold text-center text-4xl">
                    Tu Carrito
                </span>
        </div>
        <div class="flex justify-end">
                    <main class=" flex flex-col sm:flex-row justify-center items-center ">
                    
                        <button
                            class="bg-blue-900 font-semibold text-white p-2 w-80  hover:bg-blue-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
                            @click="showModal2 = true"
                        >
                            Pagar 
                        </button>
                        <!-- Ventana modal -->
                        <x-design.modal-window>
                        </x-design.modal-window>
                    </main>
        </div>
    </x-containers.secondary>
    </br>

    <!-- Vizualizacion de productos -->
    <div class="overflow-x-auto">
                <div class=" bg-white flex items-center justify-center  font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Producto</th>
                                        
                                        <th class="py-3 px-6 text-center">Precio Unitario</th>
                                        <th class="py-3 px-6 text-center">Cantidad</th>
                                        <th class="py-3 px-6 text-center">Total</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                            <div class="mr-2 text-center ">
                                                    <div class="flex items-center text-right justify-end ">
                                                        <a class="font-medium ">Soy un Producto</a>
                                                    </div>
                                                    <img class="w-24 h-24  " src="https://d1nr5wevwcuzuv.cloudfront.net/product_photos/79888954/file_a4b2136b0c_original.jpg"/>
                                                    
                                            </div>
                                            <a href="" class="text-blue-500 font-extrabold underline text-center  hover:text-yellow-500">
                                            Eliminar
                                            </a>
                                        
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <a class="font-medium ">$560.00</a>
                                            </div>
                                        </td>
                                        <td class="py-12 px-6 text-center flex justify-center ">
                                            <div class="custom-number-input h-10 w-32 ">
                                                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                    <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-l cursor-pointer outline-none">
                                                    <span class="m-auto text-2xl ">−</span>
                                                    </button>
                                                    <input type="number" class="border-gray-300 outline-none focus:outline-none text-center w-full bg-gray-300  text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="1"></input>
                                                <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-r cursor-pointer">
                                                    <span class="m-auto text-2xl ">+</span>
                                                </button>
                                            </div>

                                            <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                            </style>

                                            <script>
                                            function decrement(e) {
                                                const btn = e.target.parentNode.parentElement.querySelector(
                                                'button[data-action="decrement"]'
                                                );
                                                const target = btn.nextElementSibling;
                                                let value = Number(target.value);
                                                value--;
                                                target.value = value;
                                            }

                                            function increment(e) {
                                                const btn = e.target.parentNode.parentElement.querySelector(
                                                'button[data-action="decrement"]'
                                                );
                                                const target = btn.nextElementSibling;
                                                let value = Number(target.value);
                                                value++;
                                                target.value = value;
                                            }

                                            const decrementButtons = document.querySelectorAll(
                                                `button[data-action="decrement"]`
                                            );

                                            const incrementButtons = document.querySelectorAll(
                                                `button[data-action="increment"]`
                                            );

                                            decrementButtons.forEach(btn => {
                                                btn.addEventListener("click", decrement);
                                            });

                                            incrementButtons.forEach(btn => {
                                                btn.addEventListener("click", increment);
                                            });       
                                            </script>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <a class="font-medium ">$560.00</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                            <div class="mr-2 text-center ">
                                                    <div class="flex items-center text-right justify-end ">
                                                        <a class="font-medium ">Soy un Producto</a>
                                                    </div>
                                                    <img class="w-24 h-24  " src="https://cdn.shopify.com/s/files/1/2437/4099/products/61gprABzMfL._AC_SL1080_445x470.jpg?v=1573452681"/>
                                                    
                                            </div>
                                            <a href="" class="text-blue-500 font-extrabold underline text-center  hover:text-yellow-500">
                                            Eliminar
                                            </a>
                                        </td>
                                        
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <a class="font-medium ">$560.00</a>
                                            </div>
                                        </td>
                                        <td class="py-12 px-6 text-center flex justify-center">
                                            <div class="custom-number-input h-10 w-32 ">
                                                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                    <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-l cursor-pointer outline-none">
                                                    <span class="m-auto text-2xl ">−</span>
                                                    </button>
                                                    <input type="number" class="border-gray-300 outline-none focus:outline-none text-center w-full bg-gray-300  text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="1"></input>
                                                <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-r cursor-pointer">
                                                    <span class="m-auto text-2xl ">+</span>
                                                </button>
                                            </div>

                                            <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                            </style>

                                            <script>
                                            function decrement(e) {
                                                const btn = e.target.parentNode.parentElement.querySelector(
                                                'button[data-action="decrement"]'
                                                );
                                                const target = btn.nextElementSibling;
                                                let value = Number(target.value);
                                                value--;
                                                target.value = value;
                                            }

                                            function increment(e) {
                                                const btn = e.target.parentNode.parentElement.querySelector(
                                                'button[data-action="decrement"]'
                                                );
                                                const target = btn.nextElementSibling;
                                                let value = Number(target.value);
                                                value++;
                                                target.value = value;
                                            }

                                            const decrementButtons = document.querySelectorAll(
                                                `button[data-action="decrement"]`
                                            );

                                            const incrementButtons = document.querySelectorAll(
                                                `button[data-action="increment"]`
                                            );

                                            decrementButtons.forEach(btn => {
                                                btn.addEventListener("click", decrement);
                                            });

                                            incrementButtons.forEach(btn => {
                                                btn.addEventListener("click", increment);
                                            });       
                                            </script>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <a class="font-medium ">$560.00</a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap text-center">
                                            <div class="mr-2 text-center ">
                                                    <div class="flex items-center text-right justify-end ">
                                                        <a class="font-medium ">Soy un Producto</a>
                                                    </div>
                                                    <img class="w-24 h-24  " src="https://images-na.ssl-images-amazon.com/images/I/61TG0b75zSL.__AC_SY445_SX342_QL70_ML2_.jpg"/>
                                                    
                                            </div>
                                            <a href="" class="text-blue-500 font-extrabold underline text-center  hover:text-yellow-500">
                                            Eliminar
                                            </a>
                                        </td>
                                       
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex items-center justify-center">
                                                <a class="font-medium ">$560.00</a>
                                            </div>
                                        </td>
                                        <td class="py-12 px-6 text-center flex justify-center">
                                            <div class="custom-number-input h-10 w-32 ">
                                                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                    <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-l cursor-pointer outline-none">
                                                    <span class="m-auto text-2xl ">−</span>
                                                    </button>
                                                    <input type="number" class="border-gray-300 outline-none focus:outline-none text-center w-full bg-gray-300  text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="1"></input>
                                                <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-300 h-full w-20 rounded-r cursor-pointer">
                                                    <span class="m-auto text-2xl ">+</span>
                                                </button>
                                            </div>

                                            <style>
                                            input[type='number']::-webkit-inner-spin-button,
                                            input[type='number']::-webkit-outer-spin-button {
                                                -webkit-appearance: none;
                                                margin: 0;
                                            }

                                            .custom-number-input input:focus {
                                                outline: none !important;
                                            }

                                            .custom-number-input button:focus {
                                                outline: none !important;
                                            }
                                            </style>

                                            <script>
                                            function decrement(e) {
                                                const btn = e.target.parentNode.parentElement.querySelector(
                                                'button[data-action="decrement"]'
                                                );
                                                const target = btn.nextElementSibling;
                                                let value = Number(target.value);
                                                value--;
                                                target.value = value;
                                            }

                                            function increment(e) {
                                                const btn = e.target.parentNode.parentElement.querySelector(
                                                'button[data-action="decrement"]'
                                                );
                                                const target = btn.nextElementSibling;
                                                let value = Number(target.value);
                                                value++;
                                                target.value = value;
                                            }

                                            const decrementButtons = document.querySelectorAll(
                                                `button[data-action="decrement"]`
                                            );

                                            const incrementButtons = document.querySelectorAll(
                                                `button[data-action="increment"]`
                                            );

                                            decrementButtons.forEach(btn => {
                                                btn.addEventListener("click", decrement);
                                            });

                                            incrementButtons.forEach(btn => {
                                                btn.addEventListener("click", increment);
                                            });       
                                            </script>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <a class="font-medium ">$560.00</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>        
  

        <!-- This is an example resumen de compra -->
    <div>
        <section class=" text-black bg-white">
            <div class=" mx-auto  ">
                
                <div class="flex flex-wrap -m-4">
                    <div class="w-3/5 p-4">
                       
                    </div>

                   
                    <div class="w-2/5 p-4">
                        <div class="">
                            <!-- light mode -->
                            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                                <div class="overflow-hidden shadow-md">
                                    <!-- card header -->
                                    <div class="px-6 py-4 text-center bg-gray-100 border-b border-gray-200 font-bold uppercase text-black">
                                        Resumen de Compra
                                    </div>

                                    <!-- card body -->
                                    <div class="p-6 bg-white text-black border-b border-gray-200">
                                        <a >Subtotal:</a>
                                        <a class="flex justify-end">$10,000</a>
                                        <a >Envio:</a>
                                        <a class="flex justify-end">$50</a>
                                        <a class="font-bold " >Total de Contado:</a>
                                        <a class="flex justify-end font-bold ">$10,050</a>
                                        
                                        
                                    </div>
                                    

                                    <!-- card footer -->
                                    <div class="p-6 bg-gray-100 border-gray-200 text-right">
                                        <!-- button link -->
                                        <a class="flex justify-center bg-blue-900 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-700 rounded uppercase" 
                                            href="#">PAGAR</a>
                                        <a href="/" class="flex justify-center  text-blue-900  no-underline hover:underline">Seguir Comprando</a>
                                
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

    </div>                               
</div>

    

