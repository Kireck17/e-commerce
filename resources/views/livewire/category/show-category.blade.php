<div>
    <x-slot name="header">
        <h2 class="text-xl font-bold leading-4 tracking-widest">
            {{$category->name}}
        </h2>
    </x-slot>
    <x-banners.category :description="'El estilo es saber quién eres, lo que quieres decir y que no te importe nada.'" :url="'https://media.timeout.com/images/105254327/image.jpg'" />
    {{-- Contenedor principal --}}
    <div class="my-6 mx-0 sm:mx-3">
        {{-- Contenedor secundario --}}
        <div class="p-3 bg-white shadow-md sm:rounded-md">
            <div class="grid grid-cols-1 sm:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach($products as $product)
                    <x-cards.main>
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
