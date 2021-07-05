{{--Vista de categoria--}}
<div>

   {{--Baner--}}
   <x-banners.category  :url="$category->file()->first()->url" :description="$category->description" />
    <x-containers.main>
        {{--Header--}}
        <x-containers.secondary>
            <div class="flex flex-col sm:flex-row sm:justify-between items-center px-3 py-3">
                <span class=" text-black text-3xl font-extrabold">
                    {{$category->name}}
                </span>
                <x-searchcategory.search  wire:model="search"/>
            </div>
            <div class="px-3 py-2">
                Filtros para busqueda
            </div>
        </x-containers.secondary>
        <x-containers.secondary>
            <div class="py-8 px-4 grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-5 gap-6">
                {{--View de los  Productos dependiendo la categoria--}}
                @forelse($products as $product)
                    <x-cards.main :link="route('product.showproduct',['product' => $product->id])">
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
                        <span class="ml-6 text-transparent text-gray-400 text-4xl font-extrabold">
                            Sin resultados para la busqueda "{{$this->search}}"
                        </span>
                    </div>
                @endforelse
            </div>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{$products->links()}}
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>







