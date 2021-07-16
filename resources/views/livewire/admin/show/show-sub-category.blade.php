{{-- Admin, Tabla de Subcategorias--}}
<div>
    <x-adminver.table>
        {{--Titulo--}}
        <x-slot name="Title">
            SubCategorias
        </x-slot>
        {{--Fin del Titulo--}}

        {{--Inicio de busqueda--}}
        <x-slot name="Search">
            <x-searchadmin.search wire:model="search"/> 
            <x-adminver.select wire:model="porpagina"/>
        </x-slot>
        {{--Fin de busqueda--}}

        {{--Inicio enbacezado de la tabla--}}
        <x-slot name="Header">
            <th class="py-3 px-6 text-center">
                SubCategoria
            </th>
            <th class="py-3 px-6 text-center">
                Opciones
            </th>
        </x-slot>
        {{--Fin enbacezado de la tabla--}}

        {{--Inicio del contenido de la tabla--}}
        <x-slot name="Content">
            @forelse($subcategory  as $cate) 
                <tr class="text-base border-b border-gray-200 hover:bg-gray-200">
                    <td class="py-3 px-6 text-center whitespace-nowrap">
                        <div class="flex item-center justify-center">
                                            
                            <span class="font-medium">
                                {{$cate->name}}
                            </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                                            
                        {{--llamado del componente de editar marca--}}
                            <livewire:admin.edit.sub-category :subcategory="$cate" :wire:key="$cate->id"/>
                            <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:scale-110"
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
        {{--Fin del contenido de la tabla--}}

        {{--Inicio de la paginacion--}}
        <x-slot name="Pagination">
            {{$subcategory->links()}}
        </x-slot>
        {{--Fin de la paginacion--}}  
    </x-adminver.table>
</div>

