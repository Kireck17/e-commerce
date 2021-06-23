<div>
    <x-slot name="header">
        Ventas, información de productos y apoyo técnico al WhatsApp 5581505891
    </x-slot>
    <x-banners.category  :url='"https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png"' :description='"Hola lobby"'/>   
   {{--Search--}}
    <div class="p-8">
        <div class="bg-white flex items-center rounded-full shadow-xl">
            <input wire:model="search" type="search" placeholder="Buscador de productos" 
            class="rounded-l-full w-full py-4 px-6 border-none text-gray-700 leading-tight focus:outline-none" id="search" type="text">
            <div class="p-4">
                <spam class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                    <i class="fas fa-search"></i>
                </spam>
            </div>
        </div>
    </div> 
    <x-containers.secondary>
        <div class="px-3 mx-2 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
            @forelse($products as $product)
                    <x-cards.three>
                        <x-slot name="image">
                          @if($product->variation()->first()->files()->count())
                            <img class="h-full bg-white rounded-md shadow-md" src="{{$product->variation()->first()->files()->first()->url}}" alt="">
                          @else
                            <img src="https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png" alt="">
                          @endif
                        </x-slot>
                        <x-slot name="trademark">
                            Categoria : {{$product->category->first()->name}}, {{$product->subcategory()->first()->name}} 
                            <br>
                            Marca : {{$product->trademark()->first()->name}}
                        </x-slot>
                        <x-slot name="name">
                            {{$product->name}}
                        </x-slot>
                        <x-slot name="price">
                        $ {{$product->variation()->first()->stock()->first()->price}} ({{$product->variation()->first()->stock()->first()->quantity}})
                        </x-slot>
                    </x-cards.three>
            @empty
                <div class="lg:col-span-5 sm:col-span-4 col-span-1">
                    <span class="ml-6 text-transparent font-bold text-black text-4xl font-extrabold">
                        Sin resultados para la Busqueda "{{$this->search}}"
                    </span>
                </div>
            @endforelse
        </div>
        <div class="bg-white px-4 py-2 border-t border-gray-200 sm:px-6 sm:py-8">
            {{$products->links()}}
        </div>    
    </x-containers.secondary>
   {{--Category--}}
   <div class="container mx-auto bg-white py-4 px-4 my-4 border rounded-lg overflow-hidden shadow-xl">
        <h4 class="text-black font-bold text-center text-4xl">
            Categorías populares
        </h4>
        <section class="px-6 my-3 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-1">
            <div class="flex justify-around items-center px-2 py-3 bg-red-500 text-white rounded-lg shadow-xs cursor-pointer hover:bg-gray-700 hover:text-gray-100">
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <title>Symfony icon</title>
                    <path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <p class="text-sm font-extrabold ml-2 ">
                        Soporte tecnico
                    </p>
            </div>
           @foreach($categories as $category)  
                <a href="{{ route('category.show',['category' => $category->id]) }}">
                    <div class="flex justify-around items-center px-2 py-3 bg-blue-500 text-turquoise-dark rounded-lg shadow-xs cursor-pointer hover:bg-gray-700 hover:text-gray-100">
                        <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Symfony icon</title>
                        <path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                        <p class="text-sm font-extrabold ml-2 ">
                            {{__($category->name)}}
                        </p>
                        
                    </div>
                </a>
            @endforeach
        </section>
   </div>
   {{--offers--}}
   <div class="container mx-auto bg-white py-4 px-4 my-4 border rounded-lg overflow-hidden shadow-xl">
        <div>
            <span class="text-black font-bold text-center text-4xl">
                Ofertas
            </span>
            <a href="#" class="text-blue-500 font-extrabold underline text-center text-base hover:text-yellow-500">
                Ver mas
            </a> 
        </div>
        <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
            <x-design.card-offer :link="'#'"> 
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
            <x-design.card-offer :link="'#'"> 
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
            <x-design.card-offer :link="'#'"> 
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
            <x-design.card-offer :link="'#'"> 
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
   {{--popular--}}
   <div class="container mx-auto bg-white py-4 px-4 my-4 border rounded-lg overflow-hidden shadow-xl">
        <div>
            <span class="text-black font-bold text-center text-4xl">
                Arítulos más comprados
            </span>
            <a href="#" class="text-blue-500 font-extrabold underline text-center text-base hover:text-yellow-500">
                Ver mas
            </a> 
        </div>
        <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
            <x-design.card-default :link="'#'"> 
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
            <x-design.card-default :link="'#'"> 
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
            <x-design.card-default :link="'#'"> 
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
            <x-design.card-default :link="'#'"> 
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
   
   
   
   
   
   
   </div>
</div>
