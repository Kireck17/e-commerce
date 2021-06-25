<div>
    <x-banners.category  :url='"https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png"' :description='"Buscador de productos"'/>
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
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            {{$products->links()}}
        </div>    
    </x-containers.secondary>
</div>
