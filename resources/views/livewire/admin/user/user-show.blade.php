{{-- Admin, Tabla de user--}}
<div>
    <x-containers.secondary>
        <x-containers.presentation>
            <x-slot name="title">
                {{__('Usuarios')}}
            </x-slot>
            <x-slot name="signals">
                <span>
                    <i class="fas fa-edit mr-3"></i>
                    {{__('Editar')}}
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
                            {{__('Correo')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Rol')}}
                        </th>
                        <th class="py-3 px-6 text-center">
                            {{__('Editar Permisos')}}
                        </th>
                    </x-slot>
                    <x-slot name="Content">
                        
                        @forelse($users as $key => $user) 
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                    
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        <span class="font-medium">
                                        {{$user->name}}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        <span class="font-medium">
                                        {{$user->email}}
                                        </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        <span class="font-medium">
                                        {{$user->getRoleNames()->first()}}
                                        </span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center cursor-pointer">
                                        {{--llamado del componente de editar usuario--}}
                                        <livewire:admin.user.edit.users-edit :user="$user" :wire:key="$key"/>
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
            @if($users->count())
                <x-slot name="pagination">
                    {{$users->links()}}
                </x-slot>
            @endif
           
        </x-containers.presentation>
    </x-containers.secondary>
</div>


