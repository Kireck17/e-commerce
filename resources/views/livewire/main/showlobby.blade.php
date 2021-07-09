<div>
    <x-slot name="header">
        <h2 class="font-extrabold text-lg leading-4 tracking-widest">
            {{__('Contacto')}}
            <i class="fab fa-whatsapp mr-3 ml-3"></i>
            5581505891
        </h2>
    </x-slot>
    <x-banners.category  :url='"https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png"' :description='"Hola lobby"'/>
    <x-containers.main>
        {{--Category--}}
        <x-containers.secondary>
            <h4 class="text-black font-bold text-center text-4xl">
                Categorías populares
            </h4>
            <div class="flex justify-around items-baseline flex-wrap px-3 py-2">
                @foreach($categories as $category)
                    <a class="flex-shrink-0 mt-3 rounded-md bg-turquoise-dark text-white py-2 px-3 uppercase font-bold text-xs hover:bg-turquoise-light" href="{{ route('category.show',['category' => $category->id]) }}">
                        {{__($category->name)}}
                    </a>
                @endforeach
            </div>
        </x-containers.secondary>
        {{--Search--}}
        <x-containers.secondary>
            <div class="flex items-center">
                <input wire:model="search" type="search" placeholder="Buscador de productos"
                class="rounded-l-full w-full py-4 px-6 border-none text-gray-700 leading-tight focus:outline-none" id="search" type="text">
                <div class="p-4">
                    <span class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </x-containers.secondary>
        {{-- Productos --}}
        <x-containers.secondary>
            <div class="px-0 sm:px-4 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4">
                @forelse($products as $producto)
                    <x-cards.three :link="route('product.showproduct',['product' => $producto->id])">
                        <x-slot name="image">
                            @if($producto->variation()->first()->files()->count())
                                <img class="h-full bg-white rounded-md shadow-md" src="{{$producto->variation()->first()->files()->first()->url}}" alt="">
                            @else
                                <img src="https://www.bicifan.uy/wp-content/uploads/2016/09/product-sin-imagen.png" alt="">
                            @endif
                        </x-slot>
                        <x-slot name="trademark">
                            {{$producto->trademark()->first()->name}}
                        </x-slot>
                        <x-slot name="name">
                            {{$producto->name}}
                        </x-slot>
                        <x-slot name="price">
                            $ {{$producto->variation()->first()->stock()->first()->price}}
                        </x-slot>
                    </x-cards.three>
                @empty
                    <div class="lg:col-span-5 sm:col-span-4 col-span-1">
                        <span class="ml-6 text-transparent  text-black text-4xl font-extrabold">
                            Sin resultados para la Busqueda "{{$this->search}}"
                        </span>
                    </div>
                @endforelse
            </div>
        </x-containers.secondary>
        {{--offers--}}
        <x-containers.secondary>
            <div>
                <span class="text-black font-bold text-center text-4xl">
                    Ofertas
                </span>
                <a href="/oferts" class="text-blue-500 font-extrabold underline text-center text-base hover:text-yellow-500">
                    Ver mas
                </a>
            </div>
            <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
                <x-design.card-offer >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-offer>
                <x-design.card-offer >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-offer>
                <x-design.card-offer >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-offer>
                <x-design.card-offer >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-offer>
            </div>
        </x-containers.secondary>
        {{--popular--}}
        <x-containers.secondary>
            <div>
                <span class="text-black font-bold text-center text-4xl">
                    Artículos Más Comprados
                </span>
                <a href="/best" class="text-blue-500 font-extrabold underline text-center text-base hover:text-yellow-500">
                    Ver mas
                </a>
            </div>
            <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
                <x-design.card-default >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-default>
                <x-design.card-default >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-default>
                <x-design.card-default >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-default>
                <x-design.card-default >
                    <x-slot name="image">
                        imagen
                    </x-slot>
                    <x-slot name="trademark">
                        Sax Shields
                    </x-slot>
                    <x-slot name="name">
                        Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                    </x-slot>
                    <x-slot name="price">
                        $98.00
                    </x-slot>
                </x-design.card-default>
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>
