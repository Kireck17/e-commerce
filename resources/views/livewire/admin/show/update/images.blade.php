<div>
    <div class="px-3 py-2">
        <x-buttons.turquoise wire:click="show_images()">
            <i class="fas fa-eye"></i>
        </x-buttons.turquoise>
    </div>
    <x-modal.main wire:model="show_modal">
        <x-slot name="title">
            {{__('Imágenes del producto')}}
        </x-slot>
        <x-slot name="content">
            <x-buttons.turquoise wire:click="add_image()">
                {{__('Agregar imágen')}}
            </x-buttons.turquoise>
            <div class="grid grid-cols-3 gap-4 mt-4">
                @foreach($this->files as $key => $file)
                    <div class="flex justify-center items-center">
                        <img class="h-32 w-auto border border-gray-200 rounded-md"
                            @if(isset($file['url']) && !isset($images[$key]['url']))
                                src="{{asset($file['url'])}}"
                            @endif
                            @if(isset($file['url']) && isset($images[$key]['url']))
                                src="{{$images[$key]['url']->temporaryUrl()}}"
                            @endif
                            @if(!isset($file['url']) && isset($images[$key]['url']))
                                src="{{$images[$key]['url']->temporaryUrl()}}"
                            @endif
                            @if(!isset($file['url']) && !isset($images[$key]['url']))
                                src="{{asset('storage/images/producto-sin-imagen.png')}}"
                            @endif
                        >
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-base mb-2">
                            {{__('Cambiar imágen')}}
                        </span>
                        <x-component.input type="file" class="w-full" wire:model="images.{{$key}}.url"/>
                    </div>
                    <div class="flex justify-center items-center">
                        @if(isset($file['id']))
                            <x-buttons.red wire:click="delete_file({{$file['id']}})">
                                <i class="fas fa-trash-alt"></i>
                            </x-buttons.red>
                        @else
                            <x-buttons.red wire:click="remove_file({{$key}})">
                                <i class="fas fa-trash-alt"></i>
                            </x-buttons.red>
                        @endif
                    </div>
                @endforeach
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-buttons.default @click="show = ! show">
                {{__('Cerrar')}}
            </x-buttons.default>
            <div wire:loading.remove>
                <x-buttons.turquoise wire:click="savefile()">
                    {{__('Guardar')}}
                </x-buttons.turquoise>
            </div>
        </x-slot>
    </x-modal.main>
    {{--<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-cian-dark text-white uppercase">
                <tr>
                    <th class="px-3 py-2">Vista previa</th>
                    <th class="px-3 py-2">Cargar Imagen</th>
                    <th class="px-3 py-2">opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->files as $key => $file)
                    <tr>
                        <td class="px-3 py-2">
                            <img class="h-32 w-auto mx-auto" 
                                @if(isset($file['url']) && !isset($images[$key]['url'])) 
                                    src="{{asset($file['url'])}}"
                                @endif  
                                @if(isset($file['url']) && isset($images[$key]['url'])) 
                                    src="{{$images[$key]['url']->temporaryUrl()}}"
                                @endif
                                @if(!isset($file['url']) && isset($images[$key]['url'])) 
                                    src="{{$images[$key]['url']->temporaryUrl()}}"
                                @endif
                                @if(!isset($file['url']) && !isset($images[$key]['url']))
                                    src="{{asset('storage/images/producto-sin-imagen.png')}}"
                                @endif 
                            >
                        </td>
                        <td class="px-3 py-2 flex justify-center items-center">
                            <x-component.input type="file" class="w-1/2" wire:model="images.{{$key}}.url"/>
                        </td>
                        <td class="px-3 py-2">
                            @if(isset($file['id']))

                                <x-buttons.default wire:click="delete_file({{$file['id']}})">
                                    Eliminar
                                </x-buttons.default>

                            @else
                                <x-buttons.default wire:click="remove_file({{$key}})">
                                    Eliminar
                                </x-buttons.default>

                            @endif
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>  
    </div>    
    <div class="flex justify-end py-3">
        <x-buttons.cian wire:click="savefile()">
            {{__('Guardar')}}
        </x-buttons.cian>
    </div>--}}
</div>
