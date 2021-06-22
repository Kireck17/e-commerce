<div>
   <x-banners.category  :url="$category->file()->first()->url" />
    
   <x-containers.secondary>
        <div class="md:grid md:grid-cols-4 md:gap-x-8 md:gap-y-10">
            <span class="ml-6 bg-clip-text text-transparent bg-gray-900 font-bold  text-4xl font-extrabold">
                {{$category->name}}
            </span>
            
            <section class="space-y-0 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-3 md:gap-y-10 ">
                
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
               
            </section>
        </div>
    </x-containers.secondary>
    
    {{-- Contenedor principal --}}
    <div class="my-6 mx-0 sm:mx-3">
        {{-- Contenedor secundario --}}
        <div class="p-3 bg-gray-200 shadow-md sm:rounded-md">
            <div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-5 gap-5">
                @foreach($products as $product)
                    <x-cards.main>
                        <x-slot name="image">
                          <img class="w-full h-full" src="{{$product->variation()->first()->file->url}}" >
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
                @endforeach
            </div>
        </div>
    </div>
</div>


