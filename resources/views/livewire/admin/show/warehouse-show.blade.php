{{-- Admin, Tabla de Almacen--}}
<div>
    <x-adminver.table>
       {{--Titulo--}}
       <x-slot name="Title">
            Almacen
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
                Nombre
            </th>
            <th class="py-3 px-6 text-center">
                Opciones
            </th>
        </x-slot>
        {{--Fin enbacezado de la tabla--}}

        {{--Inicio del contenido de la tabla--}}
        <x-slot name="Content">
            @forelse($warehouse  as $key => $ware) 
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        
                    <td class="py-3 px-6 text-center whitespace-nowrap">
                        <div class="flex item-center justify-center">
                            <span class="font-medium">
                            {{$ware->name}}
                            </span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            {{--llamado del componente de editar almacen--}}
                            <livewire:admin.edit.ware-house :waarehouse="$ware" :wire:key="$key"/>

                            <div class="text-red-500 w-4 mr-2 transform hover:text-red-900 hover:scale-110"
                            wire:click="remove_wahouse({{$ware->id}})">
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
            {{$warehouse->links()}}
        </x-slot>
        {{--Fin de la paginacion--}}  
    </x-adminver.table>
</div>


