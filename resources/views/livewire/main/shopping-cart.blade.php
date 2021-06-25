<div>
    <x-containers.main>
        {{-- Titulo con boton de comprar --}}
        <x-containers.secondary>
            <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                <span class="text-black font-bold text-center text-4xl">
                    {{__('Carrito de compras')}}
                </span>
            </div>
        </x-containers.secondary>
        {{-- Vizualizacion de productos --}}
        <x-containers.secondary>
            <div class="px-3 py-4 space-y-3">
                @foreach($products as $product)
                    <x-cards.cart>
                        <x-slot name="image">
                            @if($product->variation()->first()->files()->count())
                                <img class="h-28 w-full object-cover bg-white rounded-full shadow-md" src="{{$product->variation()->first()->files()->first()->url}}" alt="">
                            @else
                                <img src="https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png" alt="">
                            @endif
                        </x-slot>
                        <x-slot name="data">
                            <h2 class="text-lg leading-5 tracking-widest font-extrabold">
                                {{$product->name}}
                            </h2>
                            <span class="text-md leading-5 tracking-widest font-extrabold">
                                {{$product->trademark()->first()->name}}
                            </span>
                            <span class="">
                                ${{number_format($product->variation()->first()->stock()->first()->price,2,'.',',')}}
                            </span>
                            <div class="flex justify-between w-1/2 sm:w-1/4">
                                <x-buttons.cian>
                                    <i class="fas fa-minus"></i>
                                </x-buttons.cian>
                                <span class="p-2">
                                    1
                                </span>
                                <x-buttons.cian>
                                    <i class="fas fa-plus"></i>
                                </x-buttons.cian>
                            </div>
                        </x-slot>
                        <x-slot name="buttons">
                            <x-buttons.red>
                                <i class="fas fa-trash-alt mr-3"></i>
                                {{__('Quitar del carrito')}}
                            </x-buttons.red>
                        </x-slot>
                    </x-cards.cart>
                @endforeach
            </div>
        </x-containers.secondary>
        <x-containers.secondary>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="">
                    Espacio para la cuponera
                </div>
                <div class="mx-auto w-full px-3 py-2">
                    <div class="overflow-hidden shadow-md">
                        <!-- card header -->
                        <div class="px-6 py-4 text-center bg-cian-dark border-b border-gray-200 font-bold uppercase text-white">
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
                            <a class="flex justify-center bg-cian-light shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-cian-dark rounded uppercase"
                                href="">
                                PAGAR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>

    

