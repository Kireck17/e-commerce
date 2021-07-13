<div>
    {{-- Admin, Table the Products --}}
    <div class="overflow-x-auto">
        <div
            class="pr-5 pl-5 w-full flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full bg-white shadow-md rounded my-6">
                <h1 class="font-serif text-black text-2xl">Productos</h1>
                {{-- Apartado de busqueda --}}
                <div class="flex justify-end w-full">
                    <x-searchadmin.search wire:model="search" />
                </div>
                {{-- Fin de la busqueda --}}

                {{-- Inicio de la tabla --}}
                <table class="min-w-max w-full table-auto">
                    {{-- Encabezado de la tabla --}}
                    <thead class="bg-gray-200 text-gray-900 uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Producto
                            </th>
                            <th class="py-3 px-6 text-center">
                                Codigo de barras
                            </th>
                            <th class="py-3 px-6 text-center">
                                Más
                            </th>
                            <th class="py-3 px-6 text-center">
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    {{-- Fin del encabezado --}}

                    {{-- Inicio del cuerpo de la tabla --}}
                    <tbody class="text-gray-800 text-sm font-light">
                        @forelse($products  as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center justify-start">
                                        <span class="font-medium">{{ $product->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        <span class="font-medium">{{ $product->barcode }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-indigo-400 hover:scale-110"
                                            wire:click="description({{$product->id}})">
                                            <i class="fas fa-scroll"></i>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"
                                            wire:click="plus({{$product->id}})">
                                            <i class="far fa-eye"></i>                                          
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">  
                                            <a href="{{route('admin.updateproduct',['product' => $product->id])}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                                            wire:click="remove_product({{ $product->id }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @empty
                            <div class="lg:col-span-5 sm:col-span-4 col-span-1 text-center">
                                <span class="ml-6 text-transparent text-gray-400 text-4xl font-extrabold">
                                    Sin resultados para la busqueda "{{ $this->search }}"
                                </span>
                            </div>
                        @endforelse
                    </tbody>
                    {{-- Fin del cuerpo de la tabla --}}
                </table>
                {{-- Fin de la tabla --}}

                {{-- Paginacion --}}
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </div>
    <!-- Modal Description -->
    <x-jet-dialog-modal wire:model="description_show">
        <x-slot name="title">
            <span class="uppercase">
                Descripción
            </span>
        </x-slot>
        <x-slot name="content">
            <p wire:model="product.description">

            </p>
        </x-slot>
        <x-slot name="footer">
            <x-buttons.red wire:click="cancel(1)">
                <i class="far fa-window-close"></i>
            </x-buttons.red>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Modal plus -->
    <x-jet-dialog-modal wire:model="plus_show">
        <x-slot name="title">
            <span class="uppercase">
                Producto Caracteristicas
            </span> 
        </x-slot>
        <x-slot name="content">
            <table class="min-w-max w-full table-auto">
                {{-- Encabezado de la tabla --}}
                <thead>
                    <tr class="bg-gray-200 text-gray-900 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-center">
                            Tipo
                        </th>
                        <th class="py-3 px-6 text-center">
                            Valor
                        </th>
                    </tr>
                </thead>
                {{-- Fin del encabezado --}}

                {{-- Inicio del cuerpo de la tabla --}}
                <tbody class="text-gray-800 text-sm font-light">
                    @foreach($variaciones  as $variation)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex item-center justify-center">
                                    <span class="font-medium">{{ $variation->attribute_value()->first()->value}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex item-center justify-center">
                                    <span class="font-medium">{{ $variation->attribute_value()->first()->attribute()->first()->type}}</span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @foreach($variaciones  as $trademark)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex item-center justify-center">
                                    <span class="font-medium">Marca</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex item-center justify-center">
                                    <span class="font-medium">{{ $trademark->product()->first()->trademark()->first()->name}}</span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @foreach($variaciones  as $category)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex item-center justify-center">
                                    <span class="font-medium">Categoría</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center whitespace-nowrap">
                                <div class="flex item-center justify-center">
                                    <span class="font-medium">
                                        {{ $category->product()->first()->category()->first()->name}}, {{ $variation->product()->first()->subcategory()->first()->name}}
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- Fin del cuerpo de la tabla --}}
            </table>
        </x-slot>
        <x-slot name="footer">
            <x-buttons.red wire:click="cancel(0)">
                <i class="far fa-window-close"></i>
            </x-buttons.red>
        </x-slot>
    </x-jet-dialog-modal>
</div>
