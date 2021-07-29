<div>
    <x-containers.secondary>
        <x-containers.presentation>
            <x-slot name="title">
                {{__('Productos')}}
            </x-slot>
            <x-slot name="signals">
                <span>
                    <i class="fas fa-scroll"></i>
                    {{__('Detalles')}}
                </span>
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
                            {{__('Opciones')}}
                        </th>
                    </x-slot>
                    <x-slot name="Content">
                        @forelse($products  as $product)
                            <tr class="text-base border-b border-gray-200 hover:bg-gray-200">
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center justify-items-start">
                                        <img alt="" class="w-14 h-14 ring-2 ring-cian-dark rounded-full object-cover mr-3"
                                            @if(isset($product->variation()->first()->files()->first()->url))
                                                src="{{asset($product->variation()->first()->files()->first()->url)}}"
                                            @else
                                                src="{{asset('storage/images/producto-sin-imagen.png')}}"
                                            @endif

                                        />
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

                                        <livewire:admin.show.variation :product="$product" :wire:key="'modal-'.$product->id"/>

                                        {{--llamando a la ruta de edicion del producto y la funcion de eliminar--}}
                                        <div class="text-blue-500 w-4 mr-2 transform hover:text-blue-900 hover:scale-110">  
                                            <a href="{{route('admin.updateproduct',['product_id' => $product->id])}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        
                                        <livewire:admin.delete.products :product="$product" :wire:key="'delete-'.$product->id"/>
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
    

    <!-- Modal caracteristicas -->
    <x-jet-dialog-modal wire:model="show">
        <x-slot name="title">
            <div class="py-2 uppercase bg-cian-light rounded-sm"">
                Caracteristicas del Producto
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="divide-x-0">
                {{--Start the Table--}}
                <table class="min-w-max w-full table-auto">
                    {{-- Inicio del cuerpo de la tabla --}}
                    <tbody class="text-gray-800 text-sm font-light">
                        @if(isset($variaciones))
                            @foreach($variaciones  as $variation)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-center whitespace-nowrap">
                                        <div class="flex item-center justify-center">
                                            <span class="font-medium">{{ $variation->attribute_value()->first()->attribute()->first()->type}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center whitespace-nowrap">
                                        <div class="flex item-center justify-center">
                                            <span class="font-medium">{{ $variation->attribute_value()->first()->value}}</span>
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
                        @else
                        <div class="lg:col-span-5 sm:col-span-4 col-span-1 text-center">
                            <span class="ml-6 text-transparent text-gray-400 text-4xl font-extrabold">
                                Sin resultados de variaciones
                            </span>
                        </div>
                        @endif
                    </tbody>
                    {{-- Fin del cuerpo de la tabla --}}
                </table>
                {{--END the Table--}}

                {{--Start the Description--}}
                <div class="flex flex-col mt-4">
                    {{--Title--}}
                    <div class="py-2 uppercase bg-cian-light rounded-sm">
                        {{__('Descripción')}}
                    </div>
                    {{--Content Description--}}
                    <p class="bg-gray-200 my-2 rounded-sm">
                        @if($this->description != "")
                            {{__(
                                $this->description->first()->description
                            )}}
                        @endif
                    </p>
                </div>
                {{--Start the Description--}}
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-buttons.red @Click="show = !show" class="bg-cian-light">
                <i class="far fa-window-close"></i>
            </x-buttons.red>
        </x-slot>
    </x-jet-dialog-modal>
</div>
