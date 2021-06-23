{{--Vista de categoria--}}
<div>
   {{--Baner--}}
   <x-banners.category  :url="$category->file()->first()->url" :description="$category->description" />
   {{--Header--}}
   <x-containers.secondary >
            
            <section class="sm:flex sm:flex  justify-center items-center space-y-0 md:space-y-0 md:grid md:grid-cols-4 ">
                
                <span class="ml-6 text-transparent font-bold text-black text-4xl font-extrabold">
                    {{$category->name}}
                </span>

                <div class="p-2 md:w-24 ">
                    <div class="flex justify-around items-center px-2 py-3 bg-gray-900 rounded-lg shadow-xs cursor-wait bg-yellow-400  hover:bg-red-500  hover:text-red-100 text-black">
                        <div>
                        <p class="text-xs font-medium ml-2 ">
                          Compras Relampago
                        </p>

                        </div>
                    </div>
                </div>
                
                <div class="p-2 md:w-24">
                    <div class="flex justify-around items-center px-2 py-3 bg-gray-200 rounded-lg shadow-xs cursor-wait bg-green-400  hover:bg-red-500  hover:text-red-100 text-white">
                        <div>
                        <p class="text-xs font-medium ml-2 ">
                          Menos de 500
                        </p>

                        </div>
                    </div>
                </div>
                 
                <div class="items-center w-80 sm:96 ">
      
                    <x-searchcategory.search  wire:model="search"/>
    
                </div>
                
                
            </section>
        
    </x-containers.secondary>

    
    
    
        {{-- Contenedor secundario --}}
        <div class="p-3  shadow-md  bg-gray-50">
            <div class="ml-2 mr-2 grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-5 gap-6">
            {{--View de los  Productos dependiendo la categoria--}}
                @forelse($products as $product)
                    <x-cards.main>
                        <x-slot name="image">
                          
                          @if($product->variation()->first()->files()->count())
                            <img class="h-full bg-white rounded-md shadow-md" src="{{$product->variation()->first()->files()->first()->url}}" alt="">
                          @else
                            <img src="https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png" alt="">
                          @endif
                        </x-slot>
                        <x-slot name="trademark">
                            {{$product->trademark()->first()->name}}
                        </x-slot>
                        <x-slot name="name">
                            {{$product->name}}
                        </x-slot>
                        <x-slot name="price">
                            ${{$product->variation()->first()->stock()->first()->price}}
                        </x-slot>
                    </x-cards.main>
                @empty
                    <div class="lg:col-span-5 sm:col-span-4 col-span-1 text-center">

                        <span class="ml-6 text-transparent font-bold text-gray-400 text-4xl font-extrabold">
                          Sin resultados para la busqueda "{{$this->search}}"
                        </span>
                    </div>
                @endforelse
            </div>
        </div>
        
    
</div>


