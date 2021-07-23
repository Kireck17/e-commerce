<div>
    <x-containers.secondary>
        <x-containers.presentation>
            <x-slot name="title">
                {{__('Productos')}}
            </x-slot>
            <x-slot name="signals">
                <span>
                    <i class="fas fa-edit mr-3"></i>
                    {{__('Editar')}}
                </span>
                <span>
                    <i class="fas fa-trash-alt mr-3"></i>
                    {{__('Eliminar')}}
                </span>
            </x-slot>
            <x-slot name="controls">
                <x-searchadmin.search wire:model="search"/>
                <x-adminver.select wire:model="porpagina"/>
            </x-slot>
            <x-slot name="content">
                <x-tables.main>
                    <x-slot name="Header">
                        <th class="py-3 px-6 text-center">
                            {{__('Producto')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Codigo de barras')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Detalles')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Opciones')}}
                        </th>
                    </x-slot>
                    <x-slot name="Content">
                        @forelse($products  as $product)
                            <tr class="text-base border-b border-gray-200 hover:bg-gray-200">

                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        <span class="font-medium">
                                            {{ $product->name }}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        <span class="font-medium">
                                            {{ $product->barcode }}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center cursor-pointer">
                                        {{--llamando a las modeles de detalles del producto--}}
                                        <div class="text-indigo-500 w-4 mr-2 transform hover:text-indigo-900 hover:scale-110"
                                            wire:click="description({{$product->id}})">
                                            <i class="fas fa-scroll"></i>
                                        </div>
                                        <div class="text-purple-500 w-4 mr-2 transform hover:text-purple-900 hover:scale-110"
                                            wire:click="variation({{$product->id}})">
                                            <i class="far fa-eye"></i>                                          
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center cursor-pointer">
                                        {{--llamando a la ruta de edicion del producto y la funcion de eliminar--}}
                                        <div class="text-blue-500 w-4 mr-2 transform hover:text-blue-900 hover:scale-110">  
                                            <a href="{{route('admin.updateproduct',['product_id' => $product->id])}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="text-red-500 w-4 mr-2 transform hover:text-red-900 hover:scale-110"
                                            wire:click="remove_product({{ $product->id }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div class="lg:col-span-5 sm:col-span-4 col-span-1 text-center">
                                <span class="ml-6 text-transparent text-gray-400 text-4xl font-extrabold">
                                    Sin resultados para la busqueda "{{$this->search}}"
                                </span>
                            </div>
                        @endforelse
                    </x-slot>
                </x-tables.main>
            </x-slot>
            @if($products->count())
                <x-slot name="pagination">
                    {{ $products->links() }}
                </x-slot>
            @endif
        </x-containers.presentation>
    </x-containers.secondary>
    
    <!-- Modal Description -->
    <x-jet-dialog-modal wire:model="description_show">
        <x-slot name="title">
            <span class="uppercase">
                Descripción
            </span>
        </x-slot>
        <x-slot name="content">
            <x-component.inputarea wire:model="product.description"
            class="h-screen border-none" disabled>
            </x-component.inputarea>
        </x-slot>
        <x-slot name="footer">
            <x-buttons.red wire:click="cancel(1)">
                <i class="far fa-window-close"></i>
            </x-buttons.red>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Modal caracteristicas -->
    <x-jet-dialog-modal wire:model="caracteristics">
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
