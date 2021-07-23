{{-- Admin, Tabla de Categorias--}}
<div>
    <x-containers.secondary>
        <x-containers.presentation>
            <x-slot name="title">
                {{__('Categorias')}}
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
                            {{__('Categorias')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Descripcion')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Opciones')}}
                        </th>
                    </x-slot>
                    <x-slot name="Content">
                        @forelse($category  as $cate) 
                            <tr class="text-base border-b border-gray-200 hover:bg-gray-200">
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                                    
                                        <span class="font-medium">
                                            {{$cate->name}}
                                        </span>
                                    </div>
                                </td>
                                @if($cate->description=="")
                                
                                    <td class="py-3 px-6 text-center whitespace-nowrap">
                                        <div class="flex item-center justify-center">
                                                        
                                            <span class="font-medium">
                                                Sin descripcion
                                            </span>
                                        </div>
                                    </td>
                                
                                @else
                                
                                    <td class="py-3 px-6 text-center whitespace-nowrap">
                                        <div class="flex item-center justify-center">
                                                        
                                            <span class="font-medium">
                                                {{$cate->description}}
                                            </span>
                                        </div>
                                    </td>
                                
                                @endif
                                
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center cursor-pointer">
                                                    
                                    {{--llamado del componente de editar marca--}}
                                        <livewire:admin.edit.category :category="$cate" :wire:key="$cate->id"/>
                                        <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                                        wire:click="remove({{$cate->id}})">
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
            @if($category->count())
                <x-slot name="pagination">
                    {{$category->links()}}
                </x-slot>
            @endif
        </x-containers.presentation>
    </x-containers.secondary>
    
</div>