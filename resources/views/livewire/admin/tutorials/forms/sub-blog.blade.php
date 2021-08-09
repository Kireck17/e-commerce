<div>
    <x-buttons.default class="w-10 flex justify-center" wire:click="add_contentblog()">
                    <i class="far fa-plus-square"></i>
    </x-buttons.default>
    @foreach($this->contentblog as $key => $content)
                        <x-containers.formbody class="border-t border-gray-300">
                            <x-slot name="label">
                                {{ __('Imaagen Relacionada:') }}
                            </x-slot>
                            <x-slot name="input">
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 grid grid-cols-2">
                                    <div>
                                        <x-forms.input type="file" wire:model="contentblog.{{$key}}.image"/> 
                                        <x-jet-input-error for="" />
                                    </div>
                                    
                                        <div class="flex flex-col justify-center items-center p-2">
                                            <span class="font-bold">Vista Previa</span>
                                            <img src="" alt="" class="w-20 h-20">
                                        </div>
                                </dd>
                            </x-slot>
                        </x-containers.formbody>
                        <x-containers.formbody>
                            <x-slot name="label">
                                {{ __('Contenido') }}
                            </x-slot>
                    
                            <x-slot name="input">
                                <x-component.inputarea wire:model="contentblog.{{$key}}.content" rows="10" cols="10"></x-component.inputarea>
                            </x-slot>
                        </x-containers.formbody>

                        
                    @endforeach
    <div class="flex justify-center py-3">
        <x-buttons.cian wire:click="">
            {{__('Guardar atributos de la variación')}}&nbsp;
           
        </x-buttons.cian>
    </div>
</div>
