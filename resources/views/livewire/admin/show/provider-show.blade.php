{{-- Admin, Tabla de Provedor--}}
<div>
    <div class="overflow-x-auto">
        <div class="pr-5 pl-5 w-full bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full bg-white shadow-md rounded my-6">
            <h1 class="font-serif text-black text-2xl">Provedor</h1>

                {{--Apartado de busqueda--}}
                <div class="flex justify-end w-full">
                    <x-searchadmin.search  wire:model="search"/>
                </div>
                {{--Fin de la busqueda--}}

                {{--Inicio de la tabla--}}
                <table class="min-w-max w-full table-auto">
                    {{--Encabezado de la tabla--}}
                    <thead>
                        <tr class="bg-gray-200 text-gray-900 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">
                                Nombre
                            </th>
                            <th class="py-3 px-6 text-center">
                                Origen
                            </th>
                            <th class="py-3 px-6 text-center">
                                Variaciones
                            </th>
                            <th class="py-3 px-6 text-center">
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    {{--Fin del encabezado--}}

                    {{--Inicio del cuerpo de la tabla--}}
                    <tbody class="text-gray-800 text-sm font-light">
                        @forelse($provider  as $pro) 
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        
                                        <span class="font-medium">{{$pro->name}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        
                                        <span class="font-medium">{{{$pro->origin()->first()->country}}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex item-center justify-center">
                                        
                                        <span class="font-medium">{{{$pro->variation()->first()->id}}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        
                                        <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                          <i class="fas fa-edit"></i>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                                        wire:click="remove_provider({{$pro->id}})">
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
                    </tbody>
                    {{--Fin del cuerpo de la tabla--}}
                </table>
                {{--Fin de la tabla--}}
                
                {{--Paginacion--}}
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{$provider->links()}}
                </div>
            </div>
            
        </div>
    </div>
</div>
