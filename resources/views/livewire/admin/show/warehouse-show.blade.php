{{-- Admin, Tabla de Almacen--}}
<div>
    <x-containers.secondary>
        <x-containers.presentation>
            <x-slot name="title">
                {{__('Almacen')}}
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
                            {{__('Nombre')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Opciones')}}
                        </th>
                    </x-slot>
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
                                <div class="flex item-center justify-center cursor-pointer">
                                    {{--llamado del componente de editar almacen--}}
                                    <livewire:admin.edit.ware-house :waarehouse="$ware" :wire:key="'edit-'.$ware->id"/>
                                    <livewire:admin.delete.warehouse :waarehouse="$ware" :wire:key="'delete-'.$ware->id"/>
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
            @if($warehouse->count())
                <x-slot name="pagination">
                {{$warehouse->links()}}
                </x-slot>
            @endif
        </x-containers.presentation>
    </x-containers.secondary>
</div>


