<div>
    <div class="px-3 py-2">
        <x-buttons.turquoise wire:click="add_image()">
            {{__('Agregar una nueva imagen')}}
        </x-buttons.turquoise>
    </div>
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
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
                            opciones
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
    </div>
</div>
