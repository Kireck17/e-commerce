<div>
    <x-slot name="header">
        <h1 class="flex justify-center items-center text-6xl font-extrabold">
            Buscador de productos
        </h1>
    </x-slot>
    <div class="p-8">
        <div class="bg-white flex items-center rounded-full shadow-xl">
            <input wire:model="search" type="search" placeholder="Busca tú producto deseado ..."
            class="rounded-l-full w-full py-4 px-6 border-none text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">
            <div class="p-4">
                <button class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div> 
    <x-containers.secondary>
        <div class="px-3 mx-2 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
            @foreach($products as $product)
                <x-design.card-search>
                    <x-slot name="name">
                        {{$product->name}}
                    </x-slot>
                    <x-slot name="category">
                        categoria : {{$product->category->first()->name}}, {{$product->subcategory()->first()->name}} 
                       <br>
                       Marca : {{$product->trademark()->first()->name}}
                    </x-slot>
                    <x-slot name="img">
                        @if($product->variation()->first()->files()->count())
                            <img class="object-contain h-48 w-full" src="{{$product->variation()->first()->files()->first()->url}}" alt="">
                        @else
                            <img class="object-contain h-48 w-full" src="https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png" alt="">
                        @endif
                    </x-slot>
                    <x-slot name="price">
                        $ {{$product->variation()->first()->stock()->first()->price}} ({{$product->variation()->first()->stock()->first()->quantity}})
                    </x-slot>
                </x-design.card-search>
            @endforeach
        </div>
        
    </x-containers.secondary>
</div>
